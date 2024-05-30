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
        @include('inc.development.card', $content)
    @endforeach
@endcomponent