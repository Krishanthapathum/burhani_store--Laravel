@extends('layouts.app')

@section('content')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque"><span></span>Our Products </h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">home</a></li>
                                <li class="breadcrumb-item">
                                    <div class="fa fa-chevron-right"></div>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Products</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <div class="container mt-5">
        <div class="row">
            @foreach ($products as $product)
                <div class="col-lg-3 col-md-6">
                    <div class="team-member-item wow fadeInUp" data-wow-delay="1.2s">
                        <div class="team-image">
                            <figure class="image-anime">
                                <img src="{{ asset('images/' . $product->image_filename) }}" alt="{{ $product->item_name }}">
                            </figure>
                        </div>
                        <h3 style="margin-left: 25px; margin-top: 5px; margin-bottom: 10px;">{{ $product->item_name }}</h3>
                        <p style="margin-left: 25px; margin-bottom: 0px;">{{ $product->description }}</p>
                        <p style="margin-left: 25px; font-weight: 900; margin-bottom: 0px;">RS {{ $product->price }}</p>

                        @if ($product->availability == 'Available')
                            <p style="margin-left: 25px; color: rgb(77, 238, 88); margin-top: 5px;">Available</p>
                        @else
                            <p style="margin-left: 25px; color: rgb(93, 25, 25); margin-top: 5px;">Out of Stock</p>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
