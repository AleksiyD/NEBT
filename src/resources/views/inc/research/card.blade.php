<li class="list-group-item">
    <div class="media align-items-lg-center flex-column flex-lg-row p-3">
        <div class="media-body order-2 order-lg-1">
        <h5 class="mt-0 font-weight-bold mb-2">{{ $title }}</h5>
        <p class="font-italic text-muted mb-0 small">{{ $text }}</p>
        <div class="d-flex align-items-center justify-content-between mt-1">
            <a class="btn text-light" href="{{ $href }}">Подробнее</a>
        </div>
        </div><img src="{{ asset($img) }}" alt="Generic placeholder image" width="200" class="ml-lg-5 order-1 order-lg-2">
    </div>
</li>