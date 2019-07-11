@extends('layouts.page')

@section('title', __('Services'))

@section('content')

@include('layouts.header.bottom', [
    'background' => image('About Background'),
    'headline' => __('All Services'),
    'title' => __('Services'),
])

@include('services.services_showcase')
@include('partials.services')

@stop
