<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
    <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Left Side Of Navbar -->
      <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="/about">O Nas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/services">Wykonawcy</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/posts">Zlecenia</a>
          </li>
      </ul>
      <!-- Right Side Of Navbar -->
      <ul class="navbar-nav ml-auto">
      <!-- Authentication Links -->
        @guest
          <li class="nav-link ">
            <a class="btn btn-warning" href="{{ route('login') }}" role="button">{{ __('Zaloguj') }}</a>
          </li>
        @if (Route::has('register'))
          <li class="nav-link">
            <a class="btn btn-danger" href="{{ route('register') }}" role="button">{{ __('Rejestracja') }}</a>
          </li>
          @endif
        @else
        <li class="dropdown nav-item">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>
            
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/dashboard">Panel</a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    {{ __('Wyloguj') }}
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