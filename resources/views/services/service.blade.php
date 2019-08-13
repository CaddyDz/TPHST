@extends('layouts.page')

@section('title', $service->name)

@section('content')
<div class="single-services-page area-padding">
  <div class="container">
      <div class="row">
          <div class="col-md-3 col-sm-4 col-xs-12">
              <div class="page-head-left">
                 {{-- start single area --}}
                  <div class="single-page-head">
                      <div class="left-menu">
                          <ul>
                              <li class="active">
                                <a href="{{ route('service', ['service' => $service]) }}">
                                  {{ $service->name }}
                                </a>
                              </li>
                              @foreach ($services as $service)
                                <li>
                                  <a href="{{ route('service', ['service' => $service]) }}">
                                    {{ $service->name }}
                                  </a>
                                </li>
                              @endforeach
                          </ul>
                      </div>
                  </div>
                  @if($service->brochures->isNotEmpty())
                  <div class="single-page-head">
                      <div class="download-btn">
                          <h4>@lang('Download Brochures')</h4>
                          <div class="about-btn">
                              @foreach ($service->brochures as $brochure)
                                <a href="{{ route('brochure', ['brochure' => $brochure, 'version' => 'pdf']) }}" class="down-btn"><i class="fa fa-file-pdf-o"></i>{{ $brochure->title }}.PDF</a>
                                <a href="{{ route('brochure', ['brochure' => $brochure, 'version' => 'word']) }}" class="down-btn"><i class="fa fa-file-word-o"></i>{{ $brochure->title }}.DOC</a>
                              @endforeach
                          </div>
                      </div>
                  </div>
                  @endif
                  @if($service->review)
                  {{-- start single area --}}
                  <div class="single-page-head">
                      <div class="clients-testi">
                          <div class="single-review text-center">
                              <div class="review-img ">
                                  <img src="{{ secure_asset($service->review->witnessAvatar) }}" alt="{{ $service->review->witness_name }}">
                              </div>
                              <div class="review-text">
                                  <p>{{ $service->review->body }}</p>
                                  <h4>{{ $service->review->witness_name }}</h4>
                              </div>
                          </div>
                      </div>
                  </div>
                  @endif
                  {{-- start single area --}}
                  <div class="single-page-head">
                      <div class="clients-support">
                          <div class="support-img">
                              <img src="{{ secure_asset('img/ser1.jpg') }}" alt="@lang('Online Support')">
                              <div class="support-text">
                                  <h4>@lang('Online Support')</h4>
                                  <a><i class="icon icon-phone"></i>{{ setting('phone_number') }}</a>
                                  <p>@lang('24 hours online support our customer.Do not hesitate to ask any questions')</p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          {{-- End left sidebar --}}
          {{-- Start service page --}}
          <div class="col-md-9 col-sm-8 col-xs-12">
              <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="single-page">
                          <div class="page-img elec-page">
                              <img src="{{ secure_asset($service->image) }}" alt="{{ $service->name }}">
                          </div>
                      </div>
                  </div>
                  {{-- start single page --}}
                  {{-- single-well end --}}
                  <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="single-well">
                          <a href="{{ route('service', ['service' => $service]) }}">
                              <h3>{{ $service->name }}</h3>
                          </a>
                          <p>{{ $service->description }}</p>
                      </div>
                  </div>
              </div>
              {{-- end Row --}}
              <div class="row mar-row">
                 <div class="col-md-6 col-sm-12 col-xs-12">
                      <div class="single-page">
                          <div class="page-img elec-page">
                              <img src="img/service/2.jpg" alt="">
                          </div>
                      </div>
                  </div>
                  <div class="col-md-6 col-sm-12 col-xs-12">
                      <div class="single-well">
                          <a href="#">
                              <h4>How to perfectly finished work</h4>
                          </a>
                          <p>When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines.</p>
                          <ul class="marker-list">
                              <li>Words is roughly being maintained</li>
                              <li>Letters or begins with a capital letter</li>
                              <li>Previous casing is maintained</li>
                              <li>Maintains the amount of lines</li>
                          </ul>
                      </div>
                  </div>
                  <!-- End single page -->
              </div>
              <!-- end Row -->
              <div class="row mar-row">
                  <!-- End single page -->
                  <div class="col-md-6 col-sm-12 col-xs-12">
                      <div class="single-well">
                          <a href="#">
                              <h4>Complete work & delivery project</h4>
                          </a>
                          <p>When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines.</p>
                          <ul class="marker-list">
                              <li>Words is roughly being maintained</li>
                              <li>Letters or begins with a capital letter</li>
                              <li>Previous casing is maintained</li>
                              <li>Maintains the amount of lines</li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-md-6 col-sm-12 col-xs-12">
                      <div class="single-page">
                          <div class="page-img elec-page">
                              <img src="img/service/3.jpg" alt="">
                          </div>
                      </div>
                  </div>
              </div>
              {{-- end Row --}}
          </div>
      </div>
  </div>
</div>
{{-- End page Area --}}
@stop
