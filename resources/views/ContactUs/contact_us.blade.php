@extends('layouts.master')
@section('content')
    @section('title','-> Contact Us')
    <!-- Page Header Start -->
    <div
        class="container-fluid page-header py-5 mb-5 wow fadeIn"
        style="background: linear-gradient(rgba(0, 0, 0, .65), rgba(0, 0, 0, .65)), url({{asset('storage/'. $contact_us->contact_image)}}) center center no-repeat;"
        data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">
                Contact Us
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
                        Contact Us
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                @foreach($shop_contact as $sc)
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="row g-4 align-items-center">
                            <div class="col-sm-6">
                                <img class="img-fluid" src="{{asset('storage/'.$sc->image)}}" alt=""/>
                            </div>
                            <div class="col-sm-6">
                                <h3 class="mb-0">{{$sc->name}}</h3>
                                <p>{{$sc->title}}</p>
                                <h6>Contact Details</h6>
                                <p>
                                    {{$sc->detail}}
                                </p>
                                <p class="mb-0">Call: +{{$sc->phone}}</p>
                                <p class="mb-0">Email: {{$sc->email}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 450px">
                    <div class="position-relative h-100">
                        <iframe
                            class="position-relative w-100 h-100"
                            src="{{$contact_us->map}}"
                            frameborder="0"
                            style="min-height: 450px; border: 0"
                            allowfullscreen=""
                            aria-hidden="false"
                            tabindex="0"
                        ></iframe>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="border-start border-5 border-primary ps-4 mb-5">
                        <h6 class="text-body text-uppercase mb-2">Contact Us</h6>
                        <h1 class="display-6 mb-0">
                            {{$contact_us->title}}
                        </h1>
                    </div>
                    <x-contact-form></x-contact-form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
