@extends('layouts.app')

@section('content')
@include('layouts.header')
@include('partials.slider')
<div class="banner-area">
    <div class="container">
        @include('partials.banner')
    </div>
</div>
@include('services.services_showcase')
@include('partials.stats')
@include('partials.about')
@include('partials.services')
@include('partials.portfolio')
@include('partials.blog')
@include('partials.testimonies')
@include('partials.clients')
@stop
