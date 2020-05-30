@extends('admin.dashboard')
@section('content2')
    <form action="{{route('user.create')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" value="{{old('name')}}"
                   class="form-control
            @if($errors->first('name'))
                       is-invalid
            @endif" required>
            @if($errors->first('name'))
                <p class="text-danger">{{$errors->first('name')}}</p>
            @endif
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" name="email" value="{{old('email')}}" id="exampleInputEmail1"
                   aria-describedby="emailHelp" required class="form-control
            @if($errors->first('email'))
                is-invalid
            @endif">
            @if($errors->first('email'))
                <p class="text-danger">{{$errors->first('email')}}</p>
            @endif
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Password</label>
            <input type="password" name="password" required minlength="8" maxlength="32" class="form-control
            @if($errors->first('password'))
                is-invalid
            @endif">
            @if($errors->first('password'))
                <p class="text-danger">{{ $errors->first('password') }}</p>
            @endif
        </div>
        <div class="form-group">
            <label>Role</label>
            <select class="form-control" name="role">
                <option
                    value="{{ \App\Http\Controllers\Role::ADMIN }}">Admin
                </option>
                <option
                    value="{{ \App\Http\Controllers\Role::MODERATOR }}">Moderator
                </option>
                <option
                    value="{{ \App\Http\Controllers\Role::MEMBER }}">Member
                </option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-secondary" href="{{route('user.list')}}">Cancel</a>
    </form>
@endsection
