<section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="row justify-content-center pb-3">
                        <div class="col-md-12 heading-section ftco-animate">
                            @if(count($jobs) > 0 )
                            <span class="subheading">Recently Added Jobs</span>
                            @else
                            <span class="subheading">No Job Posted</span>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        {{-- ---------------------------- --}}
                        {{-- jobs --}}
                        {{-- ---------------------------- --}}
                        @foreach($jobs as $job)
                        <div class="col-md-12 ftco-animate">
                            <div class="job-post-item py-4 d-block d-lg-flex align-items-center">
                                <div class="one-third mb-4 mb-md-0">
                                    <div class="job-post-item-header d-flex align-items-center">
                                        <h2 class="mr-3 text-black">
                                            <a href="/view_job/{{ $job->id }}">{{ $job->title }}</a>
                                        </h2>
                                    </div>
                                    <div class="job-post-item-body d-block d-md-flex">
                                        <div class="mr-3">
                                            <span class="icon-layers"></span> 
                                            <a href="{{ url('/view_candidates/'.$job->id) }}"><span> {{ count($job->Application) }}</span> Applied </a>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="one-forth ml-auto d-flex align-items-center mt-4 md-md-0">
                                    <div class="d-flex justify-content-end align-items-center">
                                        <a href="" class="mr-2"><i class="fa fa-edit"></i></a>
                                        <a href=""><i class="fa fa-trash"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end -->
                        @endforeach

                    </div>
                </div>
              
            </div>
        </div>
    </section>
    