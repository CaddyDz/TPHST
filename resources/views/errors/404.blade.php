@extends('layouts.page')

@section('content')
<!-- Start Bottom Header -->
<div class="page-area">
    <div class="breadcumb-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="breadcrumb text-center">
                    <div class="section-headline white-head text-center">
                        <h3>@lang('Error')</h3>
                    </div>
                    <ul>
                        <li class="home-bread">@lang('Home')</li>
                        <li>@lang('Error')</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Header -->
<!-- END Header -->
<div class="page-head area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="error-page">
                        <!-- map area -->
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="error-main-text text-center">
                                <h2 class="error-easy-text">@lang('Page Not Found')</h2>
                                <h1 class="high-text">4<span class="color">0</span>4</h1>
                                <h3 class="error-bot">@lang('Oops, the page you are looking for does not exist.')</h3>
                                <a  class="error-btn" href="/">@lang('Back Homepage')</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
