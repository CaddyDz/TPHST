@extends('layouts.app')
<!-- Start top bar -->
<div class="topbar-area fix hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="topbar-left">
                    <p>@lang('Welcome to TPHST LLC')</p>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="topbar-right">
                    @include('layouts.header.social')
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End top bar -->
@include('layouts.header')
