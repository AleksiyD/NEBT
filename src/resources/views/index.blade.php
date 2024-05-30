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

@include('layouts.temp')

@endsection