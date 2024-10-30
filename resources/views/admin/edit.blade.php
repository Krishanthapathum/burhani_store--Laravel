@extends('layouts.admin')

@section('content')
    <h1 class="mb-4">Edit Product</h1>
    <hr>
    <!--  success message -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!--  validation errors -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card p-4 shadow-sm">
        <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group mb-3">
                <label for="item_code" class="form-label">Item Code:</label>
                <input type="text" name="item_code" class="form-control" value="{{ $product->item_code }}" required
                    placeholder="Enter unique item code">
            </div>

            <div class="form-group mb-3">
                <label for="item_name" class="form-label">Item Name:</label>
                <input type="text" name="item_name" class="form-control" value="{{ $product->item_name }}" required>
            </div>

            <div class="form-group mb-3">
                <label for="description" class="form-label">Description:</label>
                <textarea name="description" class="form-control" rows="4" required>{{ $product->description }}</textarea>
            </div>

            <div class="form-group mb-3">
                <label for="price" class="form-label">Price (LKR):</label>
                <input type="number" step="0.01" name="price" class="form-control" value="{{ $product->price }}"
                    required>
            </div>

            <div class="row">
                <div class="form-group mb-3">
                    <label for="availability" class="form-label font-weight-bold" style="color: #555;">Availability:</label>
                    <select name="availability" class="form-select p-2"
                        style="border-radius: 5px; background-color: #f8f9fa; transition: border-color 0.3s ease;">
                        <option value="Available" {{ $product->availability == 'Available' ? 'selected' : '' }}>Available
                        </option>
                        <option value="Out of Stock" {{ $product->availability == 'Out of Stock' ? 'selected' : '' }}>Out of
                            Stock</option>
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="category" class="form-label font-weight-bold" style="color: #555;">Category:</label>
                    <select name="category" class="form-select p-2"
                        style="border-radius: 5px; background-color: #f8f9fa; transition: border-color 0.3s ease;">
                        <option value="Category 1" {{ $product->category == 'Category 1' ? 'selected' : '' }}>Category 1
                        </option>
                        <option value="Category 2" {{ $product->category == 'Category 2' ? 'selected' : '' }}>Category 2
                        </option>
                        <option value="Category 3" {{ $product->category == 'Category 3' ? 'selected' : '' }}>Category 3
                        </option>
                        <option value="Category 4" {{ $product->category == 'Category 4' ? 'selected' : '' }}>Category 4
                        </option>
                    </select>
                </div>
            </div>

            <div class="form-group mb-4">
                <label for="image" class="form-label">Product Image:</label>
                <div class="input-group">
                    <input type="file" name="image" class="form-control"
                        style="border-radius: 8px; background-color: #f5f5f5; border: 1px solid #ddd;">
                    <button type="button" class="btn btn-outline-secondary"
                        onclick="document.getElementsByName('image')[0].value = '';"
                        style="margin-left: 5px; border-radius: 8px;">
                        <i class="fas fa-times"></i> Clear
                    </button>
                </div>
                @if ($product->image_filename)
                    <div class="mt-2">
                        <img src="{{ asset('images/' . $product->image_filename) }}" alt="Product Image"
                            style="max-width: 200px; border-radius: 8px; border: 1px solid #ddd;">
                    </div>
                @endif
                <small class="form-text text-muted mt-1">Choose an image file. Max size: 2MB.</small>
            </div>


            <div class="row" style="justify-content: space-between">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update Product</button>
                </div>

                <div class="form-group">
                    <a href="{{ route('admin.products') }}" class="btn btn-success" style="background-color: #12a440;">
                        <i class="fas fa-arrow-left"></i> &nbsp; Back
                    </a>
                </div>
            </div>
        </form>
    </div>
@endsection
