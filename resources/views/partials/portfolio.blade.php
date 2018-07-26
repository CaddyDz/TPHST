<div class="project-area area-padding" style="background: url('{{ setting('projects.background') }}')">
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
                @for ($i = 0; $i < 6; $i++)
                    <div class="project-single all-padding">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a class="venobox" data-gall="myGallery" href="img/project/p1.jpg">
                                    <img src="img/project/p1.jpg" alt="" />
                                </a>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                        <h4>Skyfal Tower</h4>
                                        <span>Las Vegas ,</span>
                                        <span>USA</span>
                                        <div class="project-btn">
                                            <a href="#">view project</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
</div>
