<div class="testimonial-item bg-dark-second my-4">
    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
        <img class="img-fluid rounded" src="{{ $image ?? 'img/testimonial-1.jpg' }}" style="width: 60px; height: 60px;" >
        <div class="ps-4">
            <h4 class="{{ $nameClass ?? 'text-primary' }} mb-1">{{ $name }}</h4>
            <small class="text-uppercase">{{ $profession }}</small>
        </div>
    </div>
    <div class="pt-4 pb-5 px-5">
        {{ $quote }}
    </div>
</div>
