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
    <img src="{{asset('storage/').$contact_us->contact_image}}">
    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                @foreach($shop_contact as $sc)
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row g-4 align-items-center">
                        <div class="col-sm-6">
                            <img class="img-fluid" src="{{asset('storage/'.$sc->image)}}" alt="" />
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
                    <p class="mb-4">
                        The contact form is currently inactive. Get a functional and
                        working contact form with Ajax & PHP in a few minutes. Just copy
                        and paste the files, add a little code and you're done.
                        <a href="https://htmlcodex.com/contact-form">Download Now</a>.
                    </p>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input
                                        type="text"
                                        class="form-control border-0 bg-light"
                                        id="name"
                                        placeholder="Your Name"
                                    />
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input
                                        type="email"
                                        class="form-control border-0 bg-light"
                                        id="email"
                                        placeholder="Your Email"
                                    />
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input
                                        type="text"
                                        class="form-control border-0 bg-light"
                                        id="subject"
                                        placeholder="Subject"
                                    />
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                    <textarea
                        class="form-control border-0 bg-light"
                        placeholder="Leave a message here"
                        id="message"
                        style="height: 150px"
                    ></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary py-3 px-5" type="submit">
                                    Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
