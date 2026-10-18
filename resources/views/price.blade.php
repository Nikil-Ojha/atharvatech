@extends('layouts.master')

@section('title', 'Pricing Plans | Atharva Technologies')
@section('meta', '<meta content="Atharva Technologies, software development, custom software, mobile app, web development, AI, cloud" name="keywords">
    <meta content="Atharva Technologies - Custom software development and digital products" name="description">')
@section('content')
<!-- Full Screen Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
            <div class="modal-header border-0">
                <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center justify-content-center">
                <div class="input-group" style="max-width: 600px;">
                    <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                    <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Full Screen Search End -->


<!-- Pricing Plan Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 700px;">
            <h5 class="fw-bold text-primary text-uppercase">Pricing Plans</h5>
            <h1 class="mb-0">One-Time Delivery Pricing</h1>
            <p class="text-muted mb-0">All charges are estimated. Includes delivery + maintenance + 24×7 support (except Starter and Basic plans).</p>
        </div>

        <div class="row g-4 justify-content-center">
            <!-- ₹500 1-Page Landing Page -->
            <div class="col-lg-4 col-md-6 wow slideInUp" data-wow-delay="0.1s">
                <div class="pricing-card-interactive">
                    <div class="pricing-header-interactive">
                        <h5 class="text-primary mb-1">Starter</h5>
                        <small class="text-uppercase">1-Page Landing Page</small>
                    </div>
                    <div class="pricing-body-interactive">
                        <h1 class="mb-3">
                            <span>₹999</span>
                            <small class="align-bottom" style="font-size: 14px; line-height: 35px;"> Fixed</small>
                        </h1>
                        <div class="pricing-includes">
                            <div class="include-item"><i class="fa fa-check text-primary"></i> Delivery</div>
                            <div class="include-item"><i class="fa fa-check text-primary"></i> 1 Month Maintenance</div>
                            <div class="include-item"><i class="fa fa-check text-primary"></i> 1 Hour Support</div>
                        </div>
                        <div class="pricing-features-interactive mt-4">
                            <div class="pricing-feature-row pass"><span>Custom Subdomain Only</span><i class="fa fa-check"></i></div>
                            <div class="pricing-feature-row pass"><span>Single Page</span><i class="fa fa-check"></i></div>
                            <div class="pricing-feature-row pass"><span>Basic Sections</span><i class="fa fa-check"></i></div>
                            {{-- <div class="pricing-feature-row pass"><span>Contact Form</span><i class="fa fa-check"></i></div> --}}
                            <div class="pricing-feature-row pass"><span>Mobile Responsive</span><i class="fa fa-check"></i></div>
                            <div class="pricing-feature-row fail"><span>Custom Domain</span><i class="fa fa-times"></i></div>
                            <div class="pricing-feature-row fail"><span>SEO Basic</span><i class="fa fa-times"></i></div>
                        </div>
                        <a href="{{ route('quote') }}" class="btn btn-primary w-100 py-3 mt-4 pricing-btn-interactive">Get Started</a>
                    </div>
                </div>
            </div>
            <!-- Single Landing Page / Basic Portfolio: ₹5,000 – ₹15,000 -->
            <div class="col-lg-4 col-md-6 wow slideInUp" data-wow-delay="0.2s">
                <div class="pricing-card-interactive">
                    <div class="pricing-header-interactive">
                        <h5 class="text-primary mb-1">Basic Portfolio</h5>
                        <small class="text-uppercase">Static Website / Portfolio</small>
                    </div>
                    <div class="pricing-body-interactive">
                        <h1 class="mb-3">
                            {{--  --}}
                            <span>₹5,000</span><span class="text-muted"> – ₹15,000</span>
                            <small class="align-bottom" style="font-size: 14px; line-height: 35px;"> Estimated</small>
                        </h1>
                        <div class="pricing-includes">
                            <div class="include-item"><i class="fa fa-check text-primary"></i> All in starter</div>
                            <div class="include-item"><i class="fa fa-check text-primary"></i> Delivery</div>
                            <div class="include-item"><i class="fa fa-check text-primary"></i> 6 Months Maintenance</div>
                            <div class="include-item"><i class="fa fa-check text-primary"></i> Working Hour Support</div>
                        </div>
                        <div class="pricing-features-interactive mt-4">
                            <div class="pricing-feature-row pass"><span>Up-to 10 Page</span><i class="fa fa-check"></i></div>
                            <div class="pricing-feature-row pass"><span>Portfolio Sections</span><i class="fa fa-check"></i></div>
                            <div class="pricing-feature-row pass"><span>Contact Form</span><i class="fa fa-check"></i></div>
                            <div class="pricing-feature-row pass"><span>SEO Basic/Advance</span><i class="fa fa-check"></i></div>
                            <div class="pricing-feature-row fail"><span>CMS</span><i class="fa fa-times"></i></div>
                            <div class="pricing-feature-row fail"><span>Blog</span><i class="fa fa-times"></i></div>
                        </div>
                        <a href="{{ route('quote') }}" class="btn btn-primary w-100 py-3 mt-4 pricing-btn-interactive">Get Started</a>
                    </div>
                </div>
            </div>
            <!-- Basic Business / Static Website (1–10 pages): ₹15,000 – ₹50,000 -->
            <div class="col-lg-4 col-md-6 wow slideInUp" data-wow-delay="0.3s">
                <div class="pricing-card-interactive featured">
                    <div class="popular-badge">Most Popular</div>
                    <div class="pricing-header-interactive">
                        <h5 class="text-white mb-1">Business</h5>
                        <small class="text-uppercase">Dynamic Website (Interactive Pages)</small>
                    </div>
                    <div class="pricing-body-interactive">
                        <h1 class="mb-3 text-white">
                            <span>₹15,000</span><span class="text-white"> – ₹50,000</span>
                            <small class="align-bottom" style="font-size: 14px; line-height: 35px;"> Estimated</small>
                        </h1>
                        <div class="pricing-includes">
                            <div class="include-item"><i class="fa fa-check text-white"></i> All in Basic</div>
                            <div class="include-item"><i class="fa fa-check text-white"></i> Delivery</div>
                            <div class="include-item"><i class="fa fa-check text-white"></i> 1 Year Maintenance</div>
                            <div class="include-item"><i class="fa fa-check text-white"></i> 24×7 Support</div>
                        </div>
                        <div class="pricing-features-interactive mt-4">
                            <div class="pricing-feature-row pass"><span>Unlimited Pages</span><i class="fa fa-check"></i></div>
                            <div class="pricing-feature-row pass"><span>Responsive Design</span><i class="fa fa-check"></i></div>
                            <div class="pricing-feature-row pass"><span>Contact Form</span><i class="fa fa-check"></i></div>
                            <div class="pricing-feature-row pass"><span>Google Maps</span><i class="fa fa-check"></i></div>
                            <div class="pricing-feature-row pass"><span>Basic SEO</span><i class="fa fa-check"></i></div>
                            <div class="pricing-feature-row fail"><span>E-Commerce</span><i class="fa fa-times"></i></div>
                        </div>
                        <a href="{{ route('quote') }}" class="btn btn-white w-100 py-3 mt-4 pricing-btn-interactive">Get Started</a>
                    </div>
                </div>
            </div>
            <!-- E-Commerce Store (Shopify / WooCommerce): ₹50,000 – ₹2,00,000+ -->
            <div class="col-lg-4 col-md-6 wow slideInUp" data-wow-delay="0.4s">
                <div class="pricing-card-interactive">
                    <div class="pricing-header-interactive">
                        <h5 class="text-primary mb-1">E-Commerce</h5>
                        <small class="text-uppercase">Shopify / WooCommerce</small>
                    </div>
                    <div class="pricing-body-interactive">
                        <h1 class="mb-3">

                            <span>₹50,000</span><span class="text-muted"> – ₹2,00,000+</span>
                            <small class="align-bottom" style="font-size: 14px; line-height: 35px;"> Estimated</small>
                        </h1>
                        <div class="pricing-includes">
                            <div class="include-item"><i class="fa fa-check text-primary"></i> All in Business</div>
                            <div class="include-item"><i class="fa fa-check text-primary"></i> Delivery</div>
                            <div class="include-item"><i class="fa fa-check text-primary"></i> 1 Year Maintenance</div>
                            <div class="include-item"><i class="fa fa-check text-primary"></i> 24×7 Support</div>
                        </div>
                        <div class="pricing-features-interactive mt-4">
                            <div class="pricing-feature-row pass"><span>Online Store</span><i class="fa fa-check"></i></div>
                            <div class="pricing-feature-row pass"><span>Payment Gateway</span><i class="fa fa-check"></i></div>
                            <div class="pricing-feature-row pass"><span>Product Catalog</span><i class="fa fa-check"></i></div>
                            <div class="pricing-feature-row pass"><span>Order Management</span><i class="fa fa-check"></i></div>
                            <div class="pricing-feature-row fail"><span>Multi-vendor</span><i class="fa fa-times"></i></div>
                            <div class="pricing-feature-row fail"><span>Subscription</span><i class="fa fa-times"></i></div>
                        </div>
                        <a href="{{ route('quote') }}" class="btn btn-primary w-100 py-3 mt-4 pricing-btn-interactive">Get Started</a>
                    </div>
                </div>
            </div>
            <!-- Custom Web Application / Portal / CRM / ERP: ₹1,00,000 – ₹10,00,000+ -->
            <div class="col-lg-4 col-md-6 wow slideInUp" data-wow-delay="0.5s">
                <div class="pricing-card-interactive">
                    <div class="pricing-header-interactive">
                        <h5 class="text-primary mb-1">Custom App</h5>
                        <small class="text-uppercase">Portal / CRM / ERP</small>
                    </div>
                    <div class="pricing-body-interactive">
                        <h1 class="mb-3">

                            <span>₹1,00,000</span><span class="text-muted"> – ₹10,00,000+</span>
                            <small class="align-bottom" style="font-size: 14px; line-height: 35px;"> Estimated</small>
                        </h1>
                        <div class="pricing-includes">
                            <div class="include-item"><i class="fa fa-check text-primary"></i> All in E-commerce</div>
                            <div class="include-item"><i class="fa fa-check text-primary"></i> Delivery</div>
                            <div class="include-item"><i class="fa fa-check text-primary"></i> 1 Year Maintenance</div>
                            <div class="include-item"><i class="fa fa-check text-primary"></i> 24×7 Support</div>
                        </div>
                        <div class="pricing-features-interactive mt-4">
                            <div class="pricing-feature-row pass"><span>Custom Web App</span><i class="fa fa-check"></i></div>
                            <div class="pricing-feature-row pass"><span>User Roles</span><i class="fa fa-check"></i></div>
                            <div class="pricing-feature-row pass"><span>Dashboard</span><i class="fa fa-check"></i></div>
                            <div class="pricing-feature-row pass"><span>Role-based Access</span><i class="fa fa-check"></i></div>
                            <div class="pricing-feature-row fail"><span>Mobile App</span><i class="fa fa-times"></i></div>
                            <div class="pricing-feature-row fail"><span>AI Integration</span><i class="fa fa-times"></i></div>
                        </div>
                        <a href="{{ route('quote') }}" class="btn btn-primary w-100 py-3 mt-4 pricing-btn-interactive">Get Started</a>
                    </div>
                </div>
            </div>
            <!-- Enterprise Website: ₹5,00,000 – ₹25,00,000 -->
            <div class="col-lg-4 col-md-6 wow slideInUp" data-wow-delay="0.6s">
                <div class="pricing-card-interactive">
                    <div class="pricing-header-interactive">
                        <h5 class="text-primary mb-1">Enterprise</h5>
                        <small class="text-uppercase">Full-Scale Website</small>
                    </div>
                    <div class="pricing-body-interactive">
                        <h1 class="mb-3">

                            <span>₹5,00,000</span><span class="text-muted"> – ₹25,00,000</span>
                            <small class="align-bottom" style="font-size: 14px; line-height: 35px;"> Estimated</small>
                        </h1>
                        <div class="pricing-includes">
                            <div class="include-item"><i class="fa fa-check text-primary"></i> All in Custom App</div>
                            <div class="include-item"><i class="fa fa-check text-primary"></i> Delivery</div>
                            <div class="include-item"><i class="fa fa-check text-primary"></i> 1 Year Maintenance</div>
                            <div class="include-item"><i class="fa fa-check text-primary"></i> 24×7 Support</div>
                        </div>
                        <div class="pricing-features-interactive mt-4">
                            <div class="pricing-feature-row pass"><span>Enterprise Website</span><i class="fa fa-check"></i></div>
                            <div class="pricing-feature-row pass"><span>Custom Development</span><i class="fa fa-check"></i></div>
                            <div class="pricing-feature-row pass"><span>Dedicated Support</span><i class="fa fa-check"></i></div>
                            <div class="pricing-feature-row pass"><span>SLA Included</span><i class="fa fa-check"></i></div>
                            <div class="pricing-feature-row fail"><span>Unlimited Pages</span><i class="fa fa-times"></i></div>
                            <div class="pricing-feature-row fail"><span>White Label</span><i class="fa fa-times"></i></div>
                        </div>
                        <a href="{{ route('quote') }}" class="btn btn-primary w-100 py-3 mt-4 pricing-btn-interactive">Get Started</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Note Section -->
        <div class="mt-5 wow fadeInUp" data-wow-delay="0.7s">
            <div class="bg-dark-second rounded p-5 text-center border border-primary">
                <h4 class="mb-3">Pricing Note</h4>
                <p class="mb-3">All prices are <strong>estimated</strong> in Indian Rupees (₹). Each plan includes:</p>
                <div class="row justify-content-center text-start" style="max-width: 600px;">
                    <div class="col-md-4 mb-3">
                        <div class="d-flex align-items-center">
                            <i class="fa fa-truck text-primary me-3"></i>
                            <span><strong>Delivery</strong> – Complete development and deployment</span>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="d-flex align-items-center">
                            <i class="fa fa-wrench text-primary me-3"></i>
                            <span><strong>Maintenance</strong> – 1 year of updates and bug fixes</span>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="d-flex align-items-center">
                            <i class="fa fa-headset text-primary me-3"></i>
                            <span><strong>24×7 Support</strong> – Round-the-clock technical assistance</span>
                        </div>
                    </div>
                </div>
                <p class="mt-3 text-muted">Final pricing may vary based on specific requirements. Contact us for a custom quote.</p>
                <a href="{{ route('quote') }}" class="btn btn-primary py-3 px-5 mt-3">Request Custom Quote</a>
            </div>
        </div>

        <!-- FAQ Section -->
        <div class="mt-5 wow fadeInUp" data-wow-delay="0.8s">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Frequently Asked Questions</h5>
                <h1 class="mb-0">Everything You Need to Know</h1>
            </div>
            <div class="faq-accordion">
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFaq(this)">
                        Are these estimated prices or subscription? <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        These are <strong>estimated prices</strong>. There are no monthly or yearly subscription fees. Delivery + 1 year maintenance + 24×7 support are included (except Starter and Basic plans which include delivery only).
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFaq(this)">
                        What happens after 1 year of maintenance? <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        After the first year, you can renew the maintenance package at a nominal annual fee (for plans that include maintenance), or continue using your website without maintenance. Your website remains yours forever.
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFaq(this)">
                        Can I upgrade my plan later? <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        Yes! You can upgrade at any time. You'll only pay the price difference, and our team will handle the upgrade without any downtime.
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFaq(this)">
                        Do you offer custom packages? <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        Absolutely. If none of our plans fit your needs, we can build a custom package tailored to your specific requirements. Contact us for a free consultation.
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFaq(this)">
                        Is there a money-back guarantee? <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        Yes, we offer a 7-day money-back guarantee on all starter and basic plans. If you're not satisfied, we'll refund your payment within 7 days of project delivery.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Pricing Plan End -->

<!-- FAQ Script -->
<script>
    function toggleFaq(element) {
        const faqItem = element.parentElement;
        const isActive = faqItem.classList.contains('active');

        document.querySelectorAll('.faq-item').forEach(item => {
            item.classList.remove('active');
        });

        if (!isActive) {
            faqItem.classList.add('active');
        }
    }
</script>
@endsection
