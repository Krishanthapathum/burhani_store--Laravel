<!-- resources/views/admin/index.blade.php -->
@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Products</h1>
    <hr>
    {{-- <a href="{{ route('admin.products.create') }}" class="btn btn-primary mb-3">Add Product</a> --}}

    <!-- Success Message -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Horizontal Card Layout -->
    <div class="row">
        @foreach($products as $product)
        <div class="col-md-12 mb-3">
            <div class="card shadow-sm p-2" style="display: flex; flex-direction: row; align-items: center; border-radius: 5px;">

                <!-- Product Image -->
                <img src="{{ asset('images/'.$product->image_filename) }}" alt="{{ $product->item_name }}" style="width: 60px; height: 60px; object-fit: cover; margin-right: 20px; border-radius: 5px;">

                <!-- Product Details -->
                <div style="flex-grow: 1;">
                    <h5 class="mb-1">{{ $product->item_name }}</h5>
                    <p class="text-muted mb-1">{{ \Illuminate\Support\Str::limit($product->description, 50) }}</p>
                </div>

                <!-- Price -->
                <div class="text-center" style="min-width: 120px;">
                    <p class="font-weight-bold mb-0">RS {{ number_format($product->price, 2) }}</p>
                </div>

                <!-- Availability -->
                <div class="text-center" style="min-width: 100px;">
                    <span class="badge {{ $product->availability == 'Available' ? 'badge-success' : 'badge-danger' }}">
                        {{ $product->availability }}
                    </span>
                </div>

                <!-- Action Buttons -->
                <div class="d-flex align-items-center" style="min-width: 150px;">
                    <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-warning btn-sm mr-2">Edit</a>
                    <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </div>

            </div>
        </div>
        @endforeach
    </div>

    <hr>
</div>
@endsection
