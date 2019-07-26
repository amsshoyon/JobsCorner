<section class="ftco-section ftco-candidates ftco-candidates-2 bg-light">
    <div class="container">
        <div class="row">

            @if(isset($job))
                @foreach($job->Application as $Applied)
                    @include ('main.snippets.candidates')
                @endforeach
            @else
                @foreach($jobs as $job)
                    @foreach($job->Application as $Applied)
                        @include ('main.snippets.candidates')
                    @endforeach
                @endforeach
            @endif

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
