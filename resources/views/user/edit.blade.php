@extends('base')
@section('title','Update User')
@section('breadcrumb')
<li>Update User</li>
@endsection
@section('content')
    <form action="{{ route('users.update', ['user'=>$user->id]) }}" method="post">
        @csrf
        @method('PATCH')
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-4">
                        <label class="col-sm-5 control-label no-padding-right">First Name</label>
                        <input type="text" class="form-control" placeholder="Enter First name" name="first_name" value="{{ $user->first_name }}" required>
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
                        <input type="text" class="form-control" name="middle_name" placeholder="Enter Middle name" value="{{ $user->middle_name }}" required>
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
                        <input type="text" class="form-control" name="last_name" placeholder="Enter Last name" value="{{ $user->last_name }}" required>
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
                        <input type="text" class="form-control" name="email" placeholder="Enter email" value="{{ $user->email }}" required>
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
                        <input type="text" class="form-control" name="username" placeholder="Enter username" value="{{ $user->username }}" required>
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
                            <option value="male" {{ $user->gender == 'male' ? 'selected' : ''}}>Male</option>
                            <option value="femlae" {{ $user->gender == 'female' ? 'selected' : '' }}>Female</option>
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
                        <input type="text" class="form-control" name="phone" placeholder="Enter Phone Number" value="{{ $user->phone }}" required>
                        <div class="help-block with-errors">
                            @error('phone')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <button class="btn btn-success float-right">Update</button>

                <a class="btn btn-primary mx-2" href="{{ route('user.index') }}">back to list</a>
            </div>
        </div>
    </form>
@endsection
