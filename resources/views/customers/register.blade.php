@extends('admin.dashboard')
@section('content2')
    <form action="{{route('customer.register')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" value="{{old('name')}}" class="form-control @if($errors->first('name')) is-invalid @endif" required>
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
            <input type="email" name="email" value="{{old('email')}}" class="form-control @if($errors->first('email')) is-invalid @endif"
                   id="exampleInputEmail1"
                   aria-describedby="emailHelp" required>
            @if($errors->first('email'))
                <p class="text-danger">{{$errors->first('email')}}</p>
            @endif
        </div>
        <div class="form-group">
            <label>Age</label>
            <input type="number" name="age" value="{{old('age')}}" class="form-control @if($errors->first('age')) is-invalid @endif" required>
            @if($errors->first('age'))
                <p class="text-danger">{{$errors->first('age')}}</p>
            @endif
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Address</label>
            <input type="text" name="address" class="form-control @if($errors->first('address')) is-invalid @endif"
                   required>
            @if($errors->first('address'))
                <p class="text-danger">{{$errors->first('address')}}</p>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-secondary" href="{{route('customer.list')}}">Cancel</a>
    </form>
@endsection
