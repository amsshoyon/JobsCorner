<div class="col-md-6">
        <div class="team d-md-flex">
            <div class="img"
                style="background-image: url('{{ asset('images/user/'.$Applied->User->image) }}');"></div>
            <div class="text pl-md-4">
                <span class="location mb-0"><strong>Job Title:</strong> {{ $Applied->Job->title }}</span>
                <h2>{{ $Applied->User->firstname }} {{ $Applied->User->lastname }}</h2>
                <span class="position"><a href="mailto:{{ $Applied->User->email }}" target="_blank">{{ $Applied->User->email }}</a></span>
                <p>Skills: {{ $Applied->User->skills }}</p>
                <span class="seen">Applied {{ $Applied->created_at->diffForHumans() }}</span>

                <p><a href="{{ asset('/resume/'.$Applied->User->Resume->resume) }}">Download Resume</a></p>
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