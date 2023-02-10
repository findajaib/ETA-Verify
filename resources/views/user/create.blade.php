@extends('base')
@section('title','Add new User')
@section('breadcrumb')
<li>Add new User</li>
@endsection
@section('content')
    <form action="{{ route('users.store') }}" method="post">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-4">
                        <label class="col-sm-5 control-label no-padding-right">First Name</label>
                        <input type="text" class="form-control" placeholder="Enter First name" name="first_name" value="{{ old('first_name') }}" required>
                        <div class="help-block with-errors">
                            @error('first_name')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-group col-md-4">
                        <label class="col-sm-5 control-label no-padding-right">Middle Name</label>
                        <input type="text" class="form-control" name="middle_name" placeholder="Enter Middle name" value="{{ old('middle_name') }}" required>
                        <div class="help-block with-errors">
                            @error('middle_name')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <label class="col-sm-5 control-label no-padding-right">Last Name</label>
                        <input type="text" class="form-control" name="last_name" placeholder="Enter Last name" value="{{ old('last_name') }}" required>
                        <div class="help-block with-errors">
                            @error('last_name')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <label class="col-sm-5 control-label no-padding-right">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Enter email" value="{{ old('email') }}" required>
                        <div class="help-block with-errors">
                            @error('email')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <label class="col-sm-5 control-label no-padding-right">username</label>
                        <input type="text" class="form-control" name="username" placeholder="Enter username" value="{{ old('username') }}" required>
                        <div class="help-block with-errors">
                            @error('username')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Gender:</label>
                        <select name="gender" class="form-control select2" required>
                            <option value="">Select</option>
                            <option value="male" {{ old('gender') == 'male' ? 'selected' : ''}}>Male</option>
                            <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                        </select>
                        <div class="help-block with-errors">
                            @error('gender')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <label class="col-sm-5 control-label no-padding-right">Phone Number</label>
                        <input type="text" class="form-control" name="phone" placeholder="Enter Phone Number" value="{{ old('phone') }}" required>
                        <div class="help-block with-errors">
                            @error('phone')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <button class="btn btn-success float-right">Save</button>

                <a class="btn btn-primary mx-2" href="{{ route('user.index') }}">back to list</a>
            </div>
        </div>
    </form>
@endsection
