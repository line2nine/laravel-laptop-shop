@extends('admin.dashboard')
@section('content2')
    <form action="{{route('user.changePass', $user->id)}}" method="post">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{$user->name}}" readonly>
        </div>
        <div class="form-group">
            <label>Current Password<sup class="text-danger">*</sup></label>
            <input type="password" name="oldPass" class="form-control
            @if(\Illuminate\Support\Facades\Session::has('error'))
                is-invalid
            @endif" required>
            @if(\Illuminate\Support\Facades\Session::has('error'))
                <p class="text-danger">{{\Illuminate\Support\Facades\Session::get('error')}}</p>
            @endif
        </div>
        <div class="form-group">
            <label>New Password<sup class="text-danger">*</sup></label>
            <input type="password" name="newPass" class="form-control @if($errors->first('newPass'))
                is-invalid
            @endif" required>
            @if($errors->first('newPass'))
                <p class="text-danger">{{$errors->first('newPass')}}</p>
            @endif
        </div>
        <div class="form-group">
            <label>Confirm New Password<sup class="text-danger">*</sup></label>
            <input type="password" name="confirmPass" class="form-control @if($errors->first('confirmPass'))
                is-invalid
            @endif" required>
            @if($errors->first('confirmPass'))
                <p class="text-danger">{{$errors->first('confirmPass')}}</p>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-secondary" href="{{route('user.list')}}">Cancel</a>
    </form>
@endsection
