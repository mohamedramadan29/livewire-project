@extends('front.layouts.master')

@section('about-active', 'active')

@section('content')
    <!-- Navbar & Hero Start -->
    <div class="p-0 container-xxl position-relative">

        @include('front.layouts._navbar')

        <div class="py-5 container-xxl bg-primary hero-header">
            <div class="container py-5 my-5 px-lg-5">
                <div class="py-5 row g-5">
                    <div class="text-center col-12">
                        <h1 class="text-white animated slideInDown">About Us</h1>
                        <hr class="mx-auto mt-0 bg-white" style="width: 90px;">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                                <li class="text-white breadcrumb-item active" aria-current="page">About</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Navbar & Hero End -->


<!-- Feature Start -->
<div class="py-5 container-xxl">
    <div class="container py-5 px-lg-5">
        <div class="row g-4">
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="p-4 text-center rounded feature-item bg-light">
                    <i class="mb-4 fa fa-3x fa-mail-bulk text-primary"></i>
                    <h5 class="mb-3">Digital Marketing</h5>
                    <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                </div>
            </div>
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="p-4 text-center rounded feature-item bg-light">
                    <i class="mb-4 fa fa-3x fa-search text-primary"></i>
                    <h5 class="mb-3">SEO & Backlinks</h5>
                    <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                </div>
            </div>
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="p-4 text-center rounded feature-item bg-light">
                    <i class="mb-4 fa fa-3x fa-laptop-code text-primary"></i>
                    <h5 class="mb-3">Design & Development</h5>
                    <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->


<!-- About Start -->
<div class="py-5 container-xxl">
    <div class="container py-5 px-lg-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <p class="section-title text-secondary">About Us<span></span></p>
                <h1 class="mb-5">#1 Digital solution with 10 years of experience</h1>
                <p class="mb-4">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo eirmod magna dolore erat amet</p>
                <div class="mb-4 skill">
                    <div class="d-flex justify-content-between">
                        <p class="mb-2">Digital Marketing</p>
                        <p class="mb-2">85%</p>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="mb-4 skill">
                    <div class="d-flex justify-content-between">
                        <p class="mb-2">SEO & Backlinks</p>
                        <p class="mb-2">90%</p>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="mb-4 skill">
                    <div class="d-flex justify-content-between">
                        <p class="mb-2">Design & Development</p>
                        <p class="mb-2">95%</p>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <a href="" class="mt-3 btn btn-primary py-sm-3 px-sm-5 rounded-pill">Read More</a>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="img/about.png">
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Facts Start -->
<div class="py-5 container-xxl bg-primary fact wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5 px-lg-5">
        <div class="row g-4">
            <div class="text-center col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                <i class="mb-3 fa fa-certificate fa-3x text-secondary"></i>
                <h1 class="mb-2 text-white" data-toggle="counter-up">1234</h1>
                <p class="mb-0 text-white">Years Experience</p>
            </div>
            <div class="text-center col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                <i class="mb-3 fa fa-users-cog fa-3x text-secondary"></i>
                <h1 class="mb-2 text-white" data-toggle="counter-up">1234</h1>
                <p class="mb-0 text-white">Team Members</p>
            </div>
            <div class="text-center col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                <i class="mb-3 fa fa-users fa-3x text-secondary"></i>
                <h1 class="mb-2 text-white" data-toggle="counter-up">1234</h1>
                <p class="mb-0 text-white">Satisfied Clients</p>
            </div>
            <div class="text-center col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                <i class="mb-3 fa fa-check fa-3x text-secondary"></i>
                <h1 class="mb-2 text-white" data-toggle="counter-up">1234</h1>
                <p class="mb-0 text-white">Compleate Projects</p>
            </div>
        </div>
    </div>
</div>
<!-- Facts End -->


<!-- Team Start -->
<div class="py-5 container-xxl">
    <div class="container py-5 px-lg-5">
        <div class="wow fadeInUp" data-wow-delay="0.1s">
            <p class="section-title text-secondary justify-content-center"><span></span>Our Team<span></span></p>
            <h1 class="mb-5 text-center">Our Team Members</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="rounded team-item bg-light">
                    <div class="p-4 text-center border-bottom">
                        <img class="mb-4 img-fluid rounded-circle" src="img/team-1.jpg" alt="">
                        <h5>John Doe</h5>
                        <span>CEO & Founder</span>
                    </div>
                    <div class="p-4 d-flex justify-content-center">
                        <a class="mx-1 btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="mx-1 btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                        <a class="mx-1 btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                        <a class="mx-1 btn btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="rounded team-item bg-light">
                    <div class="p-4 text-center border-bottom">
                        <img class="mb-4 img-fluid rounded-circle" src="img/team-2.jpg" alt="">
                        <h5>Jessica Brown</h5>
                        <span>Web Designer</span>
                    </div>
                    <div class="p-4 d-flex justify-content-center">
                        <a class="mx-1 btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="mx-1 btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                        <a class="mx-1 btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                        <a class="mx-1 btn btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="rounded team-item bg-light">
                    <div class="p-4 text-center border-bottom">
                        <img class="mb-4 img-fluid rounded-circle" src="img/team-3.jpg" alt="">
                        <h5>Tony Johnson</h5>
                        <span>SEO Expert</span>
                    </div>
                    <div class="p-4 d-flex justify-content-center">
                        <a class="mx-1 btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="mx-1 btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                        <a class="mx-1 btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                        <a class="mx-1 btn btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->

@endsection
