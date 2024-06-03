<section class="nebt-support overlay" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="content">
                    <h2>ОСУЩЕСТВЛЯЕМ СВОЮ ДЕЯТЕЛЬНОСТЬ ПРИ ПОДДЕРЖКЕ</h2>
                    <p>Проект выполнен при поддержке «Фонда содействия инновациям» в рамках федерального проекта «Платформа университетского технологического предпринимательства»</p>
                    <div class="row d-flex -justify-content-between align-items-center">
                        @foreach([
                            [
                                'img' => 'img/content/support/1.png',
                                'alt' => 'image',
                                'url' => 'https://ncfu.ru'
                            ],
                            [
                                'img' => 'img/content/support/2.png',
                                'alt' => 'image',
                                'url' => 'https://fasie.ru'
                            ],
                            [
                                'img' => 'img/content/support/3.png',
                                'alt' => 'image',
                                'url' => 'https://univertechpred.ru'
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