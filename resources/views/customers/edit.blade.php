@extends('admin.dashboard')
@section('content2')
    <form action="{{route('customer.edit', $customer->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label >Name</label>
            <input type="text" name="name" class="form-control" value="{{$customer->name}}">
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                   value="{{$customer->email}}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Age</label>
            <input type="number" name="age" class="form-control" id="exampleInputPassword1" value="{{$customer->age}}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Address</label>
            <input type="text" name="address" class="form-control" value="{{$customer->address}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-secondary" href="{{route('customer.list')}}">Cancel</a>
    </form>
@endsection
