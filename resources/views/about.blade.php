@extends('layouts.page')

@section('title', __('About Us'))

@section('content')

@include('layouts.header.bottom', [
    'background' => image('About Background'),
    'headline' => __('About Us'),
    'title' => __('About Us'),
])
{{-- Header --}}
<br>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="section-headline text-center">
            <h3>@lang('Siége Sociale:')</h3>
            <p>@lang("Notre bureau d'étude et administration")</p>
        </div>
    </div>
</div>
{{-- Office Images --}}
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="project-inner project-carousel-2">
        @foreach($images as $image)
          <div class="project-image">
              <img src="{{ secure_asset('storage/' . $image->path) }}" alt="{{ $image->name }}">
          </div>
        @endforeach
    </div>
</div>
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
