<div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="{{ $delay ?? '0.3s' }}">
    <div class="service-item bg-dark-second rounded d-flex flex-column align-items-center justify-content-center text-center">
        <div class="service-icon">
            <i class="fa {{ $icon }} text-white"></i>
        </div>
        <h4 class="mb-3">{{ $title }}</h4>
        <p class="m-0">{{ $description }}</p>
        <div class="d-flex gap-2">
            <a class="btn btn-lg btn-primary rounded" href="{{ $link ?? route('services') }}">
                <i class="bi bi-arrow-right"></i>
            </a>
            <a class="btn btn-lg btn-whatsapp rounded" href="{{ \App\Support\WhatsApp::url() }}" target="_blank"
                rel="noopener noreferrer" title="Chat on WhatsApp" aria-label="Chat on WhatsApp">
                <i class="fab fa-whatsapp"></i>
            </a>
        </div>
    </div>
</div>
