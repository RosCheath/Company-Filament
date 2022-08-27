@extends('layouts.master')
@section('content')
    @section('title','-> New Feed')
    <!-- Page Header Start -->
    <div
        class="container-fluid page-header py-5 mb-5 wow fadeIn"
        @foreach($about_carousel as $ac)
            @if($ac->feed_image === 'https://www.industrialempathy.com/img/remote/ZiClJf-1920w.jpg')
                style="background: linear-gradient(rgba(0, 0, 0, .65), rgba(0, 0, 0, .65)), url({{$ac->feed_image}}) center center no-repeat;"
        @else
            style="background: linear-gradient(rgba(0, 0, 0, .65), rgba(0, 0, 0, .65)), url({{asset('storage/'. $ac->feed_image)}}) center center no-repeat;"
        @endif
        @endforeach
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
                            >
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp " data-wow-delay="0.1s">
                        <div class="border-start border-5 border-primary ps-4 mb-5">
                            <h1 class="display-6 mb-0">
                                <a href="{{route('feed.view',$feeds->id)}}">
                                    {{$feeds->title}}
                                </a>
                            </h1>
                        </div>
                        {{--                           {!! html_entity_decode($feeds['description']) !!}--}}
                        <p class="mb-5 line-clamp-feed">
                            {!! html_entity_decode($feeds['description']) !!}
                            {{--                            {{$feeds->description}}--}}
                            {{--                                . nl2br(htmlentities($_POST['textarea'])) .--}}
                        </p>
                    </div>

                </div>
            </div>
        </div>
        <!-- Features End -->
    @endforeach

@endsection

