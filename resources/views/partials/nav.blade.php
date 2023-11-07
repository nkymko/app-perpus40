<nav class="navbar navbar-expand-lg p-3 sticky-top">
    <div class="container">
    <img src="{{ asset('img/SMKN40.png') }}" alt="Logo" width="50" class="d-inline-block align-text-top">
      <a class="navbar-brand fs-6 nav-typo mx-3" href="{{ route('home') }}">
        Sistem Informasi <br> <span class="fw-semibold">Perpustakaan 40</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ (Request::is('/') ? 'active' : '') }}" aria-current="page" href="{{ route('home') }}">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ (Request::is('book-catalog*') ? 'active' : '') }}" href="{{ route('book-catalog.index') }}">Katalog Buku</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}#panduan">Panduan</a>
          </li>
          @guest
          <li class="nav-item">
            <a class="nav-link btn-login" href="{{ route('login') }}">Masuk</a>
          </li>
          @else
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{ auth()->user()->nama }}</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('profile.show', auth()->user()->uuid) }}">Profil</a></li>
              <li><a class="dropdown-item" href="#" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>
            </ul>
          </li>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
          @endguest
        </ul>
      </div>
    </div>
</nav>