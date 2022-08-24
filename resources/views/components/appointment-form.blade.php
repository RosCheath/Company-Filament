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
                <div class="col-lg-7 col-md-6 wow fadeIn" data-wow-delay="0.5s">
                    <form>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input
                                        type="text"
                                        class="form-control bg-dark border-0"
                                        id="gname"
                                        placeholder="Gurdian Name"
                                    />
                                    <label for="gname">Your Name</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input
                                        type="email"
                                        class="form-control bg-dark border-0"
                                        id="gmail"
                                        placeholder="Gurdian Email"
                                    />
                                    <label for="gmail">Your Email</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input
                                        type="text"
                                        class="form-control bg-dark border-0"
                                        id="cname"
                                        placeholder="Child Name"
                                    />
                                    <label for="cname">Your Mobile</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input
                                        type="text"
                                        class="form-control bg-dark border-0"
                                        id="cage"
                                        placeholder="Child Age"
                                    />
                                    <label for="cage">Service Type</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                    <textarea
                        class="form-control bg-dark border-0"
                        placeholder="Leave a message here"
                        id="message"
                        style="height: 100px"
                    ></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">
                                    Get Appointment
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->
</div>
