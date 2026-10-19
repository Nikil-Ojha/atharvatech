@extends('layouts.master')

@section('title', 'Atharva Technologies | Custom Software Development')
@section('meta', 'Atharva Technologies - Premium custom software development firm building scalable digital products for modern businesses.')
@section('navbar_extra')
<div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="w-100" src="{{ asset('img/carousel-1.jpg') }}" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 900px;">
                    <h5 class="text-white text-uppercase mb-3 animated slideInDown">Custom Software Development</h5>
                    <h1 class="display-1 text-white mb-md-4 animated zoomIn">We Build Scalable Software<br><span style="color:var(--accent)">That Powers Your Business</span></h1>
                    <a href="{{ route('quote') }}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Get a Free Quote</a>
                    <a href="{{ route('contact') }}" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="w-100" src="{{ asset('img/carousel-2.jpg') }}" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 900px;">
                    <h5 class="text-white text-uppercase mb-3 animated slideInDown">Enterprise Software Solutions</h5>
                    <h1 class="display-1 text-white mb-md-4 animated zoomIn">From Concept to Deployment<br><span style="color:var(--accent)">We Deliver Production-Ready Code</span></h1>
                    <a href="{{ route('quote') }}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Get a Free Quote</a>
                    <a href="{{ route('contact') }}" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
@endsection

