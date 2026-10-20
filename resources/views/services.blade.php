@extends('layouts.master')

@section('title', 'Our Services | Atharva Technologies')
@section('meta', '<meta content="Atharva Technologies, software development, custom software, mobile app, web development, AI, cloud" name="keywords">
    <meta content="Atharva Technologies - Custom software development and digital products" name="description">')
@section('content')
@include('partials.search-modal')


    <!-- Service Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
@include('partials.section-title', ['title' => 'Our Services', 'subtitle' => 'End-to-End Software Development', 'wrapperClass' => 'text-center position-relative pb-3 mb-5 mx-auto', 'style' => 'max-width: 600px;'])
            <div class="row g-5">
@include('partials.service-item', ['icon' => 'fa-laptop-code', 'title' => 'Custom Software Development', 'description' => 'Tailored solutions built to your exact requirements using modern technology stacks.', 'delay' => '0.3s', 'link' => ''])
@include('partials.service-item', ['icon' => 'fa-mobile-alt', 'title' => 'Mobile App Development', 'description' => 'Tailored solutions built to your exact requirements using modern technology stacks.', 'delay' => '0.6s', 'link' => ''])
@include('partials.service-item', ['icon' => 'fa-paint-brush', 'title' => 'UI/UX Design', 'description' => 'Tailored solutions built to your exact requirements using modern technology stacks.', 'delay' => '0.9s', 'link' => ''])
@include('partials.service-item', ['icon' => 'fa-cloud', 'title' => 'Cloud Solutions', 'description' => 'Tailored solutions built to your exact requirements using modern technology stacks.', 'delay' => '0.3s', 'link' => ''])
@include('partials.service-item', ['icon' => 'fa-brain', 'title' => 'AI & Machine Learning', 'description' => 'Tailored solutions built to your exact requirements using modern technology stacks.', 'delay' => '0.6s', 'link' => ''])
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                        <h3 class="text-white mb-3">Start Your Project</h3>
                        <p class="text-white mb-3">Let's build your next digital product together.</p>
                        <h2 class="text-white mb-3"><a class="text-white text-decoration-none"
                                href="tel:+917011418852">+91 7011418852</a></h2>
@include('partials.whatsapp-button', ['class' => 'py-2 px-4'])
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


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
