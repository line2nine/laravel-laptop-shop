@extends('admin.dashboard')
@section('content2')
    <form action="{{route('user.edit', $user->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" value="{{$user->name}}" required
                   class="form-control
            @if($errors->first('name'))
                       is-invalid
            @endif">
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
            <input type="email" name="email" value="{{$user->email}}" id="exampleInputEmail1"
                   aria-describedby="emailHelp" required class="form-control
            @if($errors->first('email'))
                is-invalid
            @endif">
            @if($errors->first('email'))
                <p class="text-danger">{{$errors->first('email')}}</p>
            @endif
        </div>
        <div class="form-group">
            <label>Role</label>
            <select class="form-control" name="role">
                <option
                    @if($user->role == \App\Http\Controllers\Role::ADMIN)
                    selected
                    @endif
                    value="{{ \App\Http\Controllers\Role::ADMIN }}">Admin</option>
                <option
                    @if($user->role == \App\Http\Controllers\Role::MODERATOR)
                    selected
                    @endif
                    value="{{ \App\Http\Controllers\Role::MODERATOR }}">Moderator
                </option>
                <option
                    @if($user->role == \App\Http\Controllers\Role::MEMBER)
                    selected
                    @endif
                    value="{{ \App\Http\Controllers\Role::MEMBER }}">Member
                </option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-secondary" href="{{route('user.list')}}">Cancel</a>
    </form>
@endsection
