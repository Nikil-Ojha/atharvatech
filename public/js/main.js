(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 45) {
            $('.navbar').addClass('sticky-top shadow-sm');
        } else {
            $('.navbar').removeClass('sticky-top shadow-sm');
        }
    });
    
    // Dropdown on mouse hover
    const $dropdown = $(".dropdown");
    const $dropdownToggle = $(".dropdown-toggle");
    const $dropdownMenu = $(".dropdown-menu");
    const showClass = "show";
    
    $(window).on("load resize", function() {
        if (this.matchMedia("(min-width: 992px)").matches) {
            $dropdown.hover(
            function() {
                const $this = $(this);
                $this.addClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "true");
                $this.find($dropdownMenu).addClass(showClass);
            },
            function() {
                const $this = $(this);
                $this.removeClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "false");
                $this.find($dropdownMenu).removeClass(showClass);
            }
            );
        } else {
            $dropdown.off("mouseenter mouseleave");
        }
    });


    // Facts counter (vanilla JS, no jQuery dependency)
    const counterElements = document.querySelectorAll('[data-toggle="counter-up"]');
    if (counterElements.length > 0 && 'IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const el = entry.target;
                    const target = parseInt(el.getAttribute('data-num') || el.textContent.replace(/\D/g, ''), 10);
                    const suffix = el.textContent.replace(/[\d,.]/g, '');
                    let current = 0;
                    const increment = target / 100;
                    const timer = setInterval(() => {
                        current += increment;
                        if (current >= target) {
                            el.textContent = target + suffix;
                            clearInterval(timer);
                        } else {
                            el.textContent = Math.floor(current) + suffix;
                        }
                    }, 20);
                    observer.unobserve(el);
                }
            });
        }, { threshold: 0.5 });
        counterElements.forEach(el => observer.observe(el));
    }
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // WhatsApp deep links
    // Links marked with [data-whatsapp-form] point at a form id. Instead of
    // submitting the form, the visitor's details are appended to the default
    // WhatsApp message and the chat is opened with everything pre-filled.
    var whatsappForms = document.querySelectorAll('[data-whatsapp-form]');
    whatsappForms.forEach(function (link) {
        link.addEventListener('click', function (event) {
            var form = document.getElementById(link.getAttribute('data-whatsapp-form'));
            if (!form) {
                return;
            }

            var details = [];
            form.querySelectorAll('input[name], select[name], textarea[name]').forEach(function (field) {
                var value = (field.value || '').trim();

                if (field.tagName === 'SELECT') {
                    value = (field.options[field.selectedIndex] || {}).text || '';
                    value = value.trim();
                }

                if (!value) {
                    return;
                }

                details.push(field.getAttribute('name') + ': ' + value);
            });

            if (!details.length) {
                return;
            }

            event.preventDefault();

            var base = link.href.split('?')[0];
            var message = link.href.indexOf('?text=') !== -1
                ? decodeURIComponent(link.href.split('?text=')[1] || '')
                : '';
            var url = base + '?text=' + encodeURIComponent(message + '\n\n' + details.join('\n'))
                .replace(/'/g, '%27');

            window.open(url, '_blank', 'noopener');
        });
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        dots: true,
        loop: true,
        center: true,
        responsive: {
            0:{
                items:1
            },
            576:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        }
    });


    // Vendor carousel
    $('.vendor-carousel').owlCarousel({
        loop: true,
        margin: 45,
        dots: false,
        loop: true,
        autoplay: true,
        smartSpeed: 1000,
        responsive: {
            0:{
                items:2
            },
            576:{
                items:4
            },
            768:{
                items:6
            },
            992:{
                items:8
            }
        }
    });
    
})(jQuery);

