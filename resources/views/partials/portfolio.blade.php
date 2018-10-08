<div class="project-area area-padding" style="background: url('{{ \Storage::url(setting('projects.background')) }}')">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline white-head text-center">
                    <h3>Nos Projets</h3>
                    <p>
                    Le TPHST est un groupe d'ingénierie et d'entrepreneur général qui a acquis son expertise au cours des treize dernières années.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="project-all">
                @foreach ($projects as $project)
                <div class="project-single all-padding">
                    <div class="single-awesome-project">
                        <div class="awesome-img">
                            @isset($project->image)
                            <a class="venobox" data-gall="myGallery" href="{{ \Storage::url($project->image) }}">
                                <img src="{{ \Storage::url($project->image) }}" alt="{{ $project->title }}" />
                            </a>
                            @endisset
                            <div class="add-actions text-center">
                                <div class="project-dec">
                                    <h4>{{ $project->title }}</h4>
                                    <span>{{ $project->description }}</span>
                                    <span>{{ $project->location }}</span>
                                    <div class="project-btn">
                                        <a href="#">@lang('Aperçu de projet')</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach 
            </div>
        </div>
    </div>
</div>
