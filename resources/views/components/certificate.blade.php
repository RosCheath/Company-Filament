<div>
    <!-- certificate Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-end mb-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="border-start border-5 border-primary ps-4">
                        <h6 class="text-body text-uppercase mb-2">Our Certificate</h6>
                        <h1 class="display-6 mb-0">Our Certificate We Have</h1>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                @foreach($certificate as $c)
                    <div class="col-lg-4 col-md-6 wow fadeInUp"
                         data-wow-delay="0.{{2+$loop->index+3}}s"
                    >
                        <div class="team-item position-relative">
                            <img class="img-fluid" src="{{asset('storage/'. $c->image)}}" alt=""/>
{{--                            <div class="team-text bg-white p-4">--}}
{{--                                <h5>{{$c->name}}</h5>--}}
{{--                                <span>{{$c->title}}</span>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- certificate End -->
</div>
