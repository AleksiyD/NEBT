@extends('layouts.layout')
@section('title', '')

@section('content')

@include('inc.banner')
@component('inc.general-info.info-area')
    @foreach([
        [
            'title' => 'Услуги',
            'text' => 'Мы предоставляем широкий спектр услуг в области разработки и внедрения инновационных технологий в пищевую промышленность'
        ],
        [
            'title' => 'Качество',
            'text' => 'Мы стремимся к созданию продуктов, которые будут соответствовать самым высоким стандартам качества и удовлетворять потребности конечного потребителя'
        ],
        [
            'title' => 'Инновации',
            'text' => 'Мы предлагаем индивидуальный подход по разработке и внедрению инновационных технологий в качественном развитии пищевой промышленности'
        ]
    ] as $content)
        @include('inc.general-info.info-card', [
            'title' => $content['title'],
            'text' => $content['text']
        ])
    @endforeach
@endcomponent
@include('inc.about-us.section')
@include('inc.info.services')
@include('inc.info.quality')
@include('inc.info.project')
@component('inc.development.section')
    @foreach([
        [
          'img' => 'img/content/development/1.png',
          'text' => 'Рецептура печеночного паштета с пребиотическим действием для целевой группы потребителей',
          'href' => 'https://new.fips.ru/registers-doc-view/fips_servlet?DB=RUPAT&DocNumber=2787030&TypeFile=html'
        ],
        [
          'img' => 'img/content/development/2.png',
          'text' => 'Рецептура колбасы вареной функциональной обогащенной создана комбинированием мясного, растительного сырья и функциональных ингредиентов',
          'href' => 'https://new.fips.ru/registers-doc-view/fips_servlet?DB=RUPAT&DocNumber=2797405&TypeFile=html'
        ],
        [
          'img' => 'img/content/development/3.png',
          'text' => 'Рецептура мясорастительного полуфабриката, имеющего высокий уровень сбалансированности по незаменимым аминокислотам',
          'href' => 'https://new.fips.ru/registers-doc-view/fips_servlet?DB=RUPAT&DocNumber=2757319&TypeFile=html'
        ],
        [
          'img' => 'img/content/development/4.png',
          'text' => 'Рецептура мясорастительного рубленного полуфабриката с высокой биологической ценностью, обладающего пребиотическим действием',
          'href' => 'https://new.fips.ru/registers-doc-view/fips_servlet?DB=RUPAT&DocNumber=2774419&TypeFile=html'
        ]
    ] as $content)
        @include('inc.development.card', [
            'img' => $content['img'],
            'text' => $content['text'],
            'href' => $content['href']
        ])
    @endforeach
