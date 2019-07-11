@extends('layouts.app')

@section('title', __('Home'))

@section('content')
<header class="header-style-2">
  @include('layouts.header.topbar')
  @include('layouts.header.navbar')
  @include('layouts.header.mobile_navbar')
</header>
@include('partials.slider')
@include('partials.banner')
@include('services.services_showcase')
@include('partials.stats')
@include('partials.about')
@include('partials.services')
@include('partials.portfolio', ['projects' => $projects])
@include('partials.blog')
@include('partials.testimonies')
@includeIf($clients->isNotEmpty(), 'partials.clients')
@stop
