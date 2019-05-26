<div class="counter-area parallax-bg" data-stellar-background-ratio="0.6" style="background: rgba(0, 0, 0, 0) url('{{ secure_asset(image('Stats Background')) }}') no-repeat scroll top center / cover;">
    <div class="display-table">
        <div class="display-table-cell">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-10 col-xs-12">
                        <div class="counter-inner">
                            <h3>le succès en
                                <span class="color">chiffres</span>
                            </h3>
                        </div>
                        <div class="about-count">
                            <div class="fun-content">
                                <div class="fun_text">
                                    <span class="counter">
                                        {{ setting('stats_projects_finished') }}
                                    </span>
                                    <h5>Projets Realisé</h5>
                                </div>
                                {{-- fun_text --}}
                                <div class="fun_text">
                                    <span class="counter">
                                        {{ setting('stats_projects_running') }}
                                    </span>
                                    <h5>Projet actuel</h5>
                                </div>
                                {{-- fun_text --}}
                                <div class="fun_text">
                                    <span class="counter">
                                        {{ setting('stats_employees') }}
                                    </span>
                                    <h5>Total des employés</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
