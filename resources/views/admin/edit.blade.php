@extends('layouts.admin')

@section('content')
    <h1 class="mb-4">Edit Product</h1>
<hr>
    <!-- Display success message -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Display validation errors -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Product Edit Form -->
    <div class="card p-4 shadow-sm">
        <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Item Name -->
            <div class="form-group mb-3">
                <label for="item_name" class="form-label">Item Name</label>
                <input type="text" name="item_name" class="form-control" value="{{ $product->item_name }}" required>
            </div>

            <!-- Description -->
            <div class="form-group mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" class="form-control" rows="4" required>{{ $product->description }}</textarea>
            </div>

            <!-- Price -->
            <div class="form-group mb-3">
                <label for="price" class="form-label">Price (LKR)</label>
                <input type="number" step="0.01" name="price" class="form-control" value="{{ $product->price }}" required>
            </div>

            <!-- Availability -->
            <div class="form-group mb-3">
                <label for="availability" class="form-label">Availability</label>
                <select name="availability" class="form-select">
                    <option value="Available" {{ $product->availability == 'Available' ? 'selected' : '' }}>Available</option>
                    <option value="Out of Stock" {{ $product->availability == 'Out of Stock' ? 'selected' : '' }}>Out of Stock</option>
                </select>
            </div>

            <!-- Product Image Upload -->
            <div class="form-group mb-4">
                <label for="image" class="form-label">Product Image</label>
                <input type="file" name="image" class="form-control">
                @if ($product->image_filename)
                    <div class="mt-2">
                        <img src="{{ asset('images/' . $product->image_filename) }}" alt="Product Image" style="max-width: 200px;">
                    </div>
                @endif
            </div>

            <!-- Submit Button -->
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update Product</button>
            </div>
        </form>
    </div>
@endsection
