<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <span>Recipe</span>
        </a>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class='bx bx-menu'></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                <a class="nav-link" href="{{ url('/pencarian') }}">Product</a>
                <a class="nav-link" href="#">About</a>
            </div>
            <a href="#" class="btn btn-primary shadow-none">Get Started</a>
        </div>
    </div>
</nav>
