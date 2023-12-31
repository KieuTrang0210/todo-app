<nav class="navbar navbar-expand-lg fs-5">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/logo.png') }}" class="logo" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    @auth
                        <a class="nav-link active" aria-current="page" href="{{ route ('todos.index') }}">Home</a>
                    @else 
                        <a class="nav-link active" aria-current="page" href="{{ route ('home') }}">Home</a>
                    @endauth
                </li>
                @auth
                <li class="nav-item">
                    <a class="nav-link" id="logoutButton" href="#" data-bs-toggle="modal" data-bs-target="#logoutModal">Logout</a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route ('login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route ('registration') }}">Registration</a>
                </li>
                @endauth
            </ul>

            <span class="navbar-text">
                @auth
                    <i class="bi bi-person-circle"></i> {{auth()->user()->name}}
                @endauth
            </span>
        </div>
    </div>
</nav>
