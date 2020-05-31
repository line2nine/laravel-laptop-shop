@extends('admin.dashboard')
@section('content')
    @include('sweetalert::alert')
    <h1 style="text-align: center">Product List</h1>
    <a href="{{route('product.create')}}" class="btn btn-success mb-2">Create</a>
    <form class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search mb-2" method="get"
          action="{{route('product.search')}}">
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
        @if($products->count() >= 2)
            <p class="text-primary">Found {{$products->count()}} results matched with "{{request('keyword')}}"</p>
        @else
            <p class="text-primary">Found {{$products->count()}} result matched with "{{request('keyword')}}"</p>
        @endif
    @endif
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Image</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Detail</th>
            <th scope="col">Category</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @forelse($products as $key => $product)
            <tr>
                <th scope="row">{{ ++$key }}</th>
                <td><img src="{{ asset('storage/' . $product->image)}}" class="avatar"></td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->detail }}</td>
                <td>{{ $product->category->name }}</td>
                <td>
                    <a href="{{route('product.detail', $product->id)}}" class="btn btn-warning">View</a>
                    <a href="{{ route('product.edit', $product->id)}}" class="btn btn-primary">Edit</a>
                    <a onclick="return confirm('Are You Sure?')" href="{{ route('product.delete', $product->id)}}"
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
