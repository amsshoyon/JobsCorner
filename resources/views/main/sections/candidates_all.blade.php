<section class="ftco-section ftco-candidates ftco-candidates-2 bg-light">
    <div class="container">
        <div class="row">

            @foreach($jobs as $job)
            @foreach($job->Application as $Applied)
            <div class="col-md-6">
                <div class="team d-md-flex">
                    <div class="img"
                        style="background-image: url('{{ asset('images/user/'.$Applied->User->image) }}');"></div>
                    <div class="text pl-md-4">
                        <span class="location mb-0"><strong>Job Title:</strong> {{ $Applied->Job->title }}</span>
                        <h2>{{ $Applied->User->firstname }} {{ $Applied->User->lastname }}</h2>
                        <span class="position">{{ $Applied->User->email }}</span>
                        <p>Skills: {{ $Applied->User->skills }}</p>
                        <span class="seen">Applied {{ $Applied->created_at->diffForHumans() }}</span>
                        <p>

                            {!!Form::open(['action' => 'JobController@shortlist','method' =>
                            'POST','class'=>'shortlist_form'])!!}
							<input type="hidden" name="application_id" value="{{ $Applied->id }}">
                            @if($Applied->shortlist == 0)
                            <input type="submit" class="btn btn-primary" value="Shortlist">
                            @else
                            <input type="submit" class="btn btn-success" value="Shortlisted">
                            @endif
                            {!! Form::close() !!}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
            @endforeach

        </div>
        {{-- <div class="row mt-5">
            <div class="col text-center">
                <div class="block-27">
                    <ul>
                        <li><a href="#">&lt;</a></li>
                        <li class="active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&gt;</a></li>
                    </ul>
                </div>
            </div>
        </div> --}}
    </div>
</section>
