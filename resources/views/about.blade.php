@extends('layouts.master')

@section('title', 'About Us | Atharva Technologies')
@section('meta', '<meta content="Atharva Technologies, software development, custom software, mobile app, web development, AI, cloud" name="keywords">
    <meta content="Atharva Technologies - Custom software development and digital products" name="description">')
@section('content')
@include('partials.search-modal')


    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
@include('partials.section-title', ['title' => 'About Us', 'subtitle' => 'Custom Software Built for Your Growth', 'wrapperClass' => 'position-relative pb-3 mb-5', 'style' => ''])
                    <p class="mb-4">Atharva Technologies is a premium software development firm that helps startups and enterprises turn ideas into production-ready digital products. We specialize in custom software development, mobile applications, cloud architecture, and AI-powered solutions—built with clean code, modern architecture, and a focus on scalability.</p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-rocket text-primary me-3"></i>Fast Time to Market</h5>
                            <h5 class="mb-3"><i class="fa fa-shield-alt text-primary me-3"></i>Security First</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3"><i class="fa fa-headset text-primary me-3"></i>24/7 Technical Support</h5>
                            <h5 class="mb-3"><i class="fa fa-tag text-primary me-3"></i>Fair Prices</h5>
                        </div>
                    </div>
@include('partials.contact-info-card', ['icon' => 'fa-phone-alt', 'label' => 'Call to ask any question', 'value' => '+91 7011418852', 'delay' => '0.6s', 'wrapperClass' => 'mb-4 wow fadeIn', 'link' => 'tel:+917011418852'])
                    <a href="{{ route('quote') }}" class="btn btn-primary py-3 px-5 mt-3 me-3 wow zoomIn" data-wow-delay="0.9s">Request A Quote</a>
@include('partials.whatsapp-button', ['class' => 'py-3 px-5 mt-3 wow zoomIn'])
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/about.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    @include('partials.team')


@include('partials.vendor-carousel')
@endsection
