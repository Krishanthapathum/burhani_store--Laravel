@extends('layouts.app')

@section('content')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque"><span></span>Our Products</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item">
                                    <div class="fa fa-chevron-right"></div>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Products</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

<div class="container mt-5">
    <ul class="nav nav-tabs justify-content-center custom-tabs" id="productTab" role="tablist">
        @foreach(['Category 1', 'Category 2', 'Category 3', 'Category 4'] as $index => $category)
            <li class="nav-item" role="presentation">
                <button class="nav-link {{ $index == 0 ? 'active' : '' }}" id="category{{ $index + 1 }}-tab" data-bs-toggle="tab" data-bs-target="#category{{ $index + 1 }}" type="button" role="tab" aria-controls="category{{ $index + 1 }}" aria-selected="{{ $index == 0 ? 'true' : 'false' }}">{{ $category }}</button>
            </li>
        @endforeach
    </ul>
</div>

<div class="container mt-4">
    <div class="tab-content" id="productTabContent">
        @foreach(['Category 1', 'Category 2', 'Category 3', 'Category 4'] as $index => $category)
            <div class="tab-pane fade {{ $index == 0 ? 'show active' : '' }}" id="category{{ $index + 1 }}" role="tabpanel" aria-labelledby="category{{ $index + 1 }}-tab">
                <div class="row">
                    @php
                        $categoryProducts = $products->where('category', $category);
                    @endphp

                    @if ($categoryProducts->isEmpty())
                        <div class="col-12 text-center py-4">
                            <p class="text-muted">No products available in this category.</p>
                        </div>
                    @else
                        @foreach ($categoryProducts as $product)
                            @include('components.product-card', ['product' => $product])
                        @endforeach
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
