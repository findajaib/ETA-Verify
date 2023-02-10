@extends('backend_base')
@section('title', 'All Roles')
@section('breadcrumb')
    <li>All Roles</li>
@endsection
@section('content')
    <div class="card card-outline card-info">
        <div class="card-header">
            <div class="card-title">
                Role List({{ count($roles) }})
            </div>
            <div class="card-tools">

                <a class="btn btn-primary" href="{{ route('roles.create') }}">Register new</a>

            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($roles as $key=>$role)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $role->name }}</td>
                            <td>{{ $role->created_at ? $role->created_at : '' }}</td>
                            <td>{{ $role->updated_at ? $role->updated_at : '' }}</td>
                            <td>
                                <a href="{{ route('roles.show', ['role' => $role->id]) }}" class="btn btn-info btn-sm"
                                    title="add permissions">
                                    <i class="fa fa-check-double"></i>
                                </a>
                                {{-- <a href="#" class="btn btn-success btn-sm" title="add users">
                                <i class="fa fa-users"></i>
                            </a> --}}

                                <a href="{{ route('roles.edit', ['role' => $role->id]) }}" class="btn btn-warning btn-sm"
                                    title="edit">
                                    <i class="fa fa-pen"></i>
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">no records found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
