{{-- service area start --}}
@if($services->count())
<div class="welcome-area area-padding">
    <div class="container">
        <div class="row">
            <div class="well-main-services">
                @foreach ($services as $service)
                {{-- single-well end --}}
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="well-services">
                        <div class="services-img">
                            <img src="{{ asset($service->image) }}" alt="{{ $service->name }}">
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
                @endforeach
            </div>
        </div>
    </div>
</div>
{{-- service-area end --}}
@endif
