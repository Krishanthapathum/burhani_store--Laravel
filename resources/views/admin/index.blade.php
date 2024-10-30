@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row" style="justify-content: space-between; width: 100%;">
            <div>
                <h1>Products</h1>
            </div>
            <!-- Search Bar with AJAX -->
            <div class="searchbar mt-4"><input type="text" style="width: 250px" id="search" class="form-control mb-4"
                    placeholder="Search by item code or Name"></div>
        </div>
        <hr style="margin-top: -1%">
        <!-- Success Message -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="row" id="products-container">
            @foreach ($products as $product)
                <div class="col-md-12 mb-3">
                    <div class="card shadow-sm p-2"
                        style="display: flex; flex-direction: row; align-items: center; border-radius: 5px;">

                        <img src="{{ asset('images/' . $product->image_filename) }}" alt="{{ $product->item_name }}"
                            style="width: 60px; height: 60px; object-fit: cover; margin-right: 20px; border-radius: 5px;">

                        <div style="flex-grow: 1;">
                            <h5 class="mb-1">{{ $product->item_name }}</h5>
                            <p class="text-muted mb-1">{{ \Illuminate\Support\Str::limit($product->description, 50) }}</p>
                        </div>

                        <div class="text-center" style="min-width: 100px; margin-right:20%">
                            <p class="text-muted mb-0"> {{ $product->item_code }}</p>
                        </div>

                        <div class="text-center" style="min-width: 120px;">
                            <p class="font-weight-bold mb-0">RS {{ number_format($product->price, 2) }}</p>
                        </div>

                        <div class="text-center" style="min-width: 100px;">
                            <span
                                class="badge {{ $product->availability == 'Available' ? 'badge-success' : 'badge-danger' }}">
                                {{ $product->availability }}
                            </span>
                        </div>

                        <div class="d-flex align-items-center ml-4" style="min-width: 150px;">
                            <a href="{{ route('admin.products.edit', $product->id) }}"
                                class="btn btn-warning btn-sm mr-2">Edit</a>
                            <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST"
                                style="display:inline;">
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

    <!-- AJAX Script for Live Search -->
    <script>
        document.getElementById('search').addEventListener('input', function() {
            let query = this.value;

            // AJAX request to search products
            fetch(`{{ route('admin.products') }}?query=${query}`, {
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(response => response.json())
                .then(products => {
                    let productsContainer = document.getElementById('products-container');
                    productsContainer.innerHTML = '';

                    // Loop through products and append to the container
                    products.forEach(product => {
                        productsContainer.innerHTML += `
                        <div class="col-md-12 mb-3">
                            <div class="card shadow-sm p-2" style="display: flex; flex-direction: row; align-items: center; border-radius: 5px;">
                                <img src="{{ asset('images') }}/${product.image_filename}" alt="${product.item_name}"
                                    style="width: 60px; height: 60px; object-fit: cover; margin-right: 20px; border-radius: 5px;">
                                <div style="flex-grow: 1;">
                                    <h5 class="mb-1">${product.item_name}</h5>
                                    <p class="text-muted mb-1">${product.description.substring(0, 50)}</p>
                                </div>
                                <div class="text-center" style="min-width: 100px; margin-right:20%">
                                    <p class="text-muted mb-0"><strong>Code:</strong> ${product.item_code}</p>
                                </div>
                                <div class="text-center" style="min-width: 120px;">
                                    <p class="font-weight-bold mb-0">RS ${parseFloat(product.price).toFixed(2)}</p>
                                </div>
                                <div class="text-center" style="min-width: 100px;">
                                    <span class="badge ${product.availability === 'Available' ? 'badge-success' : 'badge-danger'}">
                                        ${product.availability}
                                    </span>
                                </div>
                                <div class="d-flex align-items-center" style="min-width: 150px;">
                                    <a href="/admin/products/${product.id}/edit" class="btn btn-warning btn-sm mr-2">Edit</a>
                                    <form action="/admin/products/${product.id}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    `;
                    });
                });
        });
    </script>
@endsection
