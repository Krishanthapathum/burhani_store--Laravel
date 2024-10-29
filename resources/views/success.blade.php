@extends('layouts.fancy')

{{-- @section('title', 'Thank You') --}}

@section('content')
<div class="error-page">
    <div class="container">
        <div class="row">
            <div class="error-page-image wow fadeInUp" data-wow-delay="0.25s">
                <img src="{{ asset('images/404-error-imgnew.png') }}" alt="">
            </div>
            <div class="error-page-content">
                <div class="error-page-content-heading">
                    <h2 class="text-anime-style-2" data-cursor="-opaque"><span></span>Thanks ..!</h2>
                </div>
                <div class="error-page-content-body">
                    <p class="wow fadeInUp" data-wow-delay="0.25s">Thank you for reaching out! &nbsp; We have received your message and will get back to you shortly.</p>
                    <a class="btn-default wow fadeInUp" data-wow-delay="0.5s" href="{{ url('/') }}">Back To Home</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
