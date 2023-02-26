<div>
    <!-- Appointment Start -->
    <div
        class="container-fluid appointment my-5 py-5 wow fadeIn"
        style="background: linear-gradient(rgba(0, 0, 0, .65), rgba(0, 0, 0, .65)), url({{asset('storage/'.$appointment_carousel->image)}}) center center no-repeat;"
        data-wow-delay="0.1s"
    >
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-5 col-md-6 wow fadeIn" data-wow-delay="0.3s">
                    <div class="border-start border-5 border-primary ps-4 mb-5">
                        <h6 class="text-white text-uppercase mb-2">Appointment</h6>
                        <h1 class="display-6 text-white mb-0">
                            A Company Involved In Service And Maintenance
                        </h1>
                    </div>
                    <p class="text-white mb-0">
                        Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu
                        diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet
                        lorem sit clita duo justo magna dolore erat amet
                    </p>
                </div>
                <livewire:appointment/>
            </div>
        </div>
    </div>
    <!-- Appointment End -->
</div>
