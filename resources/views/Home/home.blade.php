@extends('layouts.master')
@section('content')
    @section('title','-> Home')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach($carousel as $carousels)
                    @if ($loop->index == 0)
                        <div class="carousel-item active">
                            @if($carousels->image === 'https://www.industrialempathy.com/img/remote/ZiClJf-1920w.jpg')
                                <img class="w-100" src="{{$carousels->image}}" alt="Image"/>
                            @else
                                <img class="w-100" src="{{asset('storage/'. $carousels->image)}}" alt="Image"/>
                            @endif
                            <div class="carousel-caption">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-12 col-lg-10">
                                            <h5
                                                class="text-light text-uppercase mb-3 animated slideInDown"
                                            >
                                                Welcome to {{config('app.name')}}
                                            </h5>
                                            <h1 class="display-2 text-light mb-3 animated slideInDown">
                                                {{$carousels->title}}
                                            </h1>
                                            <ol class="breadcrumb mb-4 pb-2">
                                                <li class="breadcrumb-item fs-5 text-light">
                                                    Commercial
                                                </li>
                                                <li class="breadcrumb-item fs-5 text-light">
                                                    Residential
                                                </li>
                                                <li class="breadcrumb-item fs-5 text-light">
                                                    Industrial
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="carousel-item">
                            @if($carousels->image === 'https://www.industrialempathy.com/img/remote/ZiClJf-1920w.jpg')
                                <img class="w-100" src="{{$carousels->image}}" alt="Image"/>
                            @else
                                <img class="w-100" src="{{asset('storage/'. $carousels->image)}}" alt="Image"/>
                            @endif
                            <div class="carousel-caption">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-12 col-lg-10">
                                            <h5
                                                class="text-light text-uppercase mb-3 animated slideInDown"
                                            >
                                                Welcome to Apex
                                            </h5>
                                            <h1 class="display-2 text-light mb-3 animated slideInDown">
                                                {{$carousels->title}}
                                            </h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#header-carousel"
                data-bs-slide="prev"
            >
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#header-carousel"
                data-bs-slide="next"
            >
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div
                        class="position-relative overflow-hidden ps-5 pt-5 h-100"
                        style="min-height: 400px"
                    >
                        @if($about_us->image === 'https://www.industrialempathy.com/img/remote/ZiClJf-1920w.jpg')
                            <img
                                class="position-absolute w-100 h-100"
                                src="{{$about_us->image}}"
                                alt=""
                                style="object-fit: cover"
                            />
                        @else
                            <img
                                class="position-absolute w-100 h-100"
                                src="{{asset('storage/'. $about_us->image)}}"
                                alt=""
                                style="object-fit: cover"
                            />
                        @endif

                        <div
                            class="position-absolute top-0 start-0 bg-white pe-3 pb-3"
                            style="width: 200px; height: 200px"
                        >
                            <div
                                class="d-flex flex-column justify-content-center text-center bg-warning h-100 p-3"
                            >
                                <h3 class="text-white">{{$about_us->detail}}</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <div class="border-start border-5 border-primary ps-4 mb-5">
                            <h6 class="text-body text-uppercase mb-2">About Us</h6>
                            <h1 class="display-6 mb-0">
                                {{$about_us->title}}
                            </h1>
                        </div>
                        <p>
                            {{$about_us->description}}
                        </p>
                        <div class="border-top mt-4 pt-4">
                            <div class="row g-4">
                                <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.1s">
                                    <i
                                        class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"
                                    ></i>
                                    <h6 class="mb-0">Ontime at services</h6>
                                </div>
                                <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.3s">
                                    <i
                                        class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"
                                    ></i>
                                    <h6 class="mb-0">24/7 hours services</h6>
                                </div>
                                <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.5s">
                                    <i
                                        class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"
                                    ></i>
                                    <h6 class="mb-0">Verified professionals</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Facts Start -->
    <div class="container-fluid my-5 p-0">
        <div class="row g-0">
            @foreach($HomeFeed as $hf)
                <div class="col-xl-3 col-sm-6 wow fadeIn" data-wow-delay="0.{{2+$loop->index+3}}s">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="{{asset('storage/' . $hf->image)}}" alt=""/>
                        <div class="facts-overlay">
                            <h1 class="display-1">0{{$loop->index+1}}</h1>
                            <h4 class="text-white mb-3">{{$hf->title}}</h4>
                            <p class="text-white line-clamp">
                                {{$hf->description}}
                            </p>
                            <a class="text-white small" href="{{route('feed.view',$hf->id)}}"
                            >READ MORE<i class="fa fa-arrow-right ms-3"></i
                                ></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- Facts End -->

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
                    <a class="btn btn-primary py-3 px-5" href="{{url('our/services')}}">More Services</a>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach($service as $s)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item bg-light overflow-hidden h-100">
                            <img class="img-fluid" src="{{asset('storage/'. $s->image)}}" alt=""/>
                            <div class="service-text position-relative text-center h-100 p-4">
                                <h5 class="mb-3">{{$s->title}}</h5>
                                <p>
                                    {{$s->description}}
                                </p>
                                <a class="small" href="{{route('service.view',$s->id)}}"
                                >READ MORE<i class="fa fa-arrow-right ms-3"></i
                                    ></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Service End -->

    <x-appointment-form></x-appointment-form>
    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-end mb-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="border-start border-5 border-primary ps-4">
                        <h6 class="text-body text-uppercase mb-2">Our Team</h6>
                        <h1 class="display-6 mb-0">Our Expert Worker</h1>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                @foreach($team as $t)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item position-relative">
                            @if($t->image === 'https://www.industrialempathy.com/img/remote/ZiClJf-1920w.jpg')
                                <img class="img-fluid" src="{{$t->image}}">
                            @else
                                <img class="img-fluid" src="{{asset('storage/'.$t->image)}}" alt=""/>
                            @endif
                            <div class="team-text bg-white p-4">
                                <h5>{{$t->name}}</h5>
                                <span>{{$t->position}}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="border-start border-5 border-primary ps-4 mb-5">
                        <h6 class="text-body text-uppercase mb-2">FOUNDERING</h6>
                        <h1 class="display-6 mb-0">This Is Founder of -> {{config('app.name')}}</h1>
                    </div>

                    <div class="border-start border-5 border-primary ps-4 mb-5">
                        <h6 class="text-body text-uppercase mb-2">Testimonial</h6>
                        <h1 class="display-6 mb-0">How Many Happy Clients!</h1>
                    </div>

                    <div class="row g-4">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fa fa-users fa-2x text-primary flex-shrink-0"></i>
                                <h1 class="ms-3 mb-0">{{$count_appoint}}+</h1>
                            </div>
                            <h5 class="mb-0">Happy Clients</h5>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fa fa-check fa-2x text-primary flex-shrink-0"></i>
                                <h1 class="ms-3 mb-0">{{$service_count}}+</h1>
                            </div>
                            <h5 class="mb-0">Service we have</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item">
                            <img
                                class="img-fluid mb-4"
                                src="{{asset('asset/img/testimonial-1.jpg')}}"
                                alt=""
                            />
                            <p class="fs-5">
                                Dolores sed duo clita tempor justo dolor et stet lorem kasd
                                labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy
                                et labore et tempor diam tempor erat.
                            </p>
                            <div
                                class="bg-primary mb-3"
                                style="width: 60px; height: 5px"
                            ></div>
                            <h5>Client Name</h5>
                            <span>Profession</span>
                        </div>
                        <div class="testimonial-item">
                            <img
                                class="img-fluid mb-4"
                                src="{{asset('asset/img/testimonial-2.jpg')}}"
                                alt=""
                            />
                            <p class="fs-5">
                                Dolores sed duo clita tempor justo dolor et stet lorem kasd
                                labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy
                                et labore et tempor diam tempor erat.
                            </p>
                            <div
                                class="bg-primary mb-3"
                                style="width: 60px; height: 5px"
                            ></div>
                            <h5>Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection
