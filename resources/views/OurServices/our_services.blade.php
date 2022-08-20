@extends('layouts.master')
@section('content')
    <!-- Page Header Start -->
    <div
        class="container-fluid page-header py-5 mb-5 wow fadeIn"
        data-wow-delay="0.1s"
    >
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">
                Our Services
            </h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item">
                        <a class="text-white" href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a class="text-white" href="#">Pages</a>
                    </li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">
                        Our Services
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-end mb-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="border-start border-5 border-primary ps-4">
                        <h6 class="text-body text-uppercase mb-2">Our Services</h6>
                        <h1 class="display-6 mb-0">
                            Construction And Renovation Solutions
                        </h1>
                    </div>
                </div>
                <div class="col-lg-6 text-lg-end wow fadeInUp" data-wow-delay="0.3s">
                    <a class="btn btn-primary py-3 px-5" href="">More Services</a>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light overflow-hidden h-100">
                        <img class="img-fluid" src="img/service-1.jpg" alt="" />
                        <div class="service-text position-relative text-center h-100 p-4">
                            <h5 class="mb-3">Building Construction</h5>
                            <p>
                                Tempor erat elitr rebum at clita dolor diam ipsum sit diam
                                amet diam et eos
                            </p>
                            <a class="small" href=""
                            >READ MORE<i class="fa fa-arrow-right ms-3"></i
                                ></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-light overflow-hidden h-100">
                        <img class="img-fluid" src="img/service-2.jpg" alt="" />
                        <div class="service-text position-relative text-center h-100 p-4">
                            <h5 class="mb-3">Home Maintainance</h5>
                            <p>
                                Tempor erat elitr rebum at clita dolor diam ipsum sit diam
                                amet diam et eos
                            </p>
                            <a class="small" href=""
                            >READ MORE<i class="fa fa-arrow-right ms-3"></i
                                ></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-light overflow-hidden h-100">
                        <img class="img-fluid" src="img/service-3.jpg" alt="" />
                        <div class="service-text position-relative text-center h-100 p-4">
                            <h5 class="mb-3">Renovation and Painting</h5>
                            <p>
                                Tempor erat elitr rebum at clita dolor diam ipsum sit diam
                                amet diam et eos
                            </p>
                            <a class="small" href=""
                            >READ MORE<i class="fa fa-arrow-right ms-3"></i
                                ></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light overflow-hidden h-100">
                        <img class="img-fluid" src="img/service-4.jpg" alt="" />
                        <div class="service-text position-relative text-center h-100 p-4">
                            <h5 class="mb-3">Wiring and installation</h5>
                            <p>
                                Tempor erat elitr rebum at clita dolor diam ipsum sit diam
                                amet diam et eos
                            </p>
                            <a class="small" href=""
                            >READ MORE<i class="fa fa-arrow-right ms-3"></i
                                ></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-light overflow-hidden h-100">
                        <img class="img-fluid" src="img/service-5.jpg" alt="" />
                        <div class="service-text position-relative text-center h-100 p-4">
                            <h5 class="mb-3">Tiling and Painting</h5>
                            <p>
                                Tempor erat elitr rebum at clita dolor diam ipsum sit diam
                                amet diam et eos
                            </p>
                            <a class="small" href=""
                            >READ MORE<i class="fa fa-arrow-right ms-3"></i
                                ></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-light overflow-hidden h-100">
                        <img class="img-fluid" src="img/service-6.jpg" alt="" />
                        <div class="service-text position-relative text-center h-100 p-4">
                            <h5 class="mb-3">Interior Design</h5>
                            <p>
                                Tempor erat elitr rebum at clita dolor diam ipsum sit diam
                                amet diam et eos
                            </p>
                            <a class="small" href=""
                            >READ MORE<i class="fa fa-arrow-right ms-3"></i
                                ></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
@endsection
