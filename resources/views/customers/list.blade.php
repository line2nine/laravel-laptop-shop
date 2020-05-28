@extends('admin.dashboard')
@section('content')
    @include('sweetalert::alert')
    <h1 style="text-align: center">Customers List</h1>
    <a href="{{route('customer.register')}}" class="btn btn-success mb-2">Create</a>
    <form class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="input-group">
            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for...">
            <div class="input-group-append">
                <button class="btn btn-dark" type="submit">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Age</th>
            <th scope="col">Address</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($customers as $key => $customer)
            <tr>
                <th scope="row">{{ ++$key }}</th>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->email }}</td>
                <td>{{ $customer->age }}</td>
                <td>{{ $customer->address }}</td>
                <td>
                    <a href="{{route('customer.detail', $customer->id)}}" class="btn btn-warning">View</a>
                    <a href="{{ route('customer.edit', $customer->id)}}" class="btn btn-primary">Edit</a>
                    <a onclick="return confirm('Are You Sure?')" href="{{ route('customer.delete', $customer->id)}}"
                       class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