@section('content')
<!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(2, 6, 23, .9);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Search our services...">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Facts Start -->
    <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-dark-second shadow d-flex align-items-center justify-content-center p-4" style="height: 170px; border: 1px solid rgba(248,250,252,0.06); border-radius: var(--radius);">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 64px; height: 64px;">
                            <i class="fa fa-users text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Happy Clients</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">250+</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-dark-second shadow d-flex align-items-center justify-content-center p-4" style="height: 170px; border: 1px solid rgba(248,250,252,0.06); border-radius: var(--radius);">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2" style="width: 64px; height: 64px;">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Projects Delivered</h5>
                            <h1 class="mb-0" data-toggle="counter-up">150+</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-dark-second shadow d-flex align-items-center justify-content-center p-4" style="height: 170px; border: 1px solid rgba(248,250,252,0.06); border-radius: var(--radius);">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 64px; height: 64px;">
                            <i class="fa fa-award text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Years Experience</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">10+</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">About Us</h5>
                        <h1 class="mb-0">Custom Software Built for Your Growth</h1>
                    </div>
                    <p class="mb-4">Atharva Technologies is a premium software development firm that helps startups and enterprises turn ideas into production-ready digital products. We specialize in custom software development, mobile applications, cloud architecture, and AI-powered solutions—built with clean code, modern architecture, and a focus on scalability.</p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Custom Software Development</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Agile Delivery Process</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Production-Ready Code</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>24/7 Technical Support</h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 64px; height: 64px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Start Your Project</h5>
                            <h4 class="text-primary mb-0">+91 7011418852</h4>
                        </div>
                    </div>
                    <a href="{{ route('quote') }}" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Request a Proposal</a>
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


    <!-- Features Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 700px;">
                <h5 class="fw-bold text-primary text-uppercase">Why Choose Us</h5>
                <h1 class="mb-0">Engineering Excellence You Can Trust</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 64px; height: 64px;">
                                <i class="fa fa-code text-white"></i>
                            </div>
                            <h4>Clean, Maintainable Code</h4>
                            <p class="mb-0">We write production-ready code following industry best practices, design patterns, and strict quality standards.</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 64px; height: 64px;">
                                <i class="fa fa-rocket text-white"></i>
                            </div>
                            <h4>Fast Time to Market</h4>
                            <p class="mb-0">Agile development cycles with MVP-first approach so you can launch faster and iterate quickly.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="img/feature.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 64px; height: 64px;">
                                <i class="fa fa-shield-alt text-white"></i>
                            </div>
                            <h4>Security First</h4>
                            <p class="mb-0">Enterprise-grade security built into every layer of your application from day one.</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 64px; height: 64px;">
                                <i class="fa fa-headset text-white"></i>
                            </div>
                            <h4>24/7 Technical Support</h4>
                            <p class="mb-0">Round-the-clock technical support and maintenance for your digital products.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Tech Stack Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 700px;">
                <h5 class="fw-bold text-primary text-uppercase">Tech Stack</h5>
                <h1 class="mb-0">Modern Technologies We Use</h1>
            </div>
            <div class="row g-4">
                <!-- Featured Blog -->
                <div class="col-lg-4 col-md-6 wow slideInUp" data-wow-delay="0.2s">
                    <div class="bg-dark-second rounded p-5 text-center border border-primary" style="border-width: 2px;">
                        <div class="bg-primary rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 80px; height: 80px;">
                            <i class="fa fa-blog text-white" style="font-size: 28px;"></i>
                        </div>
                        <h4 class="mb-3">Featured Tech Stack</h4>
                        <div class="row g-3">
                            <div class="col-md-6 col-sm-6">
                                <div class="bg-dark-second rounded p-4 text-center border hover-shadow">
                                    <div class="bg-primary rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 56px; height: 56px;">
                                        <i class="fa fa-code text-white" style="font-size: 20px;"></i>
                                    </div>
                                    <h5 class="mb-2">Laravel</h5>
                                    <p class="small text-muted mb-0">Full Stack Framework</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="bg-dark-second rounded p-4 text-center border hover-shadow">
                                    <div class="bg-primary rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 56px; height: 56px;">
                                        <i class="fa fa-code text-white" style="font-size: 20px;"></i>
                                    </div>
                                    <h5 class="mb-2">Mysql</h5>
                                    <p class="small text-muted mb-0">Most Popular RDBMS</p>
                                </div>
                            </div>
                        </div>
                        {{-- <p class="mb-4 text-muted">Visit our technical blog for in-depth tutorials, code snippets, and engineering insights.</p>
                        <a href="https://ojhanikil.wordpress.com" class="btn btn-primary w-100 py-3" target="_blank">
                            Visit ojhanikil.wordpress.com <i class="bi bi-arrow-right ms-2"></i>
                        </a> --}}
                    </div>
                </div>
                <!-- Tech Stack Items -->
                <div class="col-lg-8 wow slideInUp" data-wow-delay="0.4s">
                    <div class="row g-3">
                        <div class="col-md-4 col-sm-6">
                            <div class="bg-dark-second rounded p-4 text-center border hover-shadow">
                                <div class="bg-primary rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 56px; height: 56px;">
                                    <i class="fa fa-code text-white" style="font-size: 20px;"></i>
                                </div>
                                <h5 class="mb-2">React.js</h5>
                                <p class="small text-muted mb-0">Frontend UI Library</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="bg-dark-second rounded p-4 text-center border hover-shadow">
                                <div class="bg-primary rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 56px; height: 56px;">
                                    <i class="fa fa-laptop-code text-white" style="font-size: 20px;"></i>
                                </div>
                                <h5 class="mb-2">Node.js</h5>
                                <p class="small text-muted mb-0">Backend Runtime</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="bg-dark-second rounded p-4 text-center border hover-shadow">
                                <div class="bg-primary rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 56px; height: 56px;">
                                    <i class="fa fa-database text-white" style="font-size: 20px;"></i>
                                </div>
                                <h5 class="mb-2">MongoDB</h5>
                                <p class="small text-muted mb-0">NoSQL Database</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="bg-dark-second rounded p-4 text-center border hover-shadow">
                                <div class="bg-primary rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 56px; height: 56px;">
                                    <i class="fa fa-cloud text-white" style="font-size: 20px;"></i>
                                </div>
                                <h5 class="mb-2">AWS</h5>
                                <p class="small text-muted mb-0">Cloud Platform</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="bg-dark-second rounded p-4 text-center border hover-shadow">
                                <div class="bg-primary rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 56px; height: 56px;">
                                    <i class="fa fa-cube text-white" style="font-size: 20px;"></i>
                                </div>
                                <h5 class="mb-2">Docker</h5>
                                <p class="small text-muted mb-0">Containerization</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="bg-dark-second rounded p-4 text-center border hover-shadow">
                                <div class="bg-primary rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 56px; height: 56px;">
                                    <i class="fa fa-rocket text-white" style="font-size: 20px;"></i>
                                </div>
                                <h5 class="mb-2">Kubernetes</h5>
                                <p class="small text-muted mb-0">Orchestration</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="bg-dark-second rounded p-4 text-center border hover-shadow">
                                <div class="bg-primary rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 56px; height: 56px;">
                                    <i class="fab fa-python text-white" style="font-size: 20px;"></i>
                                </div>
                                <h5 class="mb-2">Python</h5>
                                <p class="small text-muted mb-0">AI &amp; Automation</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="bg-dark-second rounded p-4 text-center border hover-shadow">
                                <div class="bg-primary rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 56px; height: 56px;">
                                    <i class="fa fa-table text-white" style="font-size: 20px;"></i>
                                </div>
                                <h5 class="mb-2">PostgreSQL</h5>
                                <p class="small text-muted mb-0">Relational DB</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="bg-dark-second rounded p-4 text-center border hover-shadow">
                                <div class="bg-primary rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 56px; height: 56px;">
                                    <i class="fab fa-github text-white" style="font-size: 20px;"></i>
                                </div>
                                <h5 class="mb-2">Git &amp; CI/CD</h5>
                                <p class="small text-muted mb-0">Version Control</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tech Stack End -->


    <!-- Service Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 700px;">
                <h5 class="fw-bold text-primary text-uppercase">Our Services</h5>
                <h1 class="mb-0">End-to-End Software Development</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-dark-second rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-laptop-code text-white"></i>
                        </div>
                        <h4 class="mb-3">Custom Software Development</h4>
                        <p class="m-0">Tailored web and desktop applications built to your exact business requirements with modern tech stacks.</p>
                        <a class="btn btn-lg btn-primary rounded" href="{{ route('services') }}">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-dark-second rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-mobile-alt text-white"></i>
                        </div>
                        <h4 class="mb-3">Mobile App Development</h4>
                        <p class="m-0">Native and cross-platform iOS and Android apps with smooth UI/UX and seamless performance.</p>
                        <a class="btn btn-lg btn-primary rounded" href="{{ route('services') }}">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="service-item bg-dark-second rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-paint-brush text-white"></i>
                        </div>
                        <h4 class="mb-3">UI/UX Design</h4>
                        <p class="m-0">User-centered interface design that combines aesthetics with usability for exceptional digital experiences.</p>
                        <a class="btn btn-lg btn-primary rounded" href="{{ route('services') }}">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-dark-second rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-cloud text-white"></i>
                        </div>
                        <h4 class="mb-3">Cloud Solutions</h4>
                        <p class="m-0">Cloud-native architecture, migration, and deployment on AWS, Azure, and Google Cloud Platform.</p>
                        <a class="btn btn-lg btn-primary rounded" href="{{ route('services') }}">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-dark-second rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-brain text-white"></i>
                        </div>
                        <h4 class="mb-3">AI & Machine Learning</h4>
                        <p class="m-0">Intelligent automation, predictive analytics, and AI-powered features integrated into your software.</p>
                        <a class="btn btn-lg btn-primary rounded" href="{{ route('services') }}">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                        <h3 class="text-white mb-3">Start Your Project</h3>
                        <p class="text-white mb-3">Let's build your next digital product together.</p>
                        <h2 class="text-white mb-0">+91 7011418852</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Pricing Plan Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 700px;">
                <h5 class="fw-bold text-primary text-uppercase">Pricing Plans</h5>
                <h1 class="mb-0">Flexible Plans for Every Stage</h1>
            </div>
            <div class="row g-0">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="bg-dark-second rounded">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h4 class="text-primary mb-1">Starter</h4>
                            <small class="text-uppercase">One Landing Page</small>
                        </div>
                        <div class="p-5 pt-0">
                            <h1 class="display-5 mb-3">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;">₹</small>999<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;"> Fixed One Time</small>
                            </h1>
                            <div class="d-flex justify-content-between mb-3"><span>Single Page</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Responsive Design</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Basic Sections</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Custom Subdomain Only</span><i class="fa fa-check text-primary pt-1"></i></div>
                            {{-- <div class="d-flex justify-content-between mb-3"><span>Basic SEO</span><i class="fa fa-times text-secondary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span>Email Support</span><i class="fa fa-times text-secondary pt-1"></i></div> --}}
                            <a href="{{ route('quote') }}" class="btn btn-primary py-2 px-4 mt-4">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="bg-dark-second rounded shadow position-relative" style="z-index: 1; border-color: var(--primary);">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h4 class="text-primary mb-1">Basic Portfolio</h4>
                            <small class="text-uppercase">Static Website / Portfolio</small>
                        </div>
                        <div class="p-5 pt-0">
                            <h1 class="display-5 mb-3">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;">₹</small>4,999<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">- ₹15,000</small>
                            </h1>
                            <div class="d-flex justify-content-between mb-3"><span>All in starter</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Web Application</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Mobile Responsive</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Advanced SEO</span><i class="fa fa-check text-primary pt-1"></i></div>
                            {{-- <div class="d-flex justify-content-between mb-2"><span>Priority Support</span><i class="fa fa-times text-secondary pt-1"></i></div> --}}
                            <a href="{{ route('quote') }}" class="btn btn-primary py-2 px-4 mt-4">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="bg-dark-second rounded">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h4 class="text-primary mb-1">Business</h4>
                            <small class="text-uppercase">Dynamic Website (Web Application)</small>
                        </div>
                        <div class="p-5 pt-0">
                            <h1 class="display-5 mb-3">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;">₹</small>14,999<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">- ₹50,000</small>
                            </h1>
                            <div class="d-flex justify-content-between mb-3"><span>Unlimited Pages</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Full Feature Set</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>24/7 Technical Support</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span>Dedicated Manager</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <a href="{{ route('quote') }}" class="btn btn-primary py-2 px-4 mt-4">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->


    <!-- Quote Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Request a Quote</h5>
                        <h1 class="mb-0">Let's Build Something Amazing Together</h1>
                    </div>
                    <div class="row gx-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-4"><i class="fa fa-clock text-primary me-3"></i>Reply within 24 hours</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-4"><i class="fa fa-headset text-primary me-3"></i>24/7 Technical Support</h5>
                        </div>
                    </div>
                    <p class="mb-4">Share your project requirements with us. Our team will analyze your needs and send you a detailed proposal with timeline and cost estimates.</p>
                    <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 64px; height: 64px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Start Your Project</h5>
                            <h4 class="text-primary mb-0">+91 7011418852</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="quote-form wow zoomIn" data-wow-delay="0.9s">
                        <form>
                            <div class="row g-3">
                                <div class="col-xl-12">
                                    <input type="text" class="form-control" placeholder="Your Name" style="height: 60px;">
                                </div>
                                <div class="col-12">
                                    <input type="email" class="form-control" placeholder="Your Email" style="height: 60px;">
                                </div>
                                <div class="col-12">
                                    <select class="form-select" style="height: 60px;">
                                        <option selected>Select a Service</option>
                                        <option value="software">Custom Software Development</option>
                                        <option value="mobile">Mobile App Development</option>
                                        <option value="design">UI/UX Design</option>
                                        <option value="cloud">Cloud Solutions</option>
                                        <option value="ai">AI & Machine Learning</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control" rows="4" placeholder="Tell us about your project..."></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Send Proposal Request</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->


    <!-- Client Testimonials Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 700px;">
                <h5 class="fw-bold text-primary text-uppercase">Client Client Testimonialss</h5>
                <h1 class="mb-0">What Our Clients Say About Our Software</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
                <div class="testimonial-item bg-dark-second my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="img/testimonial-1.jpg" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-white mb-1">Sarah Chen</h4>
                            <small class="text-uppercase">CTO, FinTech Startup</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        "Atharva Technologies delivered our core platform ahead of schedule. The code quality is exceptional and the team was highly professional throughout."
                    </div>
                </div>
                <div class="testimonial-item bg-dark-second my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="img/testimonial-2.jpg" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-white mb-1">Marcus Rivera</h4>
                            <small class="text-uppercase">Product Manager, HealthTech</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        "Outstanding mobile app development. They understood our vision perfectly and built a scalable solution that our users love."
                    </div>
                </div>
                <div class="testimonial-item bg-dark-second my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="img/testimonial-3.jpg" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-white mb-1">Elena Petrova</h4>
                            <small class="text-uppercase">Founder, SaaS Platform</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        "From UI/UX design to cloud deployment, Atharva handled everything. Our platform now handles thousands of users seamlessly."
                    </div>
                </div>
                <div class="testimonial-item bg-dark-second my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="img/testimonial-4.jpg" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-white mb-1">James Wilson</h4>
                            <small class="text-uppercase">Operations Director, Logistics</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        "Professional, responsive, and technically excellent. The custom software they built transformed our business operations."
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Client Testimonials End -->


    <!-- Team Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 700px;">
                <h5 class="fw-bold text-primary text-uppercase">Our Team</h5>
                <h1 class="mb-0">Engineers Who Care About Code Quality</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-dark-second rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/team-1.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-github fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-white">Arjun Mehta</h4>
                            <p class="text-uppercase m-0">Lead Software Engineer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="team-item bg-dark-second rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/team-2.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-github fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-white">Priya Sharma</h4>
                            <p class="text-uppercase m-0">UI/UX Designer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="team-item bg-dark-second rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/team-3.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-github fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-white">Daniel Kim</h4>
                            <p class="text-uppercase m-0">DevOps Engineer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 700px;">
                <h5 class="fw-bold text-primary text-uppercase">Insights</h5>
                <h1 class="mb-0">Latest from Our Engineering Blog</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-dark-second rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="img/blog-1.jpg" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Software Engineering</a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i>Arjun Mehta</small>
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>15 Jan, 2025</small>
                            </div>
                            <h4 class="mb-3">Building Scalable Microservices with Node.js</h4>
                            <p>Best practices for architecting microservices that scale and stay maintainable as your team grows.</p>
                            <a class="text-uppercase" href="{{ route('detail') }}">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="blog-item bg-dark-second rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="img/blog-2.jpg" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Mobile Development</a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i>Priya Sharma</small>
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>10 Feb, 2025</small>
                            </div>
                            <h4 class="mb-3">React Native vs Flutter: Which to Choose?</h4>
                            <p>A practical comparison to help you pick the right framework for your next mobile app.</p>
                            <a class="text-uppercase" href="{{ route('detail') }}">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="blog-item bg-dark-second rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="img/blog-3.jpg" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Cloud & DevOps</a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i>Daniel Kim</small>
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>05 Mar, 2025</small>
                            </div>
                            <h4 class="mb-3">Zero-Downtime Deployments on AWS</h4>
                            <p>How we achieve continuous deployment with zero downtime using CI/CD pipelines.</p>
                            <a class="text-uppercase" href="{{ route('detail') }}">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->


    <!-- Vendor Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
            <div class="bg-dark-second rounded p-4">
                <div class="owl-carousel vendor-carousel">
                    <img src="img/vendor-1.jpg" alt="">
                    <img src="img/vendor-2.jpg" alt="">
                    <img src="img/vendor-3.jpg" alt="">
                    <img src="img/vendor-4.jpg" alt="">
                    <img src="img/vendor-5.jpg" alt="">
                    <img src="img/vendor-6.jpg" alt="">
                    <img src="img/vendor-7.jpg" alt="">
                    <img src="img/vendor-8.jpg" alt="">
                    <img src="img/vendor-9.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->
@endsection
