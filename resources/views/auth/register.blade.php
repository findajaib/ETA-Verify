@extends('backend_base')
@section('content')
    <div class="col-md-12" bis_skin_checked="1">

        <div class="card" bis_skin_checked="1">
            <div class="card-header" bis_skin_checked="1">
                <h3 class="card-title">Registering New System User</h3>
            </div>
            <div class="flash-message">
                @foreach (['danger', 'warning', 'success', 'info', 'message'] as $msg)
                    @if (Session::has($msg))
                        <div class="alert alert-{{ $msg }} alert-dismissible fade show" role="alert">
                            {{ Session::get($msg) }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                @endforeach
            </div>

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="card-body" bis_skin_checked="1">
                    <div class="form-group" bis_skin_checked="1">
                        <label for="full_name">Name</label>
                        <input type="text" class="form-control" id="full_name" name="full_name"
                            placeholder="Enter Full Name" required>
                    </div>
                    <div class="form-group" bis_skin_checked="1">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                            placeholder="Enter Email Address" required>
                    </div>
                    <div class="form-group" bis_skin_checked="1">
                        <label for="user_type">User Type</label>

                        <select name="user_type" id="user_type" class="form-control" required>
                            <option value="" disabled selected>Select User Type</option>
                            @foreach (App\Constants::USER_TYPE as $key => $user)
                                <option value="{{ $key }}">{{ $user }}</option>
                            @endforeach
                        </select>
                    </div>

                </div>

                <div class="card-footer" bis_skin_checked="1">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>



    </div>
@endsection
