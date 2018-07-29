<div class="client-area area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="client-area">
                    <div class="clients-all brand-carousel">
                        @foreach ($clients as $client)
                            <div class="single-client">
                                <a href="{{ $client->link }}">
                                    <img src="{{ $client->logo }}" alt="{{ $client->name }}" width="165" height="165">
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
