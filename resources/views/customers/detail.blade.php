@extends('admin.dashboard')
@section('content2')
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input readonly name="name" class="form-control" id="exampleInputEmail1" value="{{$customer->name}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input readonly name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                   value="{{$customer->email}}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Age</label>
            <input readonly name="age" class="form-control" id="exampleInputPassword1" value="{{$customer->age}}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Address</label>
            <input readonly name="address" class="form-control" value="{{$customer->address}}">
        </div>
        <a class="btn btn-secondary" href="{{route('customer.list')}}">Back</a>
@endsection
