<section id="{{ $class ?? '' }}" class="about-us-more section {{ $class ?? '' }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>{{ $header }}</h2>
                    <p>{!! $text ?? '' !!}</p>
                </div>
            </div>
        </div>
        <div class="row">
            {{ $slot }}
        </div>
    </div>
</section>