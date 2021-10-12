<nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background: #1C7947;">
    <div class="container-fluid">
        <a class="navbar-brand">
            <img src="../img/logo.png" alt="" class="logo">
            <div class="name">
                <h1>SALUS INSTITUTE OF TECHNOLOGY, INC.</h1>
                <p>CABULIJAN, TUBIGON, BOHOL</p>
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
            <form class="d-flex">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link box" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link box" href="{{ url('/about') }}">About Us</a>
                    </li>
                </ul>
                <ul class="navbar-nav me-auto ml-auto">
                    <li class="nav-item">
                        <a class="nav-link box" href="{{ url('/login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link box" href="{{ url('/register') }}">Register</a>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</nav>