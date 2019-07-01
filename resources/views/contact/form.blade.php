<div class="row mar-row">
    <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="contact-head">
            <h3>Demander
                <span class="color">Un Devis</span>
            </h3>
            <p></p>
            <div class="project-share">
                <h5>Sur Réseaux Sociaux</h5>
                <ul class="project-social">
                    <li>
                        <a href="skype:{{ setting('skype') }}">
                            <i class="fa fa-skype"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ setting('facebook') }}">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ setting('twitter') }}">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ setting('instagram') }}">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End contact icon -->
    <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="contact-form">
            <div class="row">
                <form id="contactForm" method="POST" action="{{ route('contact') }}" class="contact-form">
                    @csrf
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="name" class="form-control" placeholder="Nom" required data-error="S'il vous plaît entrez votre nom">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="email" class="email form-control" id="email" placeholder="Email" required data-error="S'il vous plaît entrer votre email">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <input type="text" id="msg_subject" class="form-control" placeholder="Sujet" required data-error="S'il vous plaît entrez votre sujet de message">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <textarea id="message" rows="7" placeholder="Message" class="form-control" required data-error="Écrivez votre message"></textarea>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <button type="submit" id="submit" class="contact-btn">Soumettres</button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End contact Form -->
</div>
