@extends('layouts.admin')

@section('content')
    <h1 class="mb-4">Add Product</h1>
    <hr>
    <div class="card p-4 shadow-sm">
        <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group mb-3">
                <label for="item_code" class="form-label">Item Code:</label>
                <input type="text" name="item_code" id="item_code" class="form-control" required
                    placeholder="Enter unique item code">
            </div>

            <div class="form-group mb-3">
                <label for="item_name" class="form-label">Item Name:</label>
                <input type="text" name="item_name" id="item_name" class="form-control" required
                    placeholder="Enter product name">
            </div>

            <div class="form-group mb-3">
                <label for="description" class="form-label">Description:</label>
                <input type="text" name="description" id="description" class="form-control" required
                    placeholder="Enter product description">
            </div>

            <div class="form-group mb-3">
                <label for="price" class="form-label">Price (LKR):</label>
                <input type="number" step="0.01" name="price" id="price" class="form-control" required
                    placeholder="Enter product price">
            </div>

            <div class="row">
                <div class="form-group mb-3">
                    <label for="availability" class="form-label font-weight-bold" style="color: #555;">Availability:</label>
                    <select name="availability" id="availability" class="form-select p-2"
                        style="border-radius: 5px; background-color: #f8f9fa; transition: border-color 0.3s ease;">
                        <option value="Available">Available</option>
                        <option value="Out of Stock">Out of Stock</option>
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="category" class="form-label font-weight-bold" style="color: #555;">Category:</label>
                    <select name="category" id="category" class="form-select p-2"
                        style="border-radius: 5px; background-color: #f8f9fa; transition: border-color 0.3s ease;">
                        <option value="Category 1">Category 1</option>
                        <option value="Category 2">Category 2</option>
                        <option value="Category 3">Category 3</option>
                        <option value="Category 4">Category 4</option>
                    </select>
                </div>

            </div>

            <div class="form-group mb-4">
                <label for="image" class="form-label">Select Image:</label>
                <div class="input-group">
                    <input type="file" name="image" id="image" class="form-control" required
                        style="border-radius: 8px; background-color: #f5f5f5; border: 1px solid #ddd;">
                    <button type="button" class="btn btn-outline-secondary"
                        onclick="document.getElementById('image').value = '';"
                        style="margin-left: 5px; border-radius: 8px;">
                        <i class="fas fa-times"></i> Clear
                    </button>
                </div>
                <small class="form-text text-muted mt-1">Choose an image file. Max size: 2MB.</small>
            </div>

            <div class="row" style="justify-content: space-between">
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Add Product</button>
                </div>
                <div class="form-group">
                    <button type="reset" style="background-color: #a21717" class="btn btn-success">Cancel</button>
                </div>
            </div>
        </form>
    </div>
@endsection
