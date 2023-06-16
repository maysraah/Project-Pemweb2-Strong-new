<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="{{ route('home.index') }}">Home</a>
                @php
                    if (Auth::user()->is_admin == 1) {
                @endphp
                    <a class="nav-link" aria-current="page" href="{{ route('admin.admin.index') }}">Admin</a>
                @php
                    }
                @endphp
                <a class="nav-link" href="#">Tentang</a>
            </div>
        </div>
        <div class="user me-3">
            Halo, {{ Auth::user()->nama }}
        </div>
        <div class="logout">
            <a href="{{ route('login.logout') }}" class="btn btn-danger">Logout</a>
        </div>
    </div>
</nav>