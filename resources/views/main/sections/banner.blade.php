<div class="hero-wrap js-fullheight">
    <div class="overlay"></div>
    <div class="container-fluid px-0">
        <div class="row d-md-flex no-gutters slider-text align-items-end js-fullheight justify-content-end">
            <img class="one-third align-self-end order-md-last img-fluid" src="{{ asset('images/undraw_work_time_lhoj.svg') }}"
                alt="">
            <div class="one-forth d-flex align-items-center ftco-animate js-fullheight">
                <div class="text mt-5">
                    <p class="mb-4 mt-5 pt-5">We have <span class="number" data-number="200000">0</span> great job
                        offers you deserve!</p>
                    <h1 class="mb-5">Largets Job Site In The World</h1>

                    <div class="ftco-search">
                        <div class="row">
                            <div class="col-md-12 nav-link-wrap">
                                <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist"
                                    aria-orientation="vertical">

                                    @can('isCandidate')
                                    <a class="nav-link active mr-md-1" href="{{ url('/get_job') }}">Find a Job</a>
                                    @endcan

                                    @can('isCompany')
                                    <a class="nav-link active mr-md-1" href="{{ url('/candidates') }}">Find a
                                        Candidate</a>
                                    @endcan
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>