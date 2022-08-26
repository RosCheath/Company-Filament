<div>
    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-end mb-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="border-start border-5 border-primary ps-4">
                        <h6 class="text-body text-uppercase mb-2">Our Feed</h6>
                        <h1 class="display-6 mb-0">More Feeding</h1>
                    </div>
                </div>
            </div>
            <div class="container-fluid my-5 p-0">
                <div class="row g-0">
                    @foreach($RandonFeed as $hf)
                        <div class="col-xl-3 col-sm-6 wow fadeIn" data-wow-delay="0.{{2+$loop->index+3}}s">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="{{asset('storage/' . $hf->image)}}" alt=""/>
                                <div class="facts-overlay">
                                    <h1 class="display-1">0{{$loop->index+1}}</h1>
                                    <h4 class="text-white mb-3">{{$hf->title}}</h4>
                                    <p class="text-whit line-clamp">
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
        </div>

    </div>

    <!-- Team End -->
</div>
