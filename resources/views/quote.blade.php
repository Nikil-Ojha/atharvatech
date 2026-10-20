@extends('layouts.master')

@section('title', 'Free Quote | Atharva Technologies')
@section('meta', '<meta content="Atharva Technologies, software development, custom software, mobile app, web development, AI, cloud" name="keywords">
    <meta content="Atharva Technologies - Custom software development and digital products" name="description">')
@section('content')
@include('partials.search-modal')


    <!-- Quote Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
@include('partials.section-title', ['title' => 'Request A Quote', 'subtitle' => 'Let\'s Build Something Amazing Together', 'wrapperClass' => 'position-relative pb-3 mb-5', 'style' => ''])
                    <div class="row gx-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-4"><i class="fa fa-clock text-primary me-3"></i>Reply within 24 hours</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-4"><i class="fa fa-phone-alt text-primary me-3"></i>24 hrs telephone support</h5>
                        </div>
                    </div>
                    <p class="mb-4">Choose the plan that fits your business stage. All plans include clean code, documentation, and ongoing support. Contact us for custom enterprise pricing.</p>
@include('partials.contact-info-card', ['icon' => 'fa-phone-alt', 'label' => 'Call to ask any question', 'value' => '+91 7011418852', 'delay' => '0.6s', 'wrapperClass' => 'mt-2 wow zoomIn', 'link' => 'tel:+917011418852'])
                </div>
                <div class="col-lg-5">
                    <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
                        <form id="quoteForm">
                            <div class="row g-3">
                                <div class="col-xl-12">
                                    <input type="text" name="Name" class="form-control bg-dark-second border-0" placeholder="Your Name" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input type="email" name="Email" class="form-control bg-dark-second border-0" placeholder="Your Email" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <select class="form-select bg-dark-second border-0" name="Service" style="height: 55px;">
                                        <option value="" selected>Select A Service</option>
                                        <option value="Custom Software Development">Custom Software Development</option>
                                        <option value="Mobile App Development">Mobile App Development</option>
                                        <option value="UI/UX Design">UI/UX Design</option>
                                        <option value="Cloud Solutions">Cloud Solutions</option>
                                        <option value="AI & Machine Learning">AI &amp; Machine Learning</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control bg-dark-second border-0" name="Message" rows="3" placeholder="Message"></textarea>
                                </div>
                                <div class="col-12">
                                    <a href="@whatsapp" target="_blank" rel="noopener noreferrer" data-whatsapp-form="quoteForm"
                                        class="btn btn-whatsapp w-100 py-3">
                                        <i class="fab fa-whatsapp me-2"></i>Request A Quote
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->


@include('partials.vendor-carousel')
@endsection
