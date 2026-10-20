<div class="d-flex align-items-center {{ $wrapperClass ?? 'wow fadeIn' }}" data-wow-delay="{{ $delay ?? '0.1s' }}">
    <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: {{ $width ?? '60px' }}; height: {{ $width ?? '60px' }};">
        <i class="fa {{ $icon }} text-white"></i>
    </div>
    <div class="ps-4">
        <h5 class="mb-2">{{ $label }}</h5>
        @if (!empty($link))
        @php
            // tel: and mailto: links should open in place, not in a new tab.
            $external = ! (str_starts_with($link, 'tel:') || str_starts_with($link, 'mailto:'));
        @endphp
        <h4 class="text-primary mb-0"><a class="text-primary text-decoration-none" href="{{ $link }}"
                @if ($external) target="_blank" rel="noopener noreferrer" @endif>{{ $value }}</a></h4>
        @else
        <h4 class="text-primary mb-0">{{ $value }}</h4>
        @endif
    </div>
</div>
