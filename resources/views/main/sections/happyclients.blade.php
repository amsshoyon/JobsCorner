<section class="ftco-section testimony-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <h2 class="mb-4">Happy Clients</h2>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel ftco-owl">

                    @foreach($companies->take(15) as $company)
                    <div class="item">
                        <div class="testimony-wrap py-4 pb-5">
                            @if($company->image)
                            <div class="user-img mb-4" style="background-image: url('{{ asset('images/user/'.$company->image) }}'); margin: 0 auto;">
                            @else
                            <div class="user-img mb-4" style="background-image: url('{{ asset('images/avater.png') }}'); margin: 0 auto;">
                            @endif
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                            </div>
                            <div class="text text-center">
                                <p class="mb-4">{{ $company->business_name }}</p>
                                <p class="name">{{ $company->firstname }} {{ $company->lastname }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
</section>