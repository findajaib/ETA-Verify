@extends('backend_base')
@section('title', 'Edit User Group')
@section('breadcrumb')
    <li>Edit Role</li>
@endsection
@section('content')
    <form action="{{ route('userGroups.update', ['userGroup' => $role->id]) }}" method="post">
        @csrf
        @method('PATCH')
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="col-sm-5 control-label no-padding-right">Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $role->name }}">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-sm-5 control-label no-padding-right">Description</label>
                        <input type="text" class="form-control" name="description" value="{{ $role->description }}">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <button class="btn btn-success float-right">Update</button>

                <a class="btn btn-primary mx-2" href="{{ route('userGroups.index') }}">back to list</a>
            </div>
        </div>
    </form>
@endsection
