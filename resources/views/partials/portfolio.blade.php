@if($projects->isNotEmpty())
<div class="project-area area-padding"
    style="background: url('{{ secure_asset('storage/'.image('Stats Background')) }}')">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline white-head text-center">
                    <h3>@lang('Nos Projets')</h3>
                    <p>
                        @lang("Le TPHST est un groupe d'ingénierie et d'entrepreneur général qui a acquis son expertise
                        au cours des treize dernières années.")
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
                            <a class="venobox" data-gall="myGallery" href="{{ $project->thumb }}">
                                <img src="{{ $project->thumb }}" alt="{{ $project->title }}" height="400" />
                            </a>
                            <div class="add-actions text-center">
                                <div class="project-dec">
                                    <h4>{{ $project->title }}</h4>
                                    <span>{{ $project->description }}</span>
                                    <span>{{ $project->location }}</span>
                                    <div class="project-btn">
                                        <a href="{{ route('project', ['project' => $project]) }}">
                                            @lang('Aperçu de projet')
                                        </a>
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
@endif
