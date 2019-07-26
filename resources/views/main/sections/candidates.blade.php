<section class="ftco-section ftco-candidates bg-primary">
    <div class="container">
        <div class="row justify-content-center pb-3">
            <div class="col-md-10 heading-section heading-section-white text-center ftco-animate">
                <span class="subheading">Candidates</span>
                <h2 class="mb-4">Latest Candidates</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 ftco-animate">
                <div class="carousel-candidates owl-carousel">


                    @foreach($allcandidates->take(15) as $candidate)
                    <div class="item">
                        <a href="#" class="team text-center">
                            @if($candidate->image)
                            <div class="img" style="background-image: url('{{ asset('images/user/'.$candidate->image) }}');"></div>
                            @else
                            <div class="img" style="background-image: url('{{ asset('images/avater.png') }}');"></div>
                            @endif
                            <h2>{{ $candidate->firstname }} {{ $candidate->lastname }}</h2>
                            {{-- <span class="position">Western City, UK</span> --}}
                        </a>
                    </div>
                    @endforeach
                   
                </div>
            </div>
        </div>
    </div>
</section>