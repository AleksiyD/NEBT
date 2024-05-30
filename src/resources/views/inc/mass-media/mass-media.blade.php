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