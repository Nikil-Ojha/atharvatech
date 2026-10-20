{{-- WhatsApp call-to-action button --}}
<a href="{{ \App\Support\WhatsApp::url() }}" target="_blank" rel="noopener noreferrer"
    class="btn btn-whatsapp {{ $class ?? '' }}" style="{{ $style ?? '' }}"
    title="Chat on WhatsApp" aria-label="Chat on WhatsApp">
    <i class="fab fa-whatsapp me-2"></i>{{ $label ?? 'Chat on WhatsApp' }}
</a>
