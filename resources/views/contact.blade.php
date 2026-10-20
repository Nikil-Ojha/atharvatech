@extends('layouts.master')

@section('title', 'Contact Us | Atharva Technologies')
@section('meta', '<meta content="Atharva Technologies, software development, custom software, mobile app, web development, AI, cloud" name="keywords">
    <meta content="Atharva Technologies - Custom software development and digital products" name="description">')
@section('content')
@include('partials.search-modal')


    <!-- Contact Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
@include('partials.section-title', ['title' => 'Contact Us', 'subtitle' => 'If You Have Any Query, Feel Free To Contact Us', 'wrapperClass' => 'text-center position-relative pb-3 mb-5 mx-auto', 'style' => 'max-width: 600px;'])
            <div class="row g-5 mb-5">
                <div class="col-lg-4">
@include('partials.contact-info-card', ['icon' => 'fa-phone-alt', 'label' => 'Call to ask any question', 'value' => '+91 7011418852', 'delay' => '0.1s', 'link' => 'tel:+917011418852'])
                </div>
                <div class="col-lg-4">
@include('partials.contact-info-card', ['icon' => 'fa-envelope-open', 'label' => 'Email to get free quote', 'value' => 'atharvaaojha@gmail.com', 'delay' => '0.4s', 'link' => 'mailto:atharvaaojha@gmail.com'])
                </div>
                <div class="col-lg-4">
@include('partials.contact-info-card', ['icon' => 'fa-map-marker-alt', 'label' => 'Visit our office', 'value' => '588, Sector 30 Fardiabad HR 121003', 'delay' => '0.8s'])
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                    <form id="contactForm">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" name="Name" class="form-control border-0 bg-dark-second px-4" placeholder="Your Name" style="height: 55px;">
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="Email" class="form-control border-0 bg-dark-second px-4" placeholder="Your Email" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input type="text" name="Subject" class="form-control border-0 bg-dark-second px-4" placeholder="Subject" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control border-0 bg-dark-second px-4 py-3" name="Message" rows="4" placeholder="Message"></textarea>
                            </div>
                            <div class="col-12">
                                <a href="@whatsapp" target="_blank" rel="noopener noreferrer" data-whatsapp-form="contactForm"
                                    class="btn btn-whatsapp w-100 py-3">
                                    <i class="fab fa-whatsapp me-2"></i>Send Message
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
                    <iframe class="position-relative rounded w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                        frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


@include('partials.vendor-carousel')
@endsection
