{{-- service area start --}}
@if($services->isNotEmpty())
<div class="welcome-area area-padding">
    <div class="container">
        <div class="row">
            <div class="well-main-services equal-columns-height">
                @foreach ($services->take(6) as $service)
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="well-services">
                            <div class="services-img">
                                <img src="{{ secure_asset($service->thumb) }}" alt="{{ $service->name }}">
                            </div>
                            <div class="main-services">
                                <div class="service-content">
                                    <h4>
                                        <a href="{{ route('service', ['service' => $service]) }}">
                                            {{ $service->name }}
                                        </a>
                                    </h4>
                                    <p>{{ $service->description }}</p>
                                    <a class="service-btn" href="{{ route('service', ['service' => $service]) }}">
                                        @lang('read more')
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                {{-- single-well end --}}
                @endforeach
            </div>
        </div>
    </div>
</div>
{{-- service-area end --}}
@endif
