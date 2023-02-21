@extends('backend_base')
@section('content')
    <div class="col-md-12" bis_skin_checked="1">

        <div class="card" bis_skin_checked="1">
            <div class="card-header" bis_skin_checked="1">
                <h3 class="card-title">Edit User</h3>
            </div>
            <div class="flash-message">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>

            <form method="POST" action="{{ route('user.update', ['user' => $user]) }}">
                @method('PATCH')
                @csrf
                <div class="card-body" bis_skin_checked="1">
                    <div class="form-group" bis_skin_checked="1">
                        <label for="full_name">Name</label>
                        <input type="text" class="form-control" id="full_name" name="full_name"
                            value="{{ $user->full_name }}">
                    </div>
                    <div class="form-group" bis_skin_checked="1">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                            value="{{ $user->email }}">
                    </div>
                    <div class="form-group" bis_skin_checked="1">
                        <label for="user_type">Gender</label>

                        <select name="gender" id="gender" class="form-control" required>
                            <option value="{{ App\Constants::MALE }}"
                                {{ App\Constants::MALE == $user->gender ? 'selected' : '' }}>{{ App\Constants::MALE }}
                            </option>
                            <option
                                value="{{ App\Constants::FEMALE }}"{{ App\Constants::FEMALE == $user->gender ? 'selected' : '' }}>
                                {{ App\Constants::FEMALE }}</option>

                        </select>
                    </div>
                    <div class="form-group" bis_skin_checked="1">
                        <label for="user_type">User Type</label>

                        <select name="user_type" id="user_type" class="form-control" required>
                            @foreach (App\Constants::USER_TYPE as $key => $user_type)
                                <option value="{{ $key }}"{{ $key == $user->user_type ? 'selected' : '' }}>
                                    {{ $user_type }}</option>
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
