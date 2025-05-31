@extends('front.layouts.master')

@section('home-active', 'active')

@section('content')
    <!-- Navbar & Hero Start -->
    <div class="p-0 container-xxl position-relative">

        @include('front.layouts._navbar')

        <div class="container-xxl bg-primary hero-header">
            <div class="container px-lg-5">
                <div class="row g-5 align-items-end">
                    <div class="text-center col-lg-6 text-lg-start">
                        <h1 class="mb-4 text-white animated slideInDown">A Digital Agency Of Inteligents & Creative
                            People</h1>
                        <p class="pb-3 text-white animated slideInDown">Tempor rebum no at dolore lorem clita rebum
                            rebum ipsum rebum stet dolor sed justo kasd. Ut dolor sed magna dolor sea diam. Sit diam
                            sit justo amet ipsum vero ipsum clita lorem</p>
                        <a href=""
                            class="btn btn-secondary py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Read
                            More</a>
                        <a href="" class="btn btn-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Contact
                            Us</a>
                    </div>
                    <div class="text-center col-lg-6 text-lg-start">
                        <img class="img-fluid animated zoomIn" src="{{ asset('assets/front/') }}/img/hero.png"
                            alt="">
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
                        <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam
                            stet diam sed stet lorem.</p>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="p-4 text-center rounded feature-item bg-light">
                        <i class="mb-4 fa fa-3x fa-search text-primary"></i>
                        <h5 class="mb-3">SEO & Backlinks</h5>
                        <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam
                            stet diam sed stet lorem.</p>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="p-4 text-center rounded feature-item bg-light">
                        <i class="mb-4 fa fa-3x fa-laptop-code text-primary"></i>
                        <h5 class="mb-3">Design & Development</h5>
                        <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam
                            stet diam sed stet lorem.</p>
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
                    <p class="mb-4">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.
                        Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo eirmod magna
                        dolore erat amet</p>
                    <div class="mb-4 skill">
                        <div class="d-flex justify-content-between">
                            <p class="mb-2">Digital Marketing</p>
                            <p class="mb-2">85%</p>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="85" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="mb-4 skill">
                        <div class="d-flex justify-content-between">
                            <p class="mb-2">SEO & Backlinks</p>
                            <p class="mb-2">90%</p>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="mb-4 skill">
                        <div class="d-flex justify-content-between">
                            <p class="mb-2">Design & Development</p>
                            <p class="mb-2">95%</p>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="95" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                    <a href="" class="mt-3 btn btn-primary py-sm-3 px-sm-5 rounded-pill">Read More</a>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid wow zoomIn" data-wow-delay="0.5s"
                        src="{{ asset('assets/front/') }}/img/about.png">
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


    <!-- Service Start -->
    <div class="py-5 container-xxl">
        <div class="container py-5 px-lg-5">
            <div class="wow fadeInUp" data-wow-delay="0.1s">
                <p class="section-title text-secondary justify-content-center"><span></span>Our
                    Services<span></span></p>
                <h1 class="mb-5 text-center">What Solutions We Provide</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="text-center rounded service-item d-flex flex-column">
                        <div class="flex-shrink-0 service-icon">
                            <i class="fa fa-search fa-2x"></i>
                        </div>
                        <h5 class="mb-3">SEO Optimization</h5>
                        <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam
                            stet diam sed stet lorem.</p>
                        <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="text-center rounded service-item d-flex flex-column">
                        <div class="flex-shrink-0 service-icon">
                            <i class="fa fa-laptop-code fa-2x"></i>
                        </div>
                        <h5 class="mb-3">Web Design</h5>
                        <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam
                            stet diam sed stet lorem.</p>
                        <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="text-center rounded service-item d-flex flex-column">
                        <div class="flex-shrink-0 service-icon">
                            <i class="fab fa-facebook-f fa-2x"></i>
                        </div>
                        <h5 class="mb-3">Social Media Marketing</h5>
                        <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam
                            stet diam sed stet lorem.</p>
                        <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="text-center rounded service-item d-flex flex-column">
                        <div class="flex-shrink-0 service-icon">
                            <i class="fa fa-mail-bulk fa-2x"></i>
                        </div>
                        <h5 class="mb-3">Email Marketing</h5>
                        <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam
                            stet diam sed stet lorem.</p>
                        <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="text-center rounded service-item d-flex flex-column">
                        <div class="flex-shrink-0 service-icon">
                            <i class="fa fa-thumbs-up fa-2x"></i>
                        </div>
                        <h5 class="mb-3">PPC Advertising</h5>
                        <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam
                            stet diam sed stet lorem.</p>
                        <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="text-center rounded service-item d-flex flex-column">
                        <div class="flex-shrink-0 service-icon">
                            <i class="fab fa-android fa-2x"></i>
                        </div>
                        <h5 class="mb-3">App Development</h5>
                        <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam
                            stet diam sed stet lorem.</p>
                        <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Newsletter Start -->
    <div class="py-5 container-xxl bg-primary newsletter wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 px-lg-5">
            <div class="row justify-content-center">
                <div class="text-center col-lg-7">
                    <p class="text-white section-title justify-content-center"><span></span>Newsletter<span></span>
                    </p>
                    <h1 class="mb-4 text-center text-white">Stay Always In Touch</h1>
                    <p class="mb-4 text-white">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos
                        labore. Clita erat ipsum et lorem et sit sed stet lorem sit clita duo justo</p>
                    <div class="mt-3 position-relative w-100">
                        <input class="border-0 form-control rounded-pill w-100 ps-4 pe-5" type="text"
                            placeholder="Enter Your Email" style="height: 48px;">
                        <button type="button" class="top-0 mt-1 shadow-none btn position-absolute end-0 me-2"><i
                                class="fa fa-paper-plane text-primary fs-4"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->


    <!-- Projects Start -->
    <div class="py-5 container-xxl">
        <div class="container py-5 px-lg-5">
            <div class="wow fadeInUp" data-wow-delay="0.1s">
                <p class="section-title text-secondary justify-content-center"><span></span>Our
                    Projects<span></span></p>
                <h1 class="mb-5 text-center">Recently Completed Projects</h1>
            </div>
            <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
                <div class="text-center col-12">
                    <ul class="mb-5 list-inline" id="portfolio-flters">
                        <li class="mx-2 active" data-filter="*">All</li>
                        <li class="mx-2" data-filter=".first">Web Design</li>
                        <li class="mx-2" data-filter=".second">Graphic Design</li>
                    </ul>
                </div>
            </div>
            <div class="row g-4 portfolio-container">
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                    <div class="overflow-hidden rounded">
                        <div class="overflow-hidden position-relative">
                            <img class="img-fluid w-100" src="{{ asset('assets/front/') }}/img/portfolio-1.jpg"
                                alt="">
                            <div class="portfolio-overlay">
                                <a class="mx-1 btn btn-square btn-outline-light" href="img/portfolio-1.jpg"
                                    data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="mx-1 btn btn-square btn-outline-light" href=""><i
                                        class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="p-4 bg-light">
                            <p class="mb-2 text-primary fw-medium">UI / UX Design</p>
                            <h5 class="mb-0 lh-base">Digital Agency Website Design And Development</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.3s">
                    <div class="overflow-hidden rounded">
                        <div class="overflow-hidden position-relative">
                            <img class="img-fluid w-100" src="{{ asset('assets/front/') }}/img/portfolio-2.jpg"
                                alt="">
                            <div class="portfolio-overlay">
                                <a class="mx-1 btn btn-square btn-outline-light" href="img/portfolio-2.jpg"
                                    data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="mx-1 btn btn-square btn-outline-light" href=""><i
                                        class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="p-4 bg-light">
                            <p class="mb-2 text-primary fw-medium">UI / UX Design</p>
                            <h5 class="mb-0 lh-base">Digital Agency Website Design And Development</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.5s">
                    <div class="overflow-hidden rounded">
                        <div class="overflow-hidden position-relative">
                            <img class="img-fluid w-100" src="{{ asset('assets/front/') }}/img/portfolio-3.jpg"
                                alt="">
                            <div class="portfolio-overlay">
                                <a class="mx-1 btn btn-square btn-outline-light" href="img/portfolio-3.jpg"
                                    data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="mx-1 btn btn-square btn-outline-light" href=""><i
                                        class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="p-4 bg-light">
                            <p class="mb-2 text-primary fw-medium">UI / UX Design</p>
                            <h5 class="mb-0 lh-base">Digital Agency Website Design And Development</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.1s">
                    <div class="overflow-hidden rounded">
                        <div class="overflow-hidden position-relative">
                            <img class="img-fluid w-100" src="{{ asset('assets/front/') }}/img/portfolio-4.jpg"
                                alt="">
                            <div class="portfolio-overlay">
                                <a class="mx-1 btn btn-square btn-outline-light" href="img/portfolio-4.jpg"
                                    data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="mx-1 btn btn-square btn-outline-light" href=""><i
                                        class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="p-4 bg-light">
                            <p class="mb-2 text-primary fw-medium">UI / UX Design</p>
                            <h5 class="mb-0 lh-base">Digital Agency Website Design And Development</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.3s">
                    <div class="overflow-hidden rounded">
                        <div class="overflow-hidden position-relative">
                            <img class="img-fluid w-100" src="{{ asset('assets/front/') }}/img/portfolio-5.jpg"
                                alt="">
                            <div class="portfolio-overlay">
                                <a class="mx-1 btn btn-square btn-outline-light" href="img/portfolio-5.jpg"
                                    data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="mx-1 btn btn-square btn-outline-light" href=""><i
                                        class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="p-4 bg-light">
                            <p class="mb-2 text-primary fw-medium">UI / UX Design</p>
                            <h5 class="mb-0 lh-base">Digital Agency Website Design And Development</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.5s">
                    <div class="overflow-hidden rounded">
                        <div class="overflow-hidden position-relative">
                            <img class="img-fluid w-100" src="{{ asset('assets/front/') }}/img/portfolio-6.jpg"
                                alt="">
                            <div class="portfolio-overlay">
                                <a class="mx-1 btn btn-square btn-outline-light" href="img/portfolio-6.jpg"
                                    data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="mx-1 btn btn-square btn-outline-light" href=""><i
                                        class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="p-4 bg-light">
                            <p class="mb-2 text-primary fw-medium">UI / UX Design</p>
                            <h5 class="mb-0 lh-base">Digital Agency Website Design And Development</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Projects End -->


    <!-- Testimonial Start -->
    <div class="py-5 container-xxl wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 px-lg-5">
            <p class="section-title text-secondary justify-content-center"><span></span>Testimonial<span></span>
            </p>
            <h1 class="mb-5 text-center">What Say Our Clients!</h1>
            <div class="owl-carousel testimonial-carousel">
                <div class="my-4 rounded testimonial-item bg-light">
                    <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>Diam dolor
                        diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit sed stet lorem
                        sit clita duo justo.</p>
                    <div class="d-flex align-items-center">
                        <img class="flex-shrink-0 img-fluid rounded-circle"
                            src="{{ asset('assets/front/') }}/img/testimonial-1.jpg" style="width: 65px; height: 65px;">
                        <div class="ps-4">
                            <h5 class="mb-1">Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                </div>
                <div class="my-4 rounded testimonial-item bg-light">
                    <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>Diam dolor
                        diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit sed stet lorem
                        sit clita duo justo.</p>
                    <div class="d-flex align-items-center">
                        <img class="flex-shrink-0 img-fluid rounded-circle"
                            src="{{ asset('assets/front/') }}/img/testimonial-2.jpg" style="width: 65px; height: 65px;">
                        <div class="ps-4">
                            <h5 class="mb-1">Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                </div>
                <div class="my-4 rounded testimonial-item bg-light">
                    <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>Diam dolor
                        diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit sed stet lorem
                        sit clita duo justo.</p>
                    <div class="d-flex align-items-center">
                        <img class="flex-shrink-0 img-fluid rounded-circle"
                            src="{{ asset('assets/front/') }}/img/testimonial-3.jpg" style="width: 65px; height: 65px;">
                        <div class="ps-4">
                            <h5 class="mb-1">Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Team Start -->
    <div class="py-5 container-xxl">
        <div class="container py-5 px-lg-5">
            <div class="wow fadeInUp" data-wow-delay="0.1s">
                <p class="section-title text-secondary justify-content-center"><span></span>Our Team<span></span>
                </p>
                <h1 class="mb-5 text-center">Our Team Members</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="rounded team-item bg-light">
                        <div class="p-4 text-center border-bottom">
                            <img class="mb-4 img-fluid rounded-circle" src="{{ asset('assets/front/') }}/img/team-1.jpg"
                                alt="">
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
                            <img class="mb-4 img-fluid rounded-circle" src="{{ asset('assets/front/') }}/img/team-2.jpg"
                                alt="">
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
                            <img class="mb-4 img-fluid rounded-circle" src="{{ asset('assets/front/') }}/img/team-3.jpg"
                                alt="">
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
