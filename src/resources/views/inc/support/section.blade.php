<section class="nebt-support overlay" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="content">
                    <h2>ОСУЩЕСТВЛЯЕМ СВОЮ ДЕЯТЕЛЬНОСТЬ ПРИ ПОДДЕРЖКЕ</h2>
                    <div class="row d-flex -justify-content-between align-items-center">
                        @foreach([
                            [
                                'img' => 'img/content/support/1.png',
                                'alt' => 'image'
                            ],
                            [
                                'img' => 'img/content/support/2.png',
                                'alt' => 'image'
                            ],
                            [
                                'img' => 'img/content/support/3.png',
                                'alt' => 'image'
                            ]
                        ] as $content)
                            @include('inc.support.img', $content)
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>