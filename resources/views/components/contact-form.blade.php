<div>
    <form action="{{route('contact.store')}}" method="POST">
        @csrf

        <div class="row g-3">
            @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{session('success')}}
                </div>
            @endif
            <div class="col-md-6">
                <div class="form-floating">
                    <input
                        type="text"
                        class="form-control border-0 bg-light"
                        id="name"
                        placeholder="Your Name"
                        name="name"
                        required
                    />
                    <label for="name">Your Name</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                    <input
                        type="email"
                        class="form-control border-0 bg-light"
                        id="email"
                        placeholder="Your Email"
                        name="email"
                        required
                    />
                    <label for="email">Your Email</label>
                </div>
            </div>
            <div class="col-12">
                <div class="form-floating">
                    <input
                        type="text"
                        class="form-control border-0 bg-light"
                        id="subject"
                        placeholder="Subject"
                        name="subject"
                    />
                    <label for="subject">Subject</label>
                </div>
            </div>
            <div class="col-12">
                <div class="form-floating">
                    <textarea
                        class="form-control border-0 bg-light"
                        placeholder="Leave a message here"
                        id="message"
                        style="height: 150px"
                        name="message"
                        required
                    ></textarea>
                    <label for="message">Message</label>
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary py-3 px-5" type="submit">
                    Send Message
                </button>
            </div>
        </div>
    </form>
</div>
