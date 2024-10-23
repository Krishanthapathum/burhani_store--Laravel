<!-- resources/views/admin/index.blade.php -->
@extends('layouts.admin')

@section('content')
<h1>Products</h1>
<a href="{{ route('admin.products.create') }}" class="btn btn-primary mb-3">Add Product</a>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Image</th>
            <th>Item Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Availability</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td><img src="{{ asset('images/'.$product->image_filename) }}" alt="{{ $product->item_name }}" width="50"></td>
            <td>{{ $product->item_name }}</td>
            <td>{{ $product->description }}</td>
            <td>RS {{ $product->price }}</td>
            <td>{{ $product->availability }}</td>
            <td>
                <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
