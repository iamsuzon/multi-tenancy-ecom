<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand text-uppercase" href="#">Landlord</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('index')}}">Home</a>
                </li>
            </ul>
            <form class="d-flex gap-3">
                @if(auth('web')->check())
                    <a class="nav-link" href="{{route('landlord.user.dashboard')}}">Dashboard</a>
                    <a class="nav-link" href="{{route('landlord.auth.logout')}}">Logout</a>
                @else
                    <a class="nav-link" href="{{route('landlord.auth.register')}}">Register</a>
                    <a class="nav-link" href="{{route('landlord.auth.login')}}">Login</a>
                @endif
            </form>
        </div>
    </div>
</nav>
