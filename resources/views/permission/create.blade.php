@extends('backend_base')
@section('title', 'Add new Permission')
@section('breadcrumb')
    <li>Add new Permission</li>
@endsection
@section('content')
    <form action="{{ route('permissions.store') }}" method="post">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="col-sm-5 control-label no-padding-right">Name</label>
                        <input type="text" class="form-control" name="name">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <button class="btn btn-success float-right">Save</button>

                <a class="btn btn-primary mx-2" href="{{ route('permissions.index') }}">back to list</a>
            </div>
        </div>
    </form>
@endsection
