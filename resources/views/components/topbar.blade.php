<div>
    <!-- Topbar Start -->
    @foreach($topbar as $topbars)
        <div class="container-fluid bg-light p-0">
            <div class="row gx-0 d-none d-lg-flex">
                <div class="col-lg-7 px-5 text-start">
                    <div
                        class="h-100 d-inline-flex align-items-center border-start border-end px-3"
                    >
                        <small class="fa fa-phone-alt me-2"></small>
                        <small>{{$topbars->phone}}</small>
                    </div>
                    <div class="h-100 d-inline-flex align-items-center border-end px-3">
                        <small class="far fa-envelope-open me-2"></small>
                        <small>{{$topbars->email}}</small>
                    </div>
                    <div class="h-100 d-inline-flex align-items-center border-end px-3">
                        <small class="far fa-clock me-2"></small>
                        <small>{{$topbars->date_start}} - {{$topbars->date_end}} : {{$topbars->time_start}} AM
                            - {{$topbars->time_end}} PM</small>
                    </div>
                </div>
                <div class="col-lg-5 px-5 text-end">
                    <div class="h-100 d-inline-flex align-items-center">
                        <a class="btn btn-square border-end border-start" href="{{$topbars->facebook_link}}"
                        ><i class="fab fa-facebook-f"></i
                            ></a>
                        <a class="btn btn-square border-end" href="{{$topbars->telegram_link}}"
                        ><i class="fab fa-telegram"></i
                            ></a>
                        <a class="btn btn-square border-end" href="{{$topbars->wechat_link}}"
                        ><i class="fab fa-weixin"></i
                            ></a>
                        <a class="btn btn-square border-end" href="{{$topbars->line_link}}"
                        ><i class="fab fa-line"></i
                            ></a>

                        <a class="btn btn-square border-end" href="{{url('admin')}}"
                        ><i class="fas fa-user"></i
                            ></a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <!-- Topbar End -->

</div>
