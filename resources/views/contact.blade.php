@extends('layouts.page')

@section('content')

@include('layouts.header.bottom', [
    'background' => image('Contact Background'),
    'headline' => __('Contact Us'),
    'title' => __('Contact Us'),
])
<!-- Start contact Area -->
<div class="contact-page area-padding">
    <div class="container">
        @include('contact.locations')
        @include('contact.form')
        <br>
        @include('contact.map')
    </div>
</div>
@stop
@env('production')
    @section('js')
        <!-- Google Map js -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9kOt-o-2NU7_pcjkGIj4f8cKPw_xinco"></script>
        <script src="/js/mapcode.js"></script>
    @stop
@endenv
