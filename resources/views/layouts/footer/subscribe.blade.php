<div class="col-md-3 col-sm-4 col-xs-12">
    <div class="footer-content">
        <div class="footer-head">
            <h4>Abonner</h4>
            <hr>
            <p>
                Vous recherchez des services de construction professionnels pour votre nouvelle maison? Vous recherchez des services de construction professionnels pour la maison de vos rêves?
            </p>
            <div class="subs-feilds">
                <div class="suscribe-input">
                    <form action="{{ route('subscribe') }}" method="POST">
                        @csrf
                        <input type="email" class="email form-control width-80" id="sus_email" placeholder="Tapez Email" name="email" required>
                        <button type="submit" id="sus_submit" class="add-btn">Abonner</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
