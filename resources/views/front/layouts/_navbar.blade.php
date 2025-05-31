<nav class="px-4 py-3 navbar navbar-expand-lg navbar-light px-lg-5 py-lg-0">
    <a href="" class="p-0 navbar-brand">
        <h1 class="m-0">DGital</h1>
        <!-- <img src="{{ asset('assets/front/') }}/img/logo.png" alt="Logo"> -->
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="py-0 mx-auto navbar-nav">
            <a href="{{ url('/') }}" class="nav-item nav-link @yield('home-active')">Home</a>
            <a href="{{ url('about') }}" class="nav-item nav-link @yield('about-active')">About</a>
            <a href="service.html" class="nav-item nav-link @yield('service-active')">Service</a>
            <a href="project.html" class="nav-item nav-link @yield('project-active')">Project</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="m-0 dropdown-menu">
                    <a href="team.html" class="dropdown-item">Our Team</a>
                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                    <a href="404.html" class="dropdown-item">404 Page</a>
                </div>
            </div>
            <a href="contact.html" class="nav-item nav-link @yield('contact-active')">Contact</a>
        </div>
        <a href="" class="px-4 py-2 btn rounded-pill ms-3 d-none d-lg-block">Get Started</a>
    </div>
</nav>
