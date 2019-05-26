@if ($testimonies->count() > 1)
<div class="testimonial-2-area area-padding" style="background: url('{{ secure_asset(image('Testimonies Background')) }}');">
    <div class="testi-overly"></div>
    <div class="display-table">
        <div class="display-table-cell">
            <div class="container">
                <div class="row">
                    {{-- Testimonials Part --}}
                    <div class="col-md-6 col-sm-8 col-xs-12">
                        <div class="review-area">
                            <div class="Reviews-content">
                                {{-- start testimonial carousel --}}
                                <div class="testimonial-carousel item-indicator">
                                    @foreach ($testimonies as $testimony)
                                    <div class="single-testimonial">
                                            <div class="testimonial-text">
                                                <p>{{ $testimony->body }}</p>
                                            </div>
                                            <div class="testimonial-img ">
                                                <img src="{{ $testimony->witnessAvatar }}" alt="{{ $testimony->witness_name }}">
                                                <div class="client-name">
                                                    <h4>{{ $testimony->witness_name }}</h4>
                                                    <span>{{ $testimony->witness_position }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- End single item --}}
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--End Testimonials Part --}}
                </div>
            </div>
        </div>
    </div>
</div>    
@endif
