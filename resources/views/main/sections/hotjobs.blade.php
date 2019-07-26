<section class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 pr-lg-5">
                <div class="row justify-content-center pb-3">
                    <div class="col-md-12 heading-section ftco-animate">
                        <span class="subheading">Recently Added Jobs</span>
                        <h2 class="mb-4">Hot Jobs</h2>
                    </div>
                </div>
                <div class="row">
                    {{-- ---------------------------- --}}
                    {{-- jobs --}}
                    {{-- ---------------------------- --}}
                    @foreach($alljobs->take(15) as $job)
                    <div class="col-md-12 ftco-animate">
                        <div class="job-post-item py-4 d-block d-lg-flex align-items-center">
                            <div class="one-third mb-4 mb-md-0">
                                <div class="job-post-item-header d-flex align-items-center">
                                    <h2 class="mr-3 text-black">
                                        <a href="{{ url('/view_job/'.$job->id) }}">
                                            {{ $job->title }}
                                        </a>
                                    </h2>
                                </div>
                                <div class="job-post-item-body d-block d-md-flex">
                                    <div class="mr-3"><span class="icon-layers"></span>{{ $job->location }}</div>
                                    <div><span class="icon-my_location"></span> <span>{{ $job->country }}</span></div>
                                </div>
                            </div>

                            <div class="one-forth ml-auto d-flex align-items-center mt-4 md-md-0">
                                
                                <a href="{{ url('/view_job/'.$job->id) }}" class="btn btn-primary btn-sm mr-2">View Job</a>
                                

                                @can('isCandidate')
                                    @if($job->Application->contains('user_id', Auth::user()->id) )
                                        <p  class="btn btn-primary btn-sm">Applied</p>
                                    @else
                                    <a href="{{ url('/apply/'.$job->id) }}" class="btn btn-primary btn-sm">Apply Job</a>
                                    @endif
                                @endcan 

                            </div>
                        </div>
                    </div><!-- end -->
                    @endforeach

                </div>
            </div>
            <div class="col-lg-3 sidebar">
                <div class="row justify-content-center pb-3">
                    <div class="col-md-12 heading-section ftco-animate">
                        <span class="subheading">Recruitment agencies</span>
                        <h2 class="mb-4">Top Recruitments</h2>
                    </div>
                </div>

                @foreach($companies->take(10) as $company)
                <div class="sidebar-box ftco-animate">
                    <div class="border">
                        {{-- <a href="#" class="company-wrap"><img src="images/company-1.jpg" class="img-fluid"
                                alt="Colorlib Free Template"></a> --}}
                        <div class="text p-3">
                            <h3><a href="#">{{ $company->business_name }}</a></h3>
                            <p><span class="number">{{ count($company->Job) }}</span> <span>Job posted</span></p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>
