@extends('backend_base')
@section('title', 'All Permissions')
@section('breadcrumb')
    <li>All Permissions</li>
@endsection
@section('content')
    <div class="card card-outline card-info">
        <div class="card-header">
            <div class="card-title">
                Permissions List({{ count($permissions) }})
            </div>
            <div class="card-tools">

                <a class="btn btn-primary" href="{{ route('permissions.create') }}">Register new</a>

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
                        {{-- <th>actions</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @forelse ($permissions as $key=>$permission)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $permission->name }}</td>
                            <td>{{ $permission->created_at ? $permission->created_at : '' }}</td>
                            <td>{{ $permission->updated_at ? $permission->updated_at : '' }}</td>
                            <td>
                                {{-- <a href="{{ route('permissions.edit', ['permission'=>$permission->id]) }}" class="btn btn-warning btn-sm" title="edit">
                                <i class="fa fa-pen"></i>
                            </a> --}}
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
