@extends('layouts.master')
@section('content')
    @section('title','-> Our Service')
    <!-- Page Header Start -->
    <div
        class="container-fluid page-header py-5 mb-5 wow fadeIn"
        style="background: linear-gradient(rgba(0, 0, 0, .65), rgba(0, 0, 0, .65)), url(https://www.industrialempathy.com/img/remote/ZiClJf-1920w.jpg) center center no-repeat;"
        data-wow-delay="0.1s">
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
            </div>
            <div class="row g-4 justify-content-center">
                @foreach($servic as $s)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" href="">
                    <div class="service-item bg-light overflow-hidden h-100">
                        <img class="img-fluid" src="{{asset('storage/'.$s->image)}}" alt="" />
                        <div class="service-text position-relative text-center h-100 p-4">
                            <h5 class="mb-3">{{$s->title}}</h5>
                            <p>
                                {{$s->description}}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Service End -->
@endsection
