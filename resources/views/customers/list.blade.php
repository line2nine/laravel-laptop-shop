@extends('admin.dashboard')
@section('content')
    @include('sweetalert::alert')
    <h1 style="text-align: center">Customers List</h1>
    <a href="{{route('customer.register')}}" class="btn btn-success mb-2">Create</a>
    <form class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search mb-2" method="get"
          action="{{route('customer.search')}}">
        @csrf
        <div class="input-group">
            <input type="search" class="form-control bg-light border-0 small" name="keyword"
                   value="{{request('keyword')?request('keyword'):''}}" placeholder="Search for name...">
            <div class="input-group-append">
                <button class="btn btn-dark" type="submit">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form>
    @if(request('keyword'))
        @if($customers->count() >= 2)
            <p class="text-primary">Found {{$customers->count()}} results matched with "{{request('keyword')}}"</p>
        @else
            <p class="text-primary">Found {{$customers->count()}} result matched with "{{request('keyword')}}"</p>
        @endif
    @endif
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Avatar</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Age</th>
            <th scope="col">Address</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @forelse($customers as $key => $customer)
            <tr>
                <th scope="row">{{ ++$key }}</th>
                <td><img src="{{ asset('storage/' . $customer->image)}}" class="avatar"></td>
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
        @empty
            <tr>
                <td colspan="4">No Data</td>
            </tr>
        @endforelse
        </tbody>
    </table>
@endsection
