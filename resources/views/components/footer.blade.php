<div>
    <!-- Footer Start -->
    <div
        class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn"
        data-wow-delay="0.1s"
        style="background: linear-gradient(rgba(0, 0, 0, .65), rgba(0, 0, 0, .65)), url(https://www.industrialempathy.com/img/remote/ZiClJf-1920w.jpg) center center no-repeat;"
    >
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h1 class="text-white mb-4">
                        <img src="{{asset('logo_footer.png')}}">
                        {{config('app.name')}}
                    </h1>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Address</h4>
                    <p>
                        <i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA
                    </p>
                    <p><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p><i class="fa fa-envelope me-3"></i>info@example.com</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="{{url('/')}}">Home</a>
                    <a class="btn btn-link" href="{{url('about/us')}}">About Us</a>
                    <a class="btn btn-link" href="{{url('contact/us')}}">Contact Us</a>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Total Count</h4>
                    <a class="btn btn-link" href="{{url('our/services')}}">Our Services : {{$servic_count}} Service</a>
                    <a class="btn btn-link" href="{{url('new/feed')}}">New Feed : {{$feed_count}} Post </a>
                </div>
            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="{{url('/')}}">{{config('app.name')}}</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        Created By:
                        <a href="https://www.facebook.com/profile.php?id=100013670286692" target="_blank">Ros socheath</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

</div>