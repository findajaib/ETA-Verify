@extends('backend_base')
@section('title', 'Role Permission')
@section('breadcrumb')
    <li class="breadcrumb-item ">
        <a href="{{ route('roles.index') }}">Role</a>
    </li>
    <li class="breadcrumb-item active">Permission</li>
@endsection
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap4-duallistbox/css/bootstrap-duallistbox.min.css  ') }}">
@endpush
@section('content')
    <div class="card ">
        <div class="card-header">
            <h3 class="card-title">
                <span class="badge badge-warning ">{{ $role->name }}</span>
                Role
            </h3>

            <div class="card-tools">
                <a href="{{ route('roles.index') }}" class="btn btn-primary btn-sm">back</a>

            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <form method="POST" action="{{ route('role.permission') }}">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <input hidden value="{{ $role->id }}" name="userrolepermission">
                            <select class="duallistbox" multiple="multiple" name="permission[]">
                                @foreach ($role->permissions()->get() as $permission)
                                    <option value="{{ $permission->id }}" title="{{ $permission->name }}" selected>
                                        {{ $permission->name }}</option>
                                @endforeach
                                @foreach ($permissions as $permission)
                                    <option value="{{ $permission->id }}" title="{{ $permission->name }}">
                                        {{ $permission->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <div class="float-right">
                    <a href="{{ route('roles.index') }}" class="btn btn-primary">Cancel</a>
                    <button class="btn btn-info">Save</button>
                </div>
            </div>
        </form>
    </div>
@endsection
@push('js')
    <script src="{{ asset('assets/plugins/bootstrap4-duallistbox/js/jquery.bootstrap-duallistbox.min.js') }}"></script>
    <script>
        $(function() {
            $('.duallistbox').bootstrapDualListbox({
                nonSelectedListLabel: 'Denied Privileges',
                selectedListLabel: 'Granted Privilages',
                preserveSelectionOnMove: 'moved',
                moveOnSelect: false,
                moveSelectedLabel: "Grant Selected Privileges",
                moveAllLabel: "Grant All Privilages ",
                removeSelectedLabel: "Revoke Selected Privileges",
                removeAllLabel: "Revoke All privileges",
                selectorMinimalHeight: "400"
            });

            $('.duallistbox').on('change', function() {
                $('.duallistbox').bootstrapDualListbox('refresh', true);
            })
        })
    </script>
@endpush
