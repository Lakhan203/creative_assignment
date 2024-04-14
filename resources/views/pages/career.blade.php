<x-partials.layout>
    <div class="container-fluid p-0">
        <x-partials.navigation />

        <div class="container career-container">
            <h1 class="heading">CAREERS</h1>
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <div class="container-fluid p-0">
                        <h4 class="text-secondary fw-bold">Well. If are MAD like us, hop on board</h4>
                        <span class="text-secondary fw-light mb-4">Get in Touch, Send us Your Profile for Opportunities ahead</span>
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
                        <label class="form-label fw-normal">Portfolio link</label>
                        <input type="text" class="form-control" placeholder="Your work link">
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-normal">Message</label>
                        <textarea class="form-control" placeholder="Leave a comment here" style="height: 100px"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-normal">Upload Resume</label>
                        <div class="file-upload">
                            <label class="button" for="upload"><i class="fa fa-cloud-upload" aria-hidden="true"
                                    style="font-size:25px"></i></label>
                            <p class="my-2 fw-light">Browse and choose the file you want top upload</p>
                            <p for="upload"><i class="fa fa-plus-square text-danger" aria-hidden="true"
                                    style="font-size:25px"></i></p>
                            <input id="upload" type="file" hidden>
                        </div>
                    </div>
                    <div class="my-5 text-center">
                        <button class="custom-btn" aria-label="Send Message">
                            <div class="">Send Message</div>
                        </button>
                    </div>
                </div>

                <div class="d-sm-none d-lg-block col-sm-12 col-lg-6 text-center">
                    <img src="{{ asset('assets/career_1.png') }}" class="carrer-top-image" alt="career_image">
                </div>
            </div>
        </div>

        <div class="container career-bottom-section">
            <div class="row">
                <div class="col-lg-5 col-sm-12">
                    <img src="{{asset('assets/career_2.png')}}" class="img-fluid career-bottom-image d-sm-none d-lg-block" alt="career-image">
                </div>
                <div class="col-lg-7 col-sm-12">
                    <div class="content mb-3">
                        <img src="{{asset('assets/career_coma_1.png')}}" class="img-fluid comma_1" alt="comma">
                        <p class="fw-normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit minus qui dolorem. Harum minus ducimus itaque. Neque sed minus pariatur ducimus. Laborum fuga dolorum eum nobis explicabo quia veniam aliquid!</p>
                        <p class="fw-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam blanditiis, dolor sit facilis tenetur adipisci!</p>
                        <p class="fw-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, porro.</p>
                        <img src="{{asset('assets/career_coma_2.png')}}" class="img-fluid comma_2" alt="comma">
                    </div>

                    <div class="my-5">
                        <div class="container-fluid">
                            <div class="row d-flex align-iteems-center justify-content-start">
                                <div class="col-sm-4 text-center align-middle">
                                    <img src="{{asset('assets/career_4_image.png')}}" class="img-fluid" alt="image" style="height: 120px;width:120px:object:fit:contain">
                                </div>
                                <div class="col-sm-6 mt-sm-3 text-start align-middle d-flex align-items-start flex-column  justify-content-center career-bottom-info">
                                    <h3 class="fw-bold">Lorem, ipsum.</h3>
                                    <p class="fw-semi-bold m-0">Lorem, ipsum.</p>
                                    <p class="fw-semi-bold m-0">Lorem, ipsum.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

           
            </div>
        </div>

        <x-partials.footer />
    </div>
</x-partials.layout>
