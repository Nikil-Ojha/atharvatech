<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Atharva Technologies | Premium Digital Solutions')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="@yield('meta')" name="description">

    <!-- Favicon -->
    <link href="{{ asset('img/logo.png') }}" rel="icon" type="image/png">
    <link href="{{ asset('img/logo.png') }}" rel="apple-touch-icon">

    <!-- Google Web Fonts (self-hosted) -->
    <link href="{{ asset('css/fonts/google-fonts.css') }}" rel="stylesheet">

    <!-- Icon Font Stylesheet (self-hosted) -->
    <link href="{{ asset('lib/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">

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
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i><a
                            class="text-light text-decoration-none" href="tel:+917011418852">+91 7011418852</a></small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i><a
                            class="text-light text-decoration-none"
                            href="mailto:atharvaaojha@gmail.com">atharvaaojha@gmail.com</a></small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    {{-- <a class="btn btn-sm me-2" href="https://www.facebook.com/atharvaojhatech/"
                        style="width:36px;height:36px;display:inline-flex;align-items:center;justify-content:center;background:#1DA1F2;color:#fff;border:none;border-radius:6px;"><i
                            class="fab fa-twitter fw-normal"></i></a> --}}
                    <a class="btn btn-sm me-2" href="https://www.facebook.com/atharvaojhatech/"
                        style="width:36px;height:36px;display:inline-flex;align-items:center;justify-content:center;background:#3B5998;color:#fff;border:none;border-radius:6px;"><i
                            class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm me-2" href="@whatsapp"
                        style="width:36px;height:36px;display:inline-flex;align-items:center;justify-content:center;background:rgb(22, 216, 71);color:#fff;border:none;border-radius:6px;"><i
                            class="fab fa-whatsapp fw-normal"></i></a>
                    {{-- <a class="btn btn-sm me-2" href="javascript:void(0);"
                        style="width:36px;height:36px;display:inline-flex;align-items:center;justify-content:center;background:#E4405F;color:#fff;border:none;border-radius:6px;"><i
                            class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm" href="javascript:void(0);"
                        style="width:36px;height:36px;display:inline-flex;align-items:center;justify-content:center;background:#FF0000;color:#fff;border:none;border-radius:6px;"><i
                            class="fab fa-youtube fw-normal"></i></a> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="{{ route('home') }}" class="navbar-brand p-0 d-flex align-items-center">
                <img src="{{ asset('img/logo.png') }}" alt="Atharva Technologies" style="height: 45px; margin-right: 10px;">
                <h1 class="m-0">Atharva Technologies</h1>
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
                    {{-- Blog dropdown hidden from navigation --}}
                    {{-- <div class="nav-item dropdown">
                        <a href="javascript:void(0);"
                            class="nav-link dropdown-toggle {{ request()->routeIs('blog', 'detail') ? 'active' : '' }}"
                            data-bs-toggle="dropdown">Blog</a>
                        <div class="dropdown-menu m-0">
                            <a href="{{ route('blog') }}" class="dropdown-item">Blog Grid</a>
                            <a href="{{ route('detail') }}" class="dropdown-item">Blog Detail</a>
                        </div>
                    </div> --}}
                    <div class="nav-item dropdown">
                        <a href="javascript:void(0);"
                            class="nav-link dropdown-toggle {{ request()->routeIs('price', 'feature', 'team', 'testimonial', 'quote') ? 'active' : '' }}"
                            data-bs-toggle="dropdown">Work</a>
                        <div class="dropdown-menu m-0">
                            <a href="{{ route('price') }}" class="dropdown-item">Pricing Plan</a>
                            <a href="{{ route('feature') }}" class="dropdown-item">Our features</a>
                            <a href="{{ route('team') }}" class="dropdown-item">Team Members</a>
                            {{-- <a href="{{ route('testimonial') }}" class="dropdown-item">Testimonial</a>
                            <a href="{{ route('quote') }}" class="dropdown-item">Free Quote</a> --}}
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
    <footer class="footer-section bg-dark text-light px-4">
        <!-- Top Bar: Brand + Social -->
        <div class="container-fluid py-3 px-4 px-lg-0">
            <div class="row align-items-center g-3">
                <div class="col-lg-4 text-center text-lg-start">
                    <a href="{{ route('home') }}" class="text-decoration-none d-flex align-items-center justify-content-center justify-content-lg-start">
                        <img src="{{ asset('img/logo.png') }}" alt="Atharva Technologies" style="height: 40px; margin-right: 8px;">
                        <h1 class="m-0 fw-bold" style="font-size: 1.5rem; letter-spacing: -0.5px; color:white; margin:0;">
                            Atharva<span style="color: var(--bs-primary);">Technologies</span></h1>
                    </a>
                </div>
                <div class="col-lg-4 text-center text-lg-start">
                    <p class="mb-0 text-opacity-75 small">Premium digital solutions for modern businesses.</p>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    {{-- <div class="d-flex justify-content-center justify-content-lg-end gap-2">
                        <a class="text-white text-opacity-75 hover:text-white" href="javascript:void(0);" style="width:32px;height:32px;display:inline-flex;align-items:center;justify-content:center;background:rgba(255,255,255,0.08);border-radius:6px;"><i class="fab fa-facebook-f"></i></a>
                        <a class="text-white text-opacity-75 hover:text-white" href="javascript:void(0);" style="width:32px;height:32px;display:inline-flex;align-items:center;justify-content:center;background:rgba(255,255,255,0.08);border-radius:6px;"><i class="fab fa-twitter"></i></a>
                        <a class="text-white text-opacity-75 hover:text-white" href="javascript:void(0);" style="width:32px;height:32px;display:inline-flex;align-items:center;justify-content:center;background:rgba(255,255,255,0.08);border-radius:6px;"><i class="fab fa-instagram"></i></a>
                        <a class="text-white text-opacity-75 hover:text-white" href="javascript:void(0);" style="width:32px;height:32px;display:inline-flex;align-items:center;justify-content:center;background:rgba(255,255,255,0.08);border-radius:6px;"><i class="fab fa-linkedin-in"></i></a>
                    </div> --}}
                </div>
            </div>
        </div>

        <!-- Main Footer Grid -->
        <div class="container-fluid py-4 px-4 px-lg-0">
            <div class="row g-3 gy-lg-4">
                <!-- About / Company -->
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h5 class="footer-title text-white mb-3 position-relative d-inline-block">About Us</h5>
                        <p class="text-opacity-75 mb-3 small">We deliver innovative software solutions, mobile apps,
                            and AI-powered platforms that help businesses scale and succeed in the digital era.</p>
                        <div class="d-flex gap-2">
                            <a class="text-white text-opacity-75 hover:text-white" href="https://www.facebook.com/atharvaojhatech/"
                                style="width:30px;height:30px;display:inline-flex;align-items:center;justify-content:center;background:rgba(255,255,255,0.08);border-radius:6px;"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="text-white text-opacity-75 hover:text-white" href="@whatsapp"
                                style="width:30px;height:30px;display:inline-flex;align-items:center;justify-content:center;background:rgba(255,255,255,0.08);border-radius:6px;"><i
                                    class="fab fa-whatsapp"></i></a>

                            {{-- <a class="text-white text-opacity-75 hover:text-white" href="javascript:void(0);"
                                style="width:30px;height:30px;display:inline-flex;align-items:center;justify-content:center;background:rgba(255,255,255,0.08);border-radius:6px;"><i
                                    class="fab fa-twitter"></i></a>
                            <a class="text-white text-opacity-75 hover:text-white" href="javascript:void(0);"
                                style="width:30px;height:30px;display:inline-flex;align-items:center;justify-content:center;background:rgba(255,255,255,0.08);border-radius:6px;"><i
                                    class="fab fa-instagram"></i></a>
                            <a class="text-white text-opacity-75 hover:text-white" href="javascript:void(0);"
                                style="width:30px;height:30px;display:inline-flex;align-items:center;justify-content:center;background:rgba(255,255,255,0.08);border-radius:6px;"><i
                                    class="fab fa-linkedin-in"></i></a> --}}
                        </div>
                    </div>
                </div>
                <!-- Quick Links -->
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h5 class="footer-title text-white mb-3 position-relative d-inline-block">Quick Links</h5>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-1"><a class="text-light text-decoration-none hover:text-white small"
                                    href="{{ route('home') }}"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Home</a></li>
                            <li class="mb-1"><a class="text-light text-decoration-none hover:text-white small"
                                    href="{{ route('about') }}"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>About Us</a></li>
                            <li class="mb-1"><a class="text-light text-decoration-none hover:text-white small"
                                    href="{{ route('services') }}"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Our Services</a></li>
                            <li class="mb-1"><a class="text-light text-decoration-none hover:text-white small"
                                    href="{{ route('team') }}"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Meet The Team</a></li>
                            <li class="mb-1"><a class="text-light text-decoration-none hover:text-white small"
                                    href="{{ route('blog') }}"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a></li>
                            <li class="mb-0 d-flex align-items-center">
                                <a class="text-light text-decoration-none hover:text-white small"
                                    href="{{ route('contact') }}"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Services -->
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h5 class="footer-title text-white mb-3 position-relative d-inline-block">Our Services</h5>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-1"><a class="text-light text-decoration-none hover:text-white small"
                                    href="{{ route('services') }}"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Software Development</a></li>
                            <li class="mb-1"><a class="text-light text-decoration-none hover:text-white small"
                                    href="{{ route('services') }}"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Mobile App Development</a></li>
                            <li class="mb-1"><a class="text-light text-decoration-none hover:text-white small"
                                    href="{{ route('services') }}"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>UI/UX Design</a></li>
                            <li class="mb-1"><a class="text-light text-decoration-none hover:text-white small"
                                    href="{{ route('services') }}"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Cloud Solutions</a></li>
                            <li class="mb-1"><a class="text-light text-decoration-none hover:text-white small"
                                    href="{{ route('services') }}"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>AI &amp; Machine Learning</a>
                            </li>
                            <li class="mb-0"><a class="text-light text-decoration-none hover:text-white small"
                                    href="{{ route('services') }}"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>DevOps &amp; Deployment</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Contact Details -->
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h5 class="footer-title text-white mb-3 position-relative d-inline-block">Contact Details</h5>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fa fa-map-marker-alt text-primary me-3 mt-1 flex-shrink-0"></i>
                                <div>
                                    <div class="text-opacity-75 small">Office Address</div>
                                    <div class="text-white small">588, Sector 30 Fardiabad HR 121003</div>
                                </div>
                            </li>
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fa fa-phone-alt text-primary me-3 mt-1 flex-shrink-0"></i>
                                <div>
                                    <div class="text-opacity-75 small">Phone</div>
                                    <div class="text-white small"><a class="text-white text-decoration-none"
                                            href="tel:+917011418852">+91 7011418852</a></div>
                                </div>
                            </li>
                            <li class="mb-0 d-flex align-items-start">
                                <i class="fa fa-envelope-open text-primary me-3 mt-1 flex-shrink-0"></i>
                                <div>
                                    <div class="text-opacity-75 small">Email</div>
                                    <div class="text-white small"><a class="text-white text-decoration-none"
                                            href="mailto:atharvaaojha@gmail.com">atharvaaojha@gmail.com</a></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Newsletter -->
        {{-- <div class="container-fluid py-3 px-4 px-lg-0" style="background: rgba(255,255,255,0.04);">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h5 class="text-white mb-3">Subscribe to our newsletter</h5>
                    <p class="text-opacity-75 small mb-3">Get the latest updates and insights delivered to your inbox.
                    </p>
                    <div class="input-group" style="max-width: 440px; margin: 0 auto;">
                        <input type="email" class="form-control bg-dark-second border-secondary"
                            placeholder="Enter your email" style="height: 42px; border-radius: 6px 0 0 6px;">
                        <button class="btn btn-primary"
                            style="height: 42px; border-radius: 0 6px 6px 0;">Subscribe</button>
                    </div>
                </div>
            </div>
        </div> --}}
        </div>

        <!-- Bottom Copyright -->
        <div class="container-fluid py-3 px-4 px-lg-0">
            <div class="row align-items-center g-3">
                <div class="col-12 text-center">
                    <p class="mb-0 text-opacity-75 small">&copy; <span>Atharva Technologies</span>. All Rights
                        Reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="javascript:void(0);" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries (self-hosted) -->
    <script src="{{ asset('js/vendor/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/vendor/bootstrap.bundle.min.js') }}"></script>
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
