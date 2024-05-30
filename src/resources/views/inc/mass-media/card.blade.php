<div class="col-lg-4 col-md-12 col-12">
    <div class="single-table h-100">
        <div class="table-head">
            <div class="icon">
                <img src="{{ asset($img) }}" alt="">
            </div>
            <h4 class="title">{{ $title }}</h4>
        </div>
        <p>
            {{ $text }}
        </p>
        <div class="table-bottom">
            <a class="btn" target="_blank" rel="noopener noreferrer" href="{{ $url }}">Подробнее</a>
        </div>
    </div>
</div>