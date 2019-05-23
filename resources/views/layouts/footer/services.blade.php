<div class="col-md-3 hidden-sm col-xs-12">
    <div class="footer-content">
        <div class="footer-head">
            <h4>Liens des services</h4>
            <hr>
            <ul class="footer-list">
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
</div>
