@extends('layouts.master')

@section('title', 'Insights | Atharva Technologies')
@section('meta', '<meta content="Atharva Technologies, software development, custom software, mobile app, web development, AI, cloud" name="keywords">
    <meta content="Atharva Technologies - Custom software development and digital products" name="description">')
@section('content')
@include('partials.search-modal')


    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <!-- Blog list Start -->
                <div class="col-lg-8">
                    <div class="row g-5">
                        <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
                            <div class="blog-item bg-dark-second rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/blog-1.jpg" alt="">
                                    <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Web Design</a>
                                </div>
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                                        <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                                    </div>
                                    <h4 class="mb-3">How to build a website</h4>
                                    <p>Practical insights and engineering best practices from our development team.</p>
                                    <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow slideInUp" data-wow-delay="0.6s">
                            <div class="blog-item bg-dark-second rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/blog-2.jpg" alt="">
                                    <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Web Design</a>
                                </div>
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                                        <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                                    </div>
                                    <h4 class="mb-3">How to build a website</h4>
                                    <p>Practical insights and engineering best practices from our development team.</p>
                                    <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
                            <div class="blog-item bg-dark-second rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/blog-3.jpg" alt="">
                                    <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Web Design</a>
                                </div>
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                                        <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                                    </div>
                                    <h4 class="mb-3">How to build a website</h4>
                                    <p>Practical insights and engineering best practices from our development team.</p>
                                    <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow slideInUp" data-wow-delay="0.6s">
                            <div class="blog-item bg-dark-second rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/blog-1.jpg" alt="">
                                    <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Web Design</a>
                                </div>
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                                        <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                                    </div>
                                    <h4 class="mb-3">How to build a website</h4>
                                    <p>Practical insights and engineering best practices from our development team.</p>
                                    <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
                            <div class="blog-item bg-dark-second rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/blog-2.jpg" alt="">
                                    <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Web Design</a>
                                </div>
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                                        <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                                    </div>
                                    <h4 class="mb-3">How to build a website</h4>
                                    <p>Practical insights and engineering best practices from our development team.</p>
                                    <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow slideInUp" data-wow-delay="0.6s">
                            <div class="blog-item bg-dark-second rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/blog-3.jpg" alt="">
                                    <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Web Design</a>
                                </div>
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                                        <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                                    </div>
                                    <h4 class="mb-3">How to build a website</h4>
                                    <p>Practical insights and engineering best practices from our development team.</p>
                                    <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
                            <div class="blog-item bg-dark-second rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/blog-1.jpg" alt="">
                                    <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Web Design</a>
                                </div>
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                                        <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                                    </div>
                                    <h4 class="mb-3">How to build a website</h4>
                                    <p>Practical insights and engineering best practices from our development team.</p>
                                    <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow slideInUp" data-wow-delay="0.6s">
                            <div class="blog-item bg-dark-second rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/blog-2.jpg" alt="">
                                    <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Web Design</a>
                                </div>
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                                        <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                                    </div>
                                    <h4 class="mb-3">How to build a website</h4>
                                    <p>Practical insights and engineering best practices from our development team.</p>
                                    <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
                            <div class="blog-item bg-dark-second rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/blog-3.jpg" alt="">
                                    <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Web Design</a>
                                </div>
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                                        <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                                    </div>
                                    <h4 class="mb-3">How to build a website</h4>
                                    <p>Practical insights and engineering best practices from our development team.</p>
                                    <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow slideInUp" data-wow-delay="0.6s">
                            <div class="blog-item bg-dark-second rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/blog-1.jpg" alt="">
                                    <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Web Design</a>
                                </div>
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                                        <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                                    </div>
                                    <h4 class="mb-3">How to build a website</h4>
                                    <p>Practical insights and engineering best practices from our development team.</p>
                                    <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 wow slideInUp" data-wow-delay="0.1s">
                            <nav aria-label="Page navigation">
                              <ul class="pagination pagination-lg m-0">
                                <li class="page-item disabled">
                                  <a class="page-link rounded-0" href="javascript:void(0);" aria-label="Previous">
                                    <span aria-hidden="true"><i class="bi bi-arrow-left"></i></span>
                                  </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                <li class="page-item">
                                  <a class="page-link rounded-0" href="javascript:void(0);" aria-label="Next">
                                    <span aria-hidden="true"><i class="bi bi-arrow-right"></i></span>
                                  </a>
                                </li>
                              </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- Blog list End -->
    
                <!-- Sidebar Start -->
                <div class="col-lg-4">
                    <!-- Search Form Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="input-group">
                            <input type="text" class="form-control p-3" placeholder="Keyword">
                            <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                    <!-- Search Form End -->
    
                    <!-- Category Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
@include('partials.section-title', ['title' => 'Categories', 'type' => 'sidebar'])
                        <div class="link-animated d-flex flex-column justify-content-start">
                            <a class="h5 fw-semi-bold bg-dark-second rounded py-2 px-3 mb-2" href="javascript:void(0);"><i class="bi bi-arrow-right me-2"></i>Web Design</a>
                            <a class="h5 fw-semi-bold bg-dark-second rounded py-2 px-3 mb-2" href="javascript:void(0);"><i class="bi bi-arrow-right me-2"></i>UI/UX Design</a>
                            <a class="h5 fw-semi-bold bg-dark-second rounded py-2 px-3 mb-2" href="javascript:void(0);"><i class="bi bi-arrow-right me-2"></i>UI/UX Design</a>
                            <a class="h5 fw-semi-bold bg-dark-second rounded py-2 px-3 mb-2" href="javascript:void(0);"><i class="bi bi-arrow-right me-2"></i>Keyword Research</a>
                            <a class="h5 fw-semi-bold bg-dark-second rounded py-2 px-3 mb-2" href="javascript:void(0);"><i class="bi bi-arrow-right me-2"></i>Email Marketing</a>
                        </div>
                    </div>
                    <!-- Category End -->
    
                    <!-- Recent Post Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
@include('partials.section-title', ['title' => 'Recent Post', 'type' => 'sidebar'])
                        <div class="d-flex rounded overflow-hidden mb-3">
                            <img class="img-fluid" src="img/blog-1.jpg" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                            <a href="" class="h5 fw-semi-bold d-flex align-items-center bg-dark-second px-3 mb-0">Related Article
                            </a>
                        </div>
                        <div class="d-flex rounded overflow-hidden mb-3">
                            <img class="img-fluid" src="img/blog-2.jpg" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                            <a href="" class="h5 fw-semi-bold d-flex align-items-center bg-dark-second px-3 mb-0">Related Article
                            </a>
                        </div>
                        <div class="d-flex rounded overflow-hidden mb-3">
                            <img class="img-fluid" src="img/blog-3.jpg" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                            <a href="" class="h5 fw-semi-bold d-flex align-items-center bg-dark-second px-3 mb-0">Related Article
                            </a>
                        </div>
                        <div class="d-flex rounded overflow-hidden mb-3">
                            <img class="img-fluid" src="img/blog-1.jpg" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                            <a href="" class="h5 fw-semi-bold d-flex align-items-center bg-dark-second px-3 mb-0">Related Article
                            </a>
                        </div>
                        <div class="d-flex rounded overflow-hidden mb-3">
                            <img class="img-fluid" src="img/blog-2.jpg" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                            <a href="" class="h5 fw-semi-bold d-flex align-items-center bg-dark-second px-3 mb-0">Related Article
                            </a>
                        </div>
                        <div class="d-flex rounded overflow-hidden mb-3">
                            <img class="img-fluid" src="img/blog-3.jpg" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                            <a href="" class="h5 fw-semi-bold d-flex align-items-center bg-dark-second px-3 mb-0">Related Article
                            </a>
                        </div>
                    </div>
                    <!-- Recent Post End -->
    
                    <!-- Image Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <img src="img/blog-1.jpg" alt="" class="img-fluid rounded">
                    </div>
                    <!-- Image End -->
    
                    <!-- Tags Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
@include('partials.section-title', ['title' => 'Tag Cloud', 'type' => 'sidebar'])
                        <div class="d-flex flex-wrap m-n1">
                            <a href="" class="btn btn-light m-1">Design</a>
                            <a href="" class="btn btn-light m-1">Development</a>
                            <a href="" class="btn btn-light m-1">Marketing</a>
                            <a href="" class="btn btn-light m-1">SEO</a>
                            <a href="" class="btn btn-light m-1">Writing</a>
                            <a href="" class="btn btn-light m-1">Consulting</a>
                            <a href="" class="btn btn-light m-1">Design</a>
                            <a href="" class="btn btn-light m-1">Development</a>
                            <a href="" class="btn btn-light m-1">Marketing</a>
                            <a href="" class="btn btn-light m-1">SEO</a>
                            <a href="" class="btn btn-light m-1">Writing</a>
                            <a href="" class="btn btn-light m-1">Consulting</a>
                        </div>
                    </div>
                    <!-- Tags End -->
    
                    <!-- Plain Text Start -->
                    <div class="wow slideInUp" data-wow-delay="0.1s">
@include('partials.section-title', ['title' => 'Plain Text', 'type' => 'sidebar'])
                        <div class="bg-dark-second text-center" style="padding: 30px;">
                            <p>Explore more insights on software architecture, cloud-native development, and engineering best practices from our team.</p>
                            <a href="" class="btn btn-primary py-2 px-4">Read More</a>
                        </div>
                    </div>
                    <!-- Plain Text End -->
                </div>
                <!-- Sidebar End -->
            </div>
        </div>
    </div>
    <!-- Blog End -->


@include('partials.vendor-carousel')
@endsection
