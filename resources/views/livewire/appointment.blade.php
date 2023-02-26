<div class="col-lg-7 col-md-6 wow fadeIn" data-wow-delay="0.5s">
    <form wire:submit.prevent="store">
        <div class="row g-3">
            @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{session('success')}}
                </div>
            @endif
            <div class="col-sm-6">
                <div class="form-floating">
                    <input
                        wire:model.lazy="name"
                        type="text"
                        class="form-control bg-dark border-0"
                        id="gname"
                        name="name"
                        placeholder="Gurdian Name"
                        required
                    />
                    <label for="gname">Your Name</label>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-floating">
                    <input
                        wire:model.lazy="email"
                        type="email"
                        class="form-control bg-dark border-0"
                        id="gmail"
                        name="email"
                        placeholder="Gurdian Email"
                        required
                    />
                    <label for="gmail">Your Email</label>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-floating">
                    <input
                        wire:model.lazy="phone"
                        type="text"
                        class="form-control bg-dark border-0"
                        id="cname"
                        name="phone"
                        placeholder="Child Name"
                        required
                    />
                    <label for="cname">Your Mobile</label>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-floating">
                    <select
                        class="form-control bg-dark border-0 cage"
                        wire:model.lazy="service_id"
                        name="service_id"
                        id="cage"
                        required
                    >
                        <option value="">Please select one</option>
                        @foreach($service as $s)
                            <option value="{{$s->id}}">{{$s->title}}</option>
                        @endforeach
                    </select>
                    <label for="cage">Service Type</label>
                </div>
            </div>
            <div class="col-12">
                <div class="form-floating">
                    <textarea
                        wire:model.lazy="message"
                        class="form-control bg-dark border-0"
                        placeholder="Leave a message here"
                        id="message"
                        name="message"
                        style="height: 100px"
                        required
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
