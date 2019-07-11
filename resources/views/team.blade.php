@extends('layouts.page')

@section('title', __('Our Team'))

@section('content')

@include('layouts.header.bottom', [
    'background' => image('Team Background'),
    'headline' => __('Our Team'),
    'title' => __('Our Team'),
])

<!--Team Area Start-->
<div class="team-area area-padding">
    <div class="container">
        <div class="row">
            <div class="team-member team-member-page">
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="single-member">
                        <div class="team-img">
                        <a href="#">
                            <img src="/img/team/t1.jpg" alt="">
                        </a>
                        </div>
                        <div class="team-social">
                            <ul class="social-icon">
                                <li>
                                    <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a class="instagram" href="#"><i class="fa fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a class="instagram" href="#"><i class="fa fa-rss"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <div class="team-title">
                                <h4>Sid-Ali Kheniche</h4>
                                <h6>Gérant</h6>
                            </div>
                            <div class="team-share">
                                <div class="team-share">
                                    <p>Mot de Gérant</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End row -->
    </div>
</div>
<!--End of Team Area-->
@stop
