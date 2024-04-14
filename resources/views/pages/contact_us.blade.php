<x-partials.layout>
    <div class="container-fluid p-0">
        <x-partials.navigation />

        <div class="container career-container">
            <h1 class="heading">CONTACT US</h1>
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <div class="container-fluid p-0">
                        <h4 class="text-secondary fw-bold">Let the ad-venture begin! Drop by to say hello to Gin & Tonic!</h4>
                        <span class="text-secondary fw-light mb-4">Send us a message and we will get back to you as soon as we can :)</span>
                        <div class="row mb-3 mt-4">
                            <div class="col-sm-6">
                                <label class="col-form-label fw-normal">First Name</label>
                                <input type="text" class="form-control" value="" placeholder="First Name">
                            </div>

                            <div class="col-sm-6">
                                <label class="col-form-label fw-normal">Last Name</label>
                                <input type="text" class="form-control" value="" placeholder="Last Name">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-normal">Email</label>
                        <input type="email" class="form-control" placeholder="Enter Email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-normal">Phone number</label>
                        <input type="text" class="form-control" placeholder="+91">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-normal">Subject</label>
                        <input type="text" class="form-control" placeholder="Subject">
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-normal">Message</label>
                        <textarea class="form-control" placeholder="Leave a message here" style="height: 100px"></textarea>
                    </div>
                    <div class="my-5 text-center">
                        <button class="custom-btn" aria-label="Send Message">
                            <div class="">Send Message</div>
                        </button>
                    </div>
                </div>

                <div class="d-sm-none d-lg-block col-sm-12 col-lg-6 text-center">
                    <img src="{{ asset('assets/contact_1.png') }}" class="carrer-top-image" alt="career_image">
                </div>
            </div>
        </div>

        <div class="container career-bottom-section">
            <div class="row">
                <div class="col-lg-5 col-sm-12">
                    <img src="{{asset('assets/contact_2.png')}}" class="img-fluid career-bottom-image d-sm-none d-lg-block" alt="career-image">
                </div>
                <div class="col-lg-7 col-sm-12 d-flex align-items-center">
                    <div class="content mb-3">
                        <p class="fw-light text-secondary" style="margin-right: 50px;"><span><i class="fa fa-map-marker" aria-hidden="true"></i></span>&nbsp; <span>2nd Floor, 4th North Avenue, Maker Maxity, Bandra Kurla Complex, Mumbai, Maharashtra 400051</span></p>
                        <p class="fw-light text-secondary" style="margin-right: 50px;"><span><i class="fa fa-phone" aria-hidden="true"></i></span>&nbsp; <span>02235554000</span></p>
                        <p class="fw-light text-secondary" style="margin-right: 50px;"><span><i class="fa fa-envelope" aria-hidden="true"></i></span>&nbsp; <span>akshat.bhagat@jiocreativelabs.com</span></p>
                    </div>
                </div>

           
            </div>
        </div>

        <x-partials.footer />
    </div>
</x-partials.layout>
