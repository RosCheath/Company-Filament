@extends('layouts.master')
@section('content')

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div
                        class="position-relative overflow-hidden ps-5 pt-5 h-100"
                        style="min-height: 500px"
                    >
                        <img
                            class="position-absolute w-100 h-100"
                            src="{{asset('storage/'. $feed->image)}}"
                            alt=""
                            style="object-fit: cover"
                        />
                    </div>
                </div>
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <div class="container-fluid">
                            <h1 class="display-6 mb-0" style="text-align: center;">
                                {{$feed->title}}
                            </h1>
                        </div>
                        <p style="" class="page-header">
                            {!! html_entity_decode($feed['description']) !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <x-feed-random></x-feed-random>
@endsection

<style>

</style>
