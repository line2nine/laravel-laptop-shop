@extends('admin.dashboard')
@section('content2')
    <form action="{{route('product.create')}}" method="post" enctype="multipart/form-data">
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
            <label>Description</label>
            <input type="text" name="description" value="{{old('description')}}" class="form-control @if($errors->first('description')) is-invalid @endif" required>
            @if($errors->first('description'))
                <p class="text-danger">{{$errors->first('description')}}</p>
            @endif
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="number" name="price" value="{{old('price')}}" class="form-control @if($errors->first('price')) is-invalid @endif" required>
            @if($errors->first('price'))
                <p class="text-danger">{{$errors->first('price')}}</p>
            @endif
        </div>
        <div class="form-group">
            <label>Detail</label>
            <textarea name="detail" class="form-control @if($errors->first('detail')) is-invalid @endif" required></textarea>
            @if($errors->first('detail'))
                <p class="text-danger">{{$errors->first('detail')}}</p>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-secondary" href="{{route('product.list')}}">Cancel</a>
    </form>
@endsection
