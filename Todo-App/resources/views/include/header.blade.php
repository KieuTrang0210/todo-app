<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/logo.png') }}" class="logo" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex gap-2 ms-auto">
                <a href="{{ route ('login.index') }}">
                    <button class="btn btn-outline-success" type="submit">Login</button>
                </a>
                <a href="{{ route ('registration.index') }}">
                    <button class="btn btn-outline-success" type="submit">Register</button>
                </a>  
            </div>
        </div>
    </div>
</nav>
