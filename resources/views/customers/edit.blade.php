@extends('admin.dashboard')
@section('content2')
    <form action="{{route('customer.edit', $customer->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <img class="avatar-edit mr-2" src="{{asset('storage/' . $customer->image)}}" alt="#">
            <input type="file" name="image">
        </div>
        <div class="form-group">
            <label >Name</label>
            <input type="text" name="name" class="form-control" value="{{$customer->name}}">
            @if($errors->first('name'))
                <p class="text-danger">{{$errors->first('name')}}</p>
            @endif
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                   value="{{$customer->email}}">
            @if($errors->first('email'))
                <p class="text-danger">{{$errors->first('email')}}</p>
            @endif
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Age</label>
            <input type="number" name="age" class="form-control" id="exampleInputPassword1" value="{{$customer->age}}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Address</label>
            <input type="text" name="address" class="form-control" value="{{$customer->address}}">
            @if($errors->first('address'))
                <p class="text-danger">{{$errors->first('address')}}</p>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-secondary" href="{{route('customer.list')}}">Cancel</a>
    </form>
@endsection
