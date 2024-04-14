<nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{route('home')}}"><img src="{{ asset('assets/logo.png') }}" alt=""
                class="img-fluid logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon d-flex justify-content-center align-items-center"><i class="fa fa-bars" aria-hidden="true"></i></span>
        </button>
        <div class="collapse navbar-collapse nav-menu " id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 pt-lg-0 pt-md-3 mb-lg-0">
                <li class="nav-item mx-1">
                    <a class="nav-link text-end" href="#">Services</a>
                </li>
                <li class="nav-item mx-1">
                    <a class="nav-link text-end" href="{{route('our-work')}}">Our Work</a>
                </li>
                <li class="nav-item mx-1">
                    <a class="nav-link text-end" href="{{route('career')}}">Career</a>
                </li>
                <li class="nav-item mx-1">
                    <a class="nav-link text-end" href="{{route('contact-us')}}">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
