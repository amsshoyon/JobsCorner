<div class="ftco-section bg-light">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-lg-8 mb-5 m-auto">
                @if(isset($job))
                {!! Form::model($job, ['method' => 'PUT', 'action' => ['JobController@update',$job->id]]) !!}
                @else
                {!!Form::open(['action' => 'JobController@store','method' => 'POST', 'class' => 'p-5 bg-white'])!!}
                @endif
                    <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                            {!! Form::label('title', 'Job Title') !!}
                            {{ Form::text('title',null,['value'=>'$job->title','id'=>'title','class'=>'form-control','required']) }}
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                            {!! Form::label('salary', 'Salary( BDT )') !!}
                            {{ Form::number('salary',null,['value'=>'$job->salary','id'=>'salary','class'=>'form-control','required']) }}
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                            {!! Form::label('location', 'Location') !!}
                            {{ Form::text('location',null,['value'=>'$job->location','id'=>'location','class'=>'form-control','required']) }}
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label class="font-weight-bold" for="country">country</label>
                            {!! Form::label('country', 'Country') !!}
                            {{ Form::text('country',null,['value'=>'$job->country','id'=>'country','class'=>'form-control','required']) }}
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                            {!! Form::label('description', 'Job Description') !!}
                            {{Form::textarea('description',null,['value'=>'$Product->description','id'=>'description','rows'=>'8', 'class' => 'form-control', 'required'])}}
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="submit" value="@if(isset($job)) Update @else Post @endif" class="btn btn-primary  py-2 px-5">
                        </div>
                    </div>


                {!! Form::close() !!}
            </div>

            {{-- <div class="col-lg-4">
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
            </div> --}}
        </div>
    </div>
</div>
