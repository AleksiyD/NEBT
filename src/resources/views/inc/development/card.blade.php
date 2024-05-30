<div class="col-lg-4 col-md-6 col-12">
    <div class="single-news h-100 d-flex aligm-items-end flex-column">
        <div class="news-head">
            <img src="{{ asset($img) }}" alt="#">
        </div>
        <div class="news-body mt-auto">
            <div class="news-content">
                <p class="text">{{ $text }}</p>
                <a class="btn mt-2 w-100" href="{{ $href }}">Подробнее</a>
            </div>
        </div>
    </div>
</div>