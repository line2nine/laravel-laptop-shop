@extends('admin.dashboard')
@section('content')
    @if(\Illuminate\Support\Facades\Session::has('success'))
        <span style="color: red">{{\Illuminate\Support\Facades\Session::get('success')}}</span>
    @endif
    <br>
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
                    <a onclick="return confirm('Are You Sure?')"
                       href="{{ route('customer.delete', $customer->id)}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
