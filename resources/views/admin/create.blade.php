@extends('layouts.admin')

@section('content')
<h1 class="mb-4">Add Product</h1>

<div class="card p-4 shadow-sm">
    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group mb-3">
            <label for="item_name" class="form-label">Item Name:</label>
            <input type="text" name="item_name" id="item_name" class="form-control" required placeholder="Enter product name">
        </div>

        <div class="form-group mb-3">
            <label for="description" class="form-label">Description:</label>
            <input type="text" name="description" id="description" class="form-control" required placeholder="Enter product description">
        </div>

        <div class="form-group mb-3">
            <label for="price" class="form-label">Price (LKR):</label>
            <input type="number" step="0.01" name="price" id="price" class="form-control" required placeholder="Enter product price">
        </div>

        <div class="form-group mb-3">
            <label for="availability" class="form-label">Availability:</label>
            <select name="availability" id="availability" class="form-select">
                <option value="Available">Available</option>
                <option value="Out of Stock">Out of Stock</option>
            </select>
        </div>

        <div class="form-group mb-4">
            <label for="image" class="form-label">Select Image:</label>
            <input type="file" name="image" id="image" class="form-control" required>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Add Product</button>
        </div>
    </form>
</div>
@endsection
