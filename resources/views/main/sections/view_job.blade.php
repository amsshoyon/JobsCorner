<div class="ftco-section bg-light">
        <div class="container">
            <div class="row">
    
                <div class="col-md-12 col-lg-8 mb-5">

                    <div class="p-5 bg-white">

                        <div class="row">
                            <p class="mb-0 font-weight-bold w-100">Job Title</p>
                            <p class="mb-4">{{ $job->title }}</p>
                        </div>
    
                        <div class="row">
                            <p class="mb-0 font-weight-bold w-100">Salary</p>
                            <p class="mb-4">{{ $job->salary }}</p>
                        </div>

                        <div class="row">
                            <p class="mb-0 font-weight-bold w-100">Location</p>
                            <p class="mb-4">{{ $job->location }}</p>
                        </div>
                        <div class="row">
                            <p class="mb-0 font-weight-bold w-100">Country</p>
                            <p class="mb-4">{{ $job->country }}</p>
                        </div>
                        <div class="row">
                            <p class="mb-0 font-weight-bold w-100">Description</p>
                            <p class="mb-4 pre">{{ $job->description }}</p>
                        </div>
                        <div class="row">
                            @can('isCandidate')
                            <a href="{{ url('/apply/'.$job->id) }}" class="btn btn-primary mr-2">Apply Job</a>
                            @endcan
                            @can('isCompany')

                                {!!Form::open(['route' => ['job.destroy', $job->id], 'method' =>
                                'DELETE'])!!}

                                {!! Html::decode(link_to_route('job.edit', 'Edit',[$job->id], ['class' => 'btn btn-info mr-2',
                                'title'=>'View/Edit'])) !!}

                                <button type="submit" class="btn btn-danger" onclick="return ConfirmDelete()">
                                    Delete
                                </button>

                                {!!Form::close()!!}
                            
                            @endcan
                        </div>
                    </div>
    
                </div>
    
                <div class="col-lg-4">
                    <div class="p-4 mb-3 bg-white">
                        <h3 class="h5 text-black mb-3">Contact Info</h3>
                        <p class="mb-0 font-weight-bold">Address</p>
                        <p class="mb-4">203 Fake St. Mountain View, San Francisco, California, USA</p>
    
                        <p class="mb-0 font-weight-bold">Phone</p>
                        <p class="mb-4"><a href="#">+1 232 3235 324</a></p>
    
                        <p class="mb-0 font-weight-bold">Email Address</p>
                        <p class="mb-0"><a href="#"><span class="__cf_email__"
                                    data-cfemail="671e081215020a060e0b2703080a060e094904080a">[email&#160;protected]</span></a>
                        </p>
    
                    </div>
    
                    <div class="p-4 mb-3 bg-white">
                        <h3 class="h5 text-black mb-3">More Info</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ad iure porro mollitia
                            architecto hic consequuntur. Distinctio nisi perferendis dolore, ipsa consectetur</p>
                        <p><a href="#" class="btn btn-primary  py-2 px-4">Learn More</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    