@extends('layouts.page')

@section('content')
@include('layouts.header.bottom', [
    'background' => $project->thumb,
    'headline' => __('Project Details'),
    'title' => $project->title
])

 <!-- Start Single Project -->
<!-- Start project Area -->
<div class="project-single area-padding">
  <div class="container">
      <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="project-inner project-carousel-2">
                  @foreach($images as $name => $url)
                    <div class="project-image">
                        <img src="{{ $url }}" alt="{{ $name }}">
                    </div>
                  @endforeach
              </div>
          </div>
          <!-- End Column -->
          <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="project-history">
                  <div class="project-name">
                      <ul>
                          <li>Projet: {{ $project->title }}</li>
                          <li><span>Categories</span> : {{ optional($project->category)->name }}</li>
                          <li>Date de démarrage: {{ optional($project->starting_date)->toDateString() }}</li>
                          <li>Date de finition: {{ optional($project->finishing_date)->toDateString() }}</li>
                          <li>Etat: {{ __($project->status) }}</li>
                      </ul>
                  </div>
              </div>
          </div>
          <!-- End Column -->
          <div class="col-md-8 col-sm-6 col-xs-12">
              <div class="project-details">
                  <h4>{{ $project->title }}</h4>
                  <p>{{ $project->description }}</p>
                  {{-- <div class="project-share">
                      <h5>Share :</h5>
                      <ul class="project-social">
                          <li>
                              <a href="#">
                                  <i class="fa fa-facebook"></i>
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                  <i class="fa fa-twitter"></i>
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                  <i class="fa fa-google"></i>
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                  <i class="fa fa-pinterest"></i>
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                  <i class="fa fa-instagram"></i>
                              </a>
                          </li>
                      </ul>
                  </div> --}}
              </div>
          </div>
      </div>
  </div>
  <!-- End main content -->
</div>
<!-- End portfolio Area -->
@stop
