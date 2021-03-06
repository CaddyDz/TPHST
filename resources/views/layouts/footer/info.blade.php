<div class="col-md-3 col-sm-4 col-xs-12">
    <div class="footer-content">
        <div class="footer-head">
            <h4>Information</h4>
            <hr>
            <p>Vous pouvez nous contacter via:</p>
            <div class="footer-contacts">
                <p>
                    <span>Tel:</span> <a href="tel:{{ setting('phone_number') }}">{{ setting('phone_number') }}</a></p>
                <p>
                    <span>Email:</span> <a href="mailto:{{ setting('info_email') }}">{{ setting('info_email') }}</a></p>
                <p>
                    <span>Siége:</span> {{ setting('address') }}</p>
            </div>
            <div class="footer-icons">
                <ul>
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
</div>
