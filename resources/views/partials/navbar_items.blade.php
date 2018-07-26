<ul class="nav navbar-nav navbar-right">
    <li><a class="pagess" href="{{ url('/') }}">Acceuil</a></li>
    <li>
        <a class="pagess" href="#">A Propos</a>
        <ul class="sub-menu">
            <li><a href="{{ url('/about') }}">A Propos</a></li>
            <li><a href="{{ url('/team') }}">Èquipe</a></li>
            <li><a href="{{ url('/review') }}">Critique</a></li>
            <li><a href="{{ url('/faq') }}">FAQ</a></li>
        </ul>
    </li>
    <li>
        <a class="pagess" href="#">Services</a>
        <ul class="sub-menu">
            <li><a href="{{ url('/services') }}">Tout Services</a></li>
            @foreach($services as $service)
                <li><a href="{{ url('/' . $service->slug) }}">{{ $service->name }}</a></li>
            @endforeach
        </ul>
    </li>
    <li>
        <a class="pagess" href="#">Projets</a>
        <ul class="sub-menu">
            <li><a href="{{ url('/projects') }}">Tout Projets</a></li>
            <li><a href="{{ url('/project') }}">Single Project</a></li>
        </ul>
    </li>
    <li>
        <a class="pagess" href="#">Activités</a>
        <ul class="sub-menu">
            <li><a href="{{ url('/blog') }}">Toutes les activités</a></li>
        </ul>
    </li>
    <li><a href="{{ url('/contact') }}">Contact</a></li>
</ul>
