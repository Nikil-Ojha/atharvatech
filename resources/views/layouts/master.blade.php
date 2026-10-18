<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Atharva Technologies | Premium Digital Solutions')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="@yield('meta')" name="description">

    <!-- Favicon -->
    <link href="{{ asset('favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>588, Sector 30 Fardiabad HR
                        121003</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+91 7011418852</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>atharvaaojha@gmail.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                            class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                            class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                            class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                            class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i
                            class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="{{ route('home') }}" class="navbar-brand p-0">
                <h1 class="m-0"><i class="fa fa-user-tie me-2"></i>Atharva Technologies</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{ route('home') }}"
                        class="nav-item nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                    <a href="{{ route('about') }}"
                        class="nav-item nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About</a>
                    <a href="{{ route('services') }}"
                        class="nav-item nav-link {{ request()->routeIs('services') ? 'active' : '' }}">Services</a>
                    <div class="nav-item dropdown">
                        <a href="#"
                            class="nav-link dropdown-toggle {{ request()->routeIs('blog', 'detail') ? 'active' : '' }}"
                            data-bs-toggle="dropdown">Blog</a>
                        <div class="dropdown-menu m-0">
                            <a href="{{ route('blog') }}" class="dropdown-item">Blog Grid</a>
                            <a href="{{ route('detail') }}" class="dropdown-item">Blog Detail</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#"
                            class="nav-link dropdown-toggle {{ request()->routeIs('price', 'feature', 'team', 'testimonial', 'quote') ? 'active' : '' }}"
                            data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="{{ route('price') }}" class="dropdown-item">Pricing Plan</a>
                            <a href="{{ route('feature') }}" class="dropdown-item">Our features</a>
                            <a href="{{ route('team') }}" class="dropdown-item">Team Members</a>
                            <a href="{{ route('testimonial') }}" class="dropdown-item">Testimonial</a>
                            <a href="{{ route('quote') }}" class="dropdown-item">Free Quote</a>
                        </div>
                    </div>
                    <a href="{{ route('contact') }}"
                        class="nav-item nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
                </div>
                <button type="button" class="btn text-primary ms-3" data-bs-toggle="modal"
                    data-bs-target="#searchModal"><i class="fa fa-search"></i></button>
                <button type="button" class="theme-toggle ms-3" id="themeToggle" aria-label="Toggle theme">
                    <i class="fas fa-moon"></i>
                </button>
            </div>
        </nav>
        @yield('navbar_extra')
    </div>
    <!-- Navbar End -->

    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3"
                            placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->

    @yield('content')

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-8 col-md-12 mx-auto pt-5 mb-5">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Quick Links</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="{{ route('home') }}"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                                <a class="text-light mb-2" href="{{ route('about') }}"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                                <a class="text-light mb-2" href="{{ route('services') }}"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                                <a class="text-light mb-2" href="{{ route('team') }}"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Meet The Team</a>
                                <a class="text-light mb-2" href="{{ route('blog') }}"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>
                                <a class="text-light" href="{{ route('contact') }}"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Services</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="{{ route('services') }}"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Software Development</a>
                                <a class="text-light mb-2" href="{{ route('services') }}"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Mobile App Development</a>
                                <a class="text-light mb-2" href="{{ route('services') }}"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>UI/UX Design</a>
                                <a class="text-light mb-2" href="{{ route('services') }}"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Cloud Solutions</a>
                                <a class="text-light mb-2" href="{{ route('services') }}"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>AI & Machine Learning</a>
                                <a class="text-light" href="{{ route('services') }}"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>DevOps & Deployment</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Company</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="{{ route('about') }}"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                                <a class="text-light mb-2" href="{{ route('blog') }}"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Blog</a>
                                <a class="text-light mb-2" href="{{ route('testimonial') }}"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Testimonials</a>
                                <a class="text-light mb-2" href="{{ route('price') }}"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Pricing</a>
                                <a class="text-light mb-2" href="{{ route('quote') }}"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Get a Quote</a>
                                <a class="text-light" href="{{ route('contact') }}"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Contact</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white" style="background: #061429;">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-6">
                    <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                        <p class="mb-0">&copy; <span>Atharva Technologies</span>. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>

    <!-- Theme Toggle -->
    <script>
        (function() {
            var themeToggle = document.getElementById('themeToggle');
            var moonIcon = 'fas fa-moon';
            var sunIcon = 'fas fa-sun';

            function setIcon(isDark) {
                var icon = themeToggle.querySelector('i');
                if (icon) {
                    icon.className = isDark ? moonIcon : sunIcon;
                }
            }

            function applyTheme(theme) {
                if (theme === 'light') {
                    document.body.classList.add('light-mode');
                    setIcon(false);
                } else {
                    document.body.classList.remove('light-mode');
                    setIcon(true);
                }
            }

            // Load saved theme
            var savedTheme = localStorage.getItem('atharva_theme');
            if (savedTheme) {
                applyTheme(savedTheme);
            } else if (window.matchMedia && window.matchMedia('(prefers-color-scheme: light)').matches) {
                applyTheme('light');
            } else {
                applyTheme('dark');
            }

            // Toggle on click
            themeToggle.addEventListener('click', function() {
                var isLight = document.body.classList.contains('light-mode');
                var newTheme = isLight ? 'dark' : 'light';
                localStorage.setItem('atharva_theme', newTheme);
                applyTheme(newTheme);
            });
        })();
    </script>
</body>

</html>
