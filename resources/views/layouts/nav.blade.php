<nav class="navbar navbar-expand-md navbar-light navbar-laravel fixed-top">
    <div class="container">

{{-- LARAVEL HOMEButton --}}
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>

{{-- HOME BUTTON --}}
        <a class="navbar-brand" href="{{ url('/home') }}">
            <i class="fas fa-futbol"></i>
            Home
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
<!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

<!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">

<!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                <li class="nav-item">
                    @if (Route::has('register'))
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                </li>
            @else

            @if (Auth::user()->role == 'player')
            <li class="nav-item ">
                <a  class="nav-link" href="{{ route('match.index') }}" role="button"  aria-haspopup="true" aria-expanded="false" v-pre>
                    Matches <span class="caret"></span>
                </a>
            </li>
            @endif

            @if (Auth::user()->role == 'player')
            <li class="nav-item ">
                <a  class="nav-link" href="{{ route('team.index') }}" role="button"  aria-haspopup="true" aria-expanded="false" v-pre>
                    Teams <span class="caret"></span>
                </a>
            </li>
            @endif

{{-- LOGOUT DROPDOWN --}}
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->first_name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Salir') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
