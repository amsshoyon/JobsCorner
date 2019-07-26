<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="/">{{ config('app.name', 'Laravel') }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item {{ Request::is('/') ? 'active' : '' }}"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
                <li class="nav-item {{ Request::is('about') ? 'active' : '' }}"><a href="{{ url('/about') }}" class="nav-link">About</a></li>

                @can('isCompany')
                <li class="nav-item {{ Request::is('candidates') ? 'active' : '' }}"><a href="{{ url('/candidates') }}" class="nav-link">Canditates</a></li>
                <li class="nav-item {{ Request::is('my_jobs') ? 'active' : '' }}"><a href="{{ url('/my_jobs') }}" class="nav-link">My Jobs</a></li>
                @endcan

                <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}"><a href="{{ url('/contact') }}" class="nav-link">Contact</a></li>

                @can('isCompany')
                <li class="nav-item cta mr-md-1"><a href="{{ url('/post_job') }}" class="nav-link">Post a Job</a></li>
                @endcan

                @can('isCandidate')
                <li class="nav-item cta cta-colored mr-md-1"><a href="{{ url('/get_job') }}" class="nav-link">Want a Job</a></li>
                @endcan

                <li class="nav-item cta ac dropdown">
                    <a href="#" class="nav-link dropdown-toggle"
                        data-toggle="dropdown">
                        <i class="fa fa-user"></i>
                    </a>
                    <ul class="dropdown-menu">
                        @auth
                            <li>{{ Auth::user()->firstname }}</li>
                            <li><a href="{{ url('/profile') }}">My Profile</a></li>
                            {{-- <li><a href="{{ url('/settings') }}">Settings</a></li> --}}
                            <li>
                                <a href="#" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        @else
                            <li>
                                <a href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li>
                                    <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @endcan
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
