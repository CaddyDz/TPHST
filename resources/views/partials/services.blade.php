<div class="services-area area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h3>@lang('Our Services')</h3>
                    <p>SARL TPHST est une entreprise qui a acquis son expertise au cours des 13 dernières années dans le domaine de travaux publics et hydraulique.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="services-all equal-columns-height">
                {{-- Start service --}}
                @foreach ($services as $service)
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-services">
                        <a class="service-images" href="{{ route('service', ['service' => $service]) }}">
                            <i class="flaticon-{{ $service->icon }}"></i>
                        </a>
                        <div class="service-content">
                            <h4>
                                <a href="{{ route('service', ['service' => $service]) }}">
                                    {{ $service->name }}
                                </a>
                            </h4>
                            <p>{{ $service->description }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
