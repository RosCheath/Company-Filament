@extends('layouts.master')
@section('content')
    @section('title','-> About Us')
    <!-- Page Header Start -->
    <div
        class="container-fluid page-header py-5 mb-5 wow fadeIn"
        @foreach($about_carousel as $ac)
            @if($ac->image === 'https://www.industrialempathy.com/img/remote/ZiClJf-1920w.jpg')
                style="background: linear-gradient(rgba(0, 0, 0, .65), rgba(0, 0, 0, .65)), url(https://www.industrialempathy.com/img/remote/ZiClJf-1920w.jpg) center center no-repeat;"
        @else
            style="background: linear-gradient(rgba(0, 0, 0, .65), rgba(0, 0, 0, .65)), url({{asset('storage/'. $ac->image)}}) center center no-repeat;"
        @endif
        @endforeach

        data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">About {{config('app.name')}}</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item">
                        <a class="text-white" href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a class="text-white" href="#">Pages</a>
                    </li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">
                        About
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- About Start -->
    @foreach($about_us as $au)

        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div
                            class="position-relative overflow-hidden ps-5 pt-5 h-100"
                            style="min-height: 400px"
                        >
                            <img
                                class="position-absolute w-100 h-100"
                                @if($au->image === 'https://www.industrialempathy.com/img/remote/ZiClJf-1920w.jpg')
                                    src="https://www.industrialempathy.com/img/remote/ZiClJf-1920w.jpg"
                                @else
                                    src="{{asset('storage/'. $au->image)}}"
                                @endif
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
                                    <h3 class="text-white">{{$au->detail}}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="h-100">
                            <div class="border-start border-5 border-primary ps-4 mb-5">
                                <h6 class="text-body text-uppercase mb-2">About Us</h6>
                                <h1 class="display-6 mb-0">
                                    {{$au->title}}
                                </h1>
                            </div>
                            <p>
                                {{$au->description}}
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
    @endforeach
    <!-- About End -->

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
                @foreach($about_team as $at)
                <div class="col-lg-4 col-md-6 wow fadeInUp"
                     data-wow-delay="0.{{2+$loop->index+3}}s">
                    <div class="team-item position-relative">
                        @if($at->image ==='https://www.industrialempathy.com/img/remote/ZiClJf-1920w.jpg')
                        <img class="img-fluid" src="{{$at->image}}" alt="" />
                        @else
                            <img class="img-fluid" src="{{asset('storage/') . $at->image}}" alt="" />
                        @endif
                        <div class="team-text bg-white p-4">
                            <h5>{{$at->name}}</h5>
                            <span>{{$at->position}}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Team End -->
@endsection

<style>

</style>
