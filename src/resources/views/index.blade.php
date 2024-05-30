@extends('layouts.layout')
@section('title', '')

@section('content')

    @include('inc.banner')
    @include('inc.general-info.section')
    @include('inc.about-us.section')
    @include('inc.info.services')
    @include('inc.info.quality')
    @include('inc.info.project')
    @include('inc.development.development')
    @include('inc.research.research')
    @include('inc.mass-media.mass-media')
    @include('inc.support.section')

    @component('layouts.utils.modal.window', [
	'id' => 'feedback-form', 
	'title' => 'Форма обратной связи',
	'desc' => 'Оставьте свои контакты, и мы свяжемся с Вами в удобное для Вас время'
    ])
        @include('inc.feedback.form')
    @endcomponent

@endsection