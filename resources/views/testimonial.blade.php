@extends('layouts.master')

@section('title', 'Client Testimonialss | Atharva Technologies')
@section('meta', '<meta content="Atharva Technologies, software development, custom software, mobile app, web development, AI, cloud" name="keywords">
    <meta content="Atharva Technologies - Custom software development and digital products" name="description">')
@section('content')
@include('partials.search-modal')


    <!-- Client Testimonials Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
@include('partials.section-title', ['title' => 'Client Testimonials', 'subtitle' => 'What Our Clients Say About Our Software', 'wrapperClass' => 'text-center position-relative pb-3 mb-4 mx-auto', 'style' => 'max-width: 600px;'])
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
@include('partials.testimonial-item', ['image' => 'img/testimonial-1.jpg', 'name' => 'Client Name', 'profession' => 'Profession', 'quote' => 'Atharva Technologies delivered exceptional code quality and professional service throughout our project.', 'nameClass' => 'text-primary'])
@include('partials.testimonial-item', ['image' => 'img/testimonial-2.jpg', 'name' => 'Client Name', 'profession' => 'Profession', 'quote' => 'Atharva Technologies delivered exceptional code quality and professional service throughout our project.', 'nameClass' => 'text-primary'])
@include('partials.testimonial-item', ['image' => 'img/testimonial-3.jpg', 'name' => 'Client Name', 'profession' => 'Profession', 'quote' => 'Atharva Technologies delivered exceptional code quality and professional service throughout our project.', 'nameClass' => 'text-primary'])
@include('partials.testimonial-item', ['image' => 'img/testimonial-4.jpg', 'name' => 'Client Name', 'profession' => 'Profession', 'quote' => 'Atharva Technologies delivered exceptional code quality and professional service throughout our project.', 'nameClass' => 'text-primary'])
            </div>
        </div>
    </div>
    <!-- Client Testimonials End -->


@include('partials.vendor-carousel')
@endsection
