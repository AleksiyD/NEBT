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

@include('layouts.temp')

@endsection