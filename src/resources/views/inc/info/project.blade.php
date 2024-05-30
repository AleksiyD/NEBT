@component('inc.info.section', [
    'header' => 'УНИКАЛЬНОСТЬ ПРОЕКТА',
    'text' => 'Уникальность проекта состоит в применении инновационных ресурсосберегающих технологий, ориентированных на повышение качества, технологичности, эффективности производства и даже увеличение сроков годности пищевой продукции, с использованием ультразвуковой обработки пищевых систем.'
])
    @component('inc.info.list', [
        'text' => 'Предлагаемые решения позволяют:'
    ])
        @component('inc.info.items-area')
            @foreach([
                'обеспечить требуемый уровень структурно-механических и функционально-технологических свойств мясных фаршей;',
                'повысить плотность, монолитность и другие характеристики готового продукта;',
                'гарантировать стабильность потребительских характеристик готовой продукции при хранении;',
                'улучшить органолептические показатели выпускаемой продукции.'
            ] as $text)
                @include('inc.info.item', ['text' => $text])
            @endforeach
        @endcomponent
    @endcomponent
    @component('inc.info.images')
        @foreach([
            [
                'img' => 'img/content/project/1.png',
                'alt' => 'image',
                'col' => 6
            ],
            [
                'img' => 'img/content/project/2.png',
                'alt' => 'image',
                'col' => 6
            ],
            [
                'img' => 'img/content/project/3.png',
                'alt' => 'image',
                'col' => 12
            ]
        ] as $content)
            @include('inc.info.image', $content)
        @endforeach
    @endcomponent
@endcomponent