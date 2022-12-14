@extends('layouts.master')
@section('content')

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div
                        class="position-relative overflow-hidden ps-5 pt-5 h-100"
                        style="min-height: 500px">
                        <img
                            class="position-absolute w-100 h-100"
                            src="{{asset('storage/'. $service->image)}}"
                            alt=""
                            style="object-fit: cover"/>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <div class="border-start border-5 border-primary ps-4 mb-5">
                            <h6 class="text-body text-uppercase mb-2">Title Name</h6>
                            <h1 class="display-6 mb-0">
                                {{$service->title}}
                            </h1>
                        </div>
                        <p>
                            {!! html_entity_decode($service['description']) !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <x-service-random></x-service-random>
@endsection

<style>

</style>
