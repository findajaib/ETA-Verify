@extends('base')
@section('title', 'All Users')
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endpush
@section('breadcrumb')
    <li>All Users</li>
@endsection
@section('content')

    <div class="card  m-0">

        <div class="card collapsed-card m-0">
            <div class="card-header">
                <div class="card-tools">
                    <a href="{{ route('users.create') }}" class="btn btn-primary"><i class="fas fa-user"></i> New User</a>
                </div>
                <form class="form-inline card-title" method="Get" action="{{ route('user.index') }}">
                    <div class="input-group ">
                        @csrf
                        <input class="form-control" autocomplete="off" name="name" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class=" input-group-text btn btn-navbar" type="submit" value="filter_form_single"
                                name="filter_form_single">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>

        <div class="card-body m-0">
            <div class="row m-0">


                <table class="table table-hover  table-striped table-head-fixed">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Gender</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($users as $user)
                            <tr>
                                <td>

                                    {{ $user->id }}
                                </td>
                                <td>
                                    <b> {{ $user->username }}</b>
                                </td>
                                <td>
                                    {{ $user->name() }}
                                </td>
                                <td>
                                    {{ $user->email }}</td>
                                <td>
                                    {{-- @dd($user->roles) --}}
                                    @if (count($user->roles)<1)
                                        <p class="text text-danger">No Role Assigned Yet</p>
                                    @else
                                        @foreach ($user->roles as $role)
                                            <li><a href="{{ route('user.removeRole',['user'=>$user->id,'role'=>$role->id]) }}" onclick="confirm('Are You Sure Removing This Role From User?');">{{ $role->name }}</a></li>
                                        @endforeach
                                    @endif
                                </td>
                                <td>{{ $user->gender }}</td>
                                <td>
                                    <a href="{{ route('users.edit', ['user' => $user->id]) }}" class="btn btn-warning btn-sm"
                                        title="edit user">
                                        <i class="fa fa-pen"></i>
                                    </a>
                                    <a href="#" onclick="deleteUserFormAction('{{ route('users.destroy', ['user' => $user->id]) }}');"
                                        class="btn btn-danger btn-sm" title="remove user">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#roleModal"
                                        class="btn btn-primary"><i class="fa fa-plus" onclick="getId({{ $user->id }})"> Assign Role</i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        @if (count($users) < 1)
                            <tr>

                                <td colspan="7">no records found</td>
                            </tr>
                        @endif

                    </tbody>


                </table>
                <div class="float-right" id="custompaginator">{!! $users->withQueryString()->links() !!}</div>
                <form action="" id="deleteUserForm" method="POST">@method('DELETE') @csrf</form>
            </div>
        </div>
    </div><!-- Modal -->
    <div class="modal fade" id="roleModal" tabindex="-1" role="dialog" aria-labelledby="roleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
           <form action="{{ route('user.assignRole') }}" method="POST">
            @csrf
            <input type="hidden" name="user_id" id="user_id">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="roleModalLabel">Assign Role</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-12">
                        <select name="role_id" id="role_id" class="select2">
                            <option  disabled >Select Role</option>
                            @foreach ($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
           </form>
        </div>
    </div>

@endsection
@push('js')
    <script src="{{ asset('assets/js/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/select2/js/select2.full.min.js') }}"></script>
    <script>
        function deleteUserFormAction(url) {
            var result = confirm('Do you want to delete this user');
            if (result) {
                $('#deleteUserForm').attr('action', url);
                $('#deleteUserForm').submit();
            }
        }
    </script>
    <script>
        $(function() {
            $('.select2').select2({
                theme: 'bootstrap4'
            });
        });
    </script>
    <script>
        function getId(id){
         document.getElementById('user_id').value=id;
        }
    </script>
@endpush
