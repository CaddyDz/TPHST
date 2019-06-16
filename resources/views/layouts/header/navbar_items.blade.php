<ul class="nav navbar-nav navbar-right">
    <li><a class="pagess" href="{{ url('/') }}">Acceuil</a></li>
    <li>
        <a class="pagess" href="{{ route('about') }}">A Propos</a>
        <ul class="sub-menu">
            <li><a href="{{ route('about') }}">A Propos</a></li>
            <li><a href="{{ route('team') }}">Èquipe</a></li>
            <li><a href="{{ route('review') }}">Critique</a></li>
            <li><a href="{{ route('faq') }}">FAQ</a></li>
        </ul>
    </li>
    <li>
        <a class="pagess" href="{{ route('services') }}">Services</a>
        <ul class="sub-menu">
            <li><a href="{{ route('services') }}">Tout Services</a></li>
            @foreach($services as $service)
                <li>
                    <a href="{{ route('service', ['service' => $service]) }}">{{ $service->name }}</a>
                </li>
            @endforeach
        </ul>
    </li>
    <li>
        <a class="pagess" href="{{ route('projects') }}">Projets</a>
        <ul class="sub-menu">
            <li><a href="{{ route('projects') }}">Tout Projets</a></li>
            @foreach ($projects as $project)
                <li>
                    <a href="{{ route('project', ['project' => $project]) }}">
                        {{ $project->title }}
                    </a>
                </li>
            @endforeach
        </ul>
    </li>
    <li>
        <a class="pagess" href="{{ route('blog') }}">Activités</a>
        <ul class="sub-menu">
            <li><a href="{{ route('blog') }}">Toutes les activités</a></li>
        </ul>
    </li>
    <li><a href="{{ route('contact') }}">Contact</a></li>
</ul>
