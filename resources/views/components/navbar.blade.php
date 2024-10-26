<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand font-semibold" href="#">
            <img src="{{ asset('img/logo.png') }}" alt="" width="60">
            <span class="ms-3">Kelas <span style="color: #f6b737">TIK</span></span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/course') }}">Kursus</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Tentang</a>
                </li>
            </ul>
            <div>
                <a href="{{ url('/login') }}" class="btn btn-primary btn-signin">Masuk</a>
                <a href="{{ url('/register') }}" class="btn btn-outline-primary btn-signin">Daftar</a>
            </div>
        </div>
    </div>
</nav>
