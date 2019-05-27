@extends('layouts.page') 
@section('content')
@include('layouts.header.bottom', [
    'background' => image('About Background'),
    'headline' => __('About Us'),
    'title' => __('About Us')
])
<!-- about-area start -->
@include('partials.about')
<!-- about-area end -->
<!-- Start About Area -->
@include('partials.stats')
<!-- End About Area -->
<!--Team Area Start-->
{{-- @include('partials.team') --}}
<!--End of Team Area-->
<!-- Start FAQ -->
{{-- @include('about.faq') --}}
@stop 
