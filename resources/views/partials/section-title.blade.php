@if($type ?? 'main' === 'sidebar')
<div class="section-title section-title-sm position-relative pb-3 mb-4">
    <h3 class="mb-0">{{ $title }}</h3>
</div>
@else
<div class="section-title {{ $wrapperClass ?? 'text-center position-relative pb-3 mb-5 mx-auto' }}" style="{{ $style ?? 'max-width: 700px;' }}">
    <h5 class="fw-bold text-primary text-uppercase">{{ $title }}</h5>
    <h1 class="mb-0">{{ $subtitle }}</h1>
    @if(isset($description))
        <p class="text-muted mb-0">{{ $description }}</p>
    @endif
</div>
@endif