@endcomponent
@component('inc.research.section')
    @foreach([
        [
          'title' => 'Современные методы получения стабильных эмульсий в технологии производства мясопродуктов',
          'text' => 'Материалы VII (64-й) ежегодной НПК «Университетская наука – региону». Биоразнообразие, биоресурсы, вопросы биотехнологии и здоровье населения Северо-Кавказского региона. – Ставрополь: Изд-во СКФУ, 2019. – 400 с.',
          'img' => 'img/content/research/1.png',
          'href' => 'https://www.elibrary.ru/item.asp?id=38303068'
        ],
        [
          'title' => 'Оценка способов получения и использования водожировых эмульсий при производстве мясных изделий ',
          'text' => 'Сборник статей по материалам ежегодной всероссийской (национальной) конференции для студентов, аспирантов и молодых ученых «Перспективные разработки молодых ученых в области производства и переработки сельскохозяйственной продукции». - Издательство «АРГУС» (Ставрополь),  2019. – 354 с.',
          'img' => 'img/content/research/2.png',
          'href' => 'https://www.elibrary.ru/item.asp?id=41580260'
        ],
        [
          'title' => 'Перспективы применения метода лиофилизации в производстве мясного, молочного сырья, фруктов и овощей',
          'text' => 'Сборник научных статей одиннадцатой международной научной конференции «Приоритетные направления инновационной деятельности в промышленности»,Часть 1. – Казань: ООО «Конверт», 2020. – 272 с.',
          'img' => 'img/content/research/3.png',
          'href' => 'https://www.elibrary.ru/item.asp?id=44569750'
        ],
        [
          'title' => 'Зарубежный опыт и перспективы использования ультразвуковой обработки в пищевой промышленности',
          'text' => 'Материалы Международной научно-практической конференции «Инновационное развитие аграрно-пищевых технологий» / Под общ. ред. акад. РАН Горлова И.Ф. – Волгоград: ООО «СФЕРА», 2021. – 255 с.',
          'img' => 'img/content/research/4.png',
          'href' => 'https://www.elibrary.ru/item.asp?id=46601183'
        ],
        [
          'title' => 'Meat products for the fudnet market',
          'text' => 'ВАК 2163 в редакции от 27.04.2022, включен с (28.12.2018) Современная наука и инновации. – 2021. – №4 (36). – С. 118-128.',
          'img' => 'img/content/research/5.png',
          'href' => 'https://www.elibrary.ru/item.asp?id=48561082'
        ],
        [
          'title' => 'Development of new types of minced meat products for preventive and personalized nutrition',
          'text' => '(Scopus) Lecture Notes in Networks and Systemsthis link is disabled. –2022. – 408 LNNS. – P. 18-27.',
          'img' => 'img/content/research/6.png',
          'href' => 'https://www.elibrary.ru/item.asp?id=48191027'
        ],
        [
          'title' => 'Development of new types of functional meat and vegetable semi-finished products with prebiotic effect',
          'text' => 'Modern Science and Innovations. – 2022. – No. 3(39). – P. 119-127.',
          'img' => 'img/content/research/7.png',
          'href' => 'https://www.elibrary.ru/item.asp?id=50277038'
        ],
        [
          'title' => 'Разработка рецептуры функционального печеночного паштета с пребиотическим действием',
          'text' => '(ВАК 2386 в редакции от 20.12.2022, включен с 28.12.2018). Технология и товароведение инновационных пищевых продуктов.  – ОГУ им. И.С. Тургенева. – 2022. – № 6 (77). – С. 32-37.',
          'img' => 'img/content/research/8.png',
          'href' => 'https://www.elibrary.ru/item.asp?id=50093342'
        ],
        [
          'title' => 'Нутриентносбалансированные мясорастительные продукты с молочной мелассой',
          'text' => 'Современные проблемы техники и технологии пищевых производств. ХХII международная научно-практическая конференция, Алтайский государственный технический университет им. И.И. Ползунова. – Барнаул: Изд-во Алтайский государственный технический университет им. И.И. Ползунова, 2022. – 247 с.  ',
          'img' => 'img/content/research/9.png',
          'href' => 'https://www.elibrary.ru/item.asp?id=50406660'
        ],
        [
          'title' => 'Разработка рецептур продуктов питания с высокой пищевой и биологической ценностью',
          'text' => 'Материалы X (67-й) ежегодной научно-практической конференции «Университетская наука – региону». Биоразнообразие, биоресурсы, вопросы биотехнологии и здоровье населения Северо-Кавказского региона. – Ставрополь: Изд-во СКФУ, 2023. – 432 с.',
          'img' => 'img/content/research/10.png',
          'href' => 'https://www.elibrary.ru/item.asp?id=54400623'
        ]
    ] as $content)
        @include('inc.research.card', [
            'title' => $content['title'],
            'text' => $content['text'],
            'img' => $content['img'],
            'href' => $content['href']
        ])
    @endforeach
@endcomponent
@component('inc.mass-media.section')
  <div class="col-lg-4 col-md-12 col-12">
      <div class="single-table h-100">
          <div class="table-head">
              <div class="icon">
                <iframe src="https://vk.com/video_ext.php?oid=-41441187&id=456239806&hash=dadc3bd2a5247336" frameborder="0" allowfullscreen="1" allow="autoplay; encrypted-media; fullscreen; picture-in-picture"></iframe>
              </div>
              <h4 class="title">Студенческий стартап, как начало нового проекта: Дневник стартапера</h4>
          </div>
          <p>
          На связи Виктория Разинькова и ее проект "Разработка технологии высокостабильных пищевых эмульсий на основе отечественных коллагеновых белков с использованием ультразвуковой обработки".
          </p>
          <div class="table-bottom">
              <a class="btn" target="_blank" rel="noopener noreferrer" href="https://vk.com/video-41441187_456239806">Подробнее</a>
          </div>
      </div>
  </div>
  @foreach([
    [
      'img' => 'img/content/mass-media/1.jpg',
      'title' => 'ЗВЕЗДА ЕВРАЗИИ',
      'text' => 'Представлен высокий уровень своих научных разработок в XIV Евразийском экономическом форуме молодежи «Россия-Евразия-Мир. Интеграция-развитие-перспектива», который проходил с 22 по 26 апреля 2024 г. в Екатеринбурге.',
      'url' => 'https://foodtech.ncfu.ru/news/10921/ '
    ],
    [
      'img' => 'img/content/mass-media/2.jpg',
      'title' => 'СТУДЕНЧЕСКИЙ СТАРТАП: 19 СТУДЕНТОВ СКФУ ПОЛУЧАТ МИЛЛИОН НА РАЗРАБОТКУ СВОИХ ИЗОБРЕТЕНИЙ',
      'text' => 'Студенты ведущего университета Северного Кавказа стали победителями федерального конкурса «Студенческий стартап».',
      'url' => 'https://ncfu.ru/novosti/nauka/studencheskiy-startap-19-studentov-skfu-poluchat-million-na-razrabotku-svoikh-izobreteniy-46/ '
    ]
  ] as $content)
    @include('inc.mass-media.card', $content)
  @endforeach
@endcomponent

@include('layouts.temp')

@endsection