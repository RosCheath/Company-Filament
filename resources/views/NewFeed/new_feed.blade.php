@extends('layouts.master')
@section('content')
    @section('title','-> New Feed')
    <!-- Page Header Start -->
    <div
        class="container-fluid page-header py-5 mb-5 wow fadeIn"
        style="background: linear-gradient(rgba(0, 0, 0, .65), rgba(0, 0, 0, .65)), url(https://www.industrialempathy.com/img/remote/ZiClJf-1920w.jpg) center center no-repeat;"
        data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">New Feed</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item">
                        <a class="text-white" href="{{url('/')}}">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a class="text-white" href="#">Pages</a>
                    </li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">
                        New Feed
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    @foreach ($feed as $feeds)
        @if ($loop->index %2 == 0)
            <!-- Features Start left -->
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="row g-5">
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="border-start border-5 border-primary ps-4 mb-5">
                                <h6 class="text-body text-uppercase mb-2">Why Choose Us!</h6>
                                <h1 class="display-6 mb-0">
                                    {{$feeds->title}}
                                </h1>
                            </div>
                            <p class="mb-5">
                                Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu
                                diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet
                                lorem sit clita duo justo magna dolore erat amet
                            </p>
                            <div class="row gy-5 gx-4">
                                <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                                    <div class="d-flex align-items-center mb-3">
                                        <i
                                            class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"
                                        ></i>
                                        <h6 class="mb-0">Large number of services provided</h6>
                                    </div>
                                    <span
                                    >Magna sea eos sit dolor, ipsum amet ipsum lorem diam</span
                                    >
                                </div>
                                <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                                    <div class="d-flex align-items-center mb-3">
                                        <i
                                            class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"
                                        ></i>
                                        <h6 class="mb-0">25+ years of professional experience</h6>
                                    </div>
                                    <span
                                    >Magna sea eos sit dolor, ipsum amet ipsum lorem diam</span
                                    >
                                </div>
                                <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                    <div class="d-flex align-items-center mb-3">
                                        <i
                                            class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"
                                        ></i>
                                        <h6 class="mb-0">A large number of grateful customers</h6>
                                    </div>
                                    <span
                                    >Magna sea eos sit dolor, ipsum amet ipsum lorem diam</span
                                    >
                                </div>
                                <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                                    <div class="d-flex align-items-center mb-3">
                                        <i
                                            class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"
                                        ></i>
                                        <h6 class="mb-0">Always reliable and affordable prices</h6>
                                    </div>
                                    <span
                                    >Magna sea eos sit dolor, ipsum amet ipsum lorem diam</span
                                    >
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div
                                class="position-relative overflow-hidden ps-5 pt-5 h-100"
                                style="min-height: 400px"
                            >
                                <img
                                    class="position-absolute w-100 h-100"
                                    src="{{asset('storage/'. $feeds->image)}}"
                                    alt=""
                                    style="object-fit: cover"
                                />
                                <div
                                    class="position-absolute top-0 start-0 bg-white pe-3 pb-3"
                                    style="width: 200px; height: 200px"
                                >
                                    <div
                                        class="d-flex flex-column justify-content-center text-center bg-primary h-100 p-3"
                                    >
                                        <h1 class="text-white">25</h1>
                                        <h2 class="text-white">Years</h2>
                                        <h5 class="text-white mb-0">Experience</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Features End -->
        @else
            <!-- Features Start right -->
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="row g-5">
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div
                                class="position-relative overflow-hidden ps-5 pt-5 h-100"
                                style="min-height: 400px"
                            >
                                <img
                                    class="position-absolute w-100 h-100"
                                    src="{{asset('storage/'. $feeds->image)}}"
                                    alt=""
                                    style="object-fit: cover"
                                />
                                <div
                                    class="position-absolute top-0 start-0 bg-white pe-3 pb-3"
                                    style="width: 200px; height: 200px"
                                >
                                    <div
                                        class="d-flex flex-column justify-content-center text-center bg-primary h-100 p-3"
                                    >
                                        <h1 class="text-white">25</h1>
                                        <h2 class="text-white">Years</h2>
                                        <h5 class="text-white mb-0">Experience</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="border-start border-5 border-primary ps-4 mb-5">
                                <h6 class="text-body text-uppercase mb-2">Why Choose Us!</h6>
                                <h1 class="display-6 mb-0">
                                    {{$feeds->title}}
                                </h1>
                            </div>
                            <p class="mb-5">
                                Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu
                                diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet
                                lorem sit clita duo justo magna dolore erat amet
                            </p>
                            <div class="row gy-5 gx-4">
                                <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                                    <div class="d-flex align-items-center mb-3">
                                        <i
                                            class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"
                                        ></i>
                                        <h6 class="mb-0">Large number of services provided</h6>
                                    </div>
                                    <span
                                    >Magna sea eos sit dolor, ipsum amet ipsum lorem diam</span
                                    >
                                </div>
                                <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                                    <div class="d-flex align-items-center mb-3">
                                        <i
                                            class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"
                                        ></i>
                                        <h6 class="mb-0">25+ years of professional experience</h6>
                                    </div>
                                    <span
                                    >Magna sea eos sit dolor, ipsum amet ipsum lorem diam</span
                                    >
                                </div>
                                <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                    <div class="d-flex align-items-center mb-3">
                                        <i
                                            class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"
                                        ></i>
                                        <h6 class="mb-0">A large number of grateful customers</h6>
                                    </div>
                                    <span
                                    >Magna sea eos sit dolor, ipsum amet ipsum lorem diam</span
                                    >
                                </div>
                                <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                                    <div class="d-flex align-items-center mb-3">
                                        <i
                                            class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"
                                        ></i>
                                        <h6 class="mb-0">Always reliable and affordable prices</h6>
                                    </div>
                                    <span
                                    >Magna sea eos sit dolor, ipsum amet ipsum lorem diam</span
                                    >
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Features End -->
        @endif
    @endforeach

@endsection
