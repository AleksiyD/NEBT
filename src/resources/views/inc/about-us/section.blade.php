<section id="about-us" class="about-us section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>О НАС</h2>
                    <p>Мы команда профессионалов, занимающихся разработкой и созданием комплексных технологических решений в соответствии с высокими стандартами качества</p>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="col-lg-5 col-12">
                <div class="single-about-us shadow rounded">
                    <div class="signle-icon">
                        <img class="icofont icofont-ambulance-cross" src="{{ asset('img/content/gen-dir.jpg') }}"></img>
                    </div>
                    <h3>Разинькова Виктория Геннадьевна</h3>
                    <p class="m-1">Генеральный директор</p>
                </div>
            </div>
        </div>
    </div>
</section>
@component('inc.about-us.slider')
    @foreach([
        [
            'img' => 'img/content/awards/1.jpg',
            'text' => 'Победитель Международного конкурса научно-исследовательских проектов «Продовольственная безопасность» в направлении «Инновационные технологии в получении качественной пищевой продукции» (Екатеринбург, 2024г.)'
        ],
        [
            'img' => 'img/content/awards/2.jpg',
            'text' => 'Призер XIV Евразийского экономического форума молодежи, Конгресс предпринимательства и инжиниринга (XIV ЕЭФМ 2024г.)'
        ],
        [
            'img' => 'img/content/awards/3.jpg',
            'text' => 'Финалист Международного конкурса научно-исследовательских проектов «Продовольственная безопасность» в направлении «Индустрия питания: технологии, качество, инновации» (Екатеринбург, 2024г.)'
        ],
        [
            'img' => 'img/content/awards/4.jpg',
            'text' => 'Финалист Федерального проекта «Платформа университетского технологического предпринимательства» ежегодного Всероссийского Рейтинга ТОП-1000 университетских стартапов в технологическом направлении Биотехнологии (ПУТП, 2023г.)'
        ],
        [
            'img' => 'img/content/awards/5.jpg',
            'text' => 'Победитель конкурса «Студенческий стартап» <br> (Фонд содействия инновациям, 2023г.) '
        ]
    ] as $content)
        @include('inc.about-us.slider-item', $content)
    @endforeach
@endcomponent