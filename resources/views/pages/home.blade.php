<x-partials.layout>
    <div class="main">
        <x-partials.navigation />
        <section class="section-one">
            <img src="{{ asset('assets/section_1_image.png') }}" class="img-fluid" alt="hero-section">
            <div class="hero-section"></div>
        </section>
        <section class="section-two">
            <div class="image-section animate__animated animate__bounce animate__slower animate__infinite infinite">
                <img src="{{ asset('assets/section_2_image.png') }}" class="front-section-image" alt="image">
            </div>
            <div class="marquee-section mt-5">
                <marquee height="110px" direction="right" behavior="scroll" scrollamount="30">
                    <img src="{{ asset('assets/section_2_background1.png') }}" class="marquee-image" alt="marquee">
                </marquee>
                <marquee height="110px" direction="left" behavior="scroll" scrollamount="30">
                    <img src="{{ asset('assets/section_2_background1.png') }}" class="marquee-image" alt="marquee">
                </marquee>
                <marquee height="110px" direction="right" behavior="scroll" scrollamount="30">
                    <img src="{{ asset('assets/section_2_background1.png') }}" class="marquee-image" alt="marquee">
                </marquee>
            </div>
            <div class="front-image"></div>
        </section>
        <section class="section-three">
            <div class="container">
                <div class="">
                    <div class="we-are">WE ARE <img src="{{ asset('assets/vector.png') }}" class="img-fluid"
                            alt=""></div>
                </div>
                <div class="slider">
                    <div class="slider-animation">
                        <div class="slide slide1">JIO CREATIVE LABS</div>
                        <div class="slide slide2">COMPOSERS</div>
                        <div class="slide slide3">INTERS</div>
                        <div class="slide slide4">WRITERS</div>
                        <div class="slide slide5">EDITORS</div>
                        <div class="slide slide6">INFLUNCERS</div>
                        <div class="slide slide7">WRITERS</div>
                        <div class="slide slide8">DIRECTORS</div>
                        <div class="slide slide9">MANGERS</div>
                    </div>
                </div>
                <div class="content">
                    <p>We're not just another agency-cum-production-house. In a nutshell, we're a full-service
                        powerhouse that lives and breathes marketing. From mainline advertising to digital wizardry,
                        from social media mastery to mind-blowing branded content, we've got you covered. We're even
                        dabbling in IPs, OTT shows, events, influencer outreach, and mind-boggling technology-driven
                        content. Trust us, we're everywhere! Think of us as your 360, one-stop-shop for all things
                        awesome. </p>

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12 col-lg-10">
                                <button class="custom-btn" aria-label="Read More">
                                    <div class="">Read More </div><img src="{{ asset('assets/vector.png') }}"
                                        class="img-fluid btn-image" height="15" width="15px" alt="">
                                </button>
                            </div>
                            <div class="col-sm-12 col-lg-2">
                                <img src="{{ asset('assets/mouse.png') }}"
                                    class="img-fluid mouse"
                                    id="mouse-rotate" height="100" width="100" alt="mouse">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-four">

            <div class="container">
                <h1 class="heading">We are the jack-of-all-trades & master of fun!</h1>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 section-four-image text-end">
                        <img src="{{asset('assets/section_3_image.png')}}" class="animate__animated animate__bounce animate__slower animate__infinite infinite" alt="image">
                    </div>
                    <div class="col-lg-6 section-content" id="scrolling-content">
                        <div class="content fadein">
                            <h1 class="heading">Mainline Advertising</h1>
                            <h4 class="sub-title">TV,Print,Radio,Brand,Strategy</h4>
                        </div>
                        <div class="content fadein">
                            <h1 class="heading">Fully Service Digital Agency</h1>
                            <h4 class="sub-title">Social Media,Performance,Management,ORM,Digital PR</h4>
                        </div>
                        <div class="content fadein">
                            <h1 class="heading">Production + Post Production</h1>
                            <h4 class="sub-title">In-house production capabilities and end-to-end post-production setup</h4>
                        </div>
                        <div class="content fadein">
                            <h1 class="heading">Ancillary Services</h1>
                            <h4 class="sub-title">Events, IPs, Branded Content, Web Shows, Tech-Driven Content, Personality Branding, Website Development & Maintenance, SEO/SEM</h4>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section class="section-five">
            <img src="{{asset('assets/section_5_background.png')}}" class="video-content" alt="">
        </section>
        <section class="section-six">
            <div class="container heading">
                <h1>RECOMMENDED BY</h1>
                <h1>THE BEST</h1>
            </div>
            <div class="container-fluid mt-5">
                <marquee height="100%" direction="left" behavior="scroll" scrollamount="10">
                    <div class="d-flex mx-5 brand-slider">
                        <img src="{{asset('assets/brand_1.png')}}" class="brand-image" alt="brand1" >
                        <img src="{{asset('assets/brand_2.png')}}" class="brand-image" alt="brand2" >
                        <img src="{{asset('assets/brand_3.png')}}" class="brand-image" alt="brand3" >
                        <img src="{{asset('assets/brand_4.png')}}" class="brand-image" alt="brand4" >
                        <img src="{{asset('assets/brand_5.png')}}" class="brand-image" alt="brand4" >
                        <img src="{{asset('assets/brand_6.png')}}" class="brand-image" alt="brand4" >
                        <img src="{{asset('assets/brand_1.png')}}" class="brand-image" alt="brand4" >
                        <img src="{{asset('assets/brand_2.png')}}" class="brand-image" alt="brand4" >
                        <img src="{{asset('assets/brand_3.png')}}" class="brand-image" alt="brand4" >
                        <img src="{{asset('assets/brand_4.png')}}" class="brand-image" alt="brand4" >
                        <img src="{{asset('assets/brand_1.png')}}" class="brand-image" alt="brand1" >
                        <img src="{{asset('assets/brand_2.png')}}" class="brand-image" alt="brand2" >
                        <img src="{{asset('assets/brand_3.png')}}" class="brand-image" alt="brand3" >
                        <img src="{{asset('assets/brand_4.png')}}" class="brand-image" alt="brand4" >
                        <img src="{{asset('assets/brand_5.png')}}" class="brand-image" alt="brand4" >
                        <img src="{{asset('assets/brand_6.png')}}" class="brand-image" alt="brand4" >
                        <img src="{{asset('assets/brand_1.png')}}" class="brand-image" alt="brand4" >
                        <img src="{{asset('assets/brand_2.png')}}" class="brand-image" alt="brand4" >
                        <img src="{{asset('assets/brand_3.png')}}" class="brand-image" alt="brand4" >
                        <img src="{{asset('assets/brand_4.png')}}" class="brand-image" alt="brand4" >
                    </div>
                </marquee>
            </div>

        </section>
        <section class="section-seven">
            <div class="container heading">
                <h1>What’s Going on!</h1>
                <h1>check out our latest Social posts</h1>
            </div>
            <br>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-3 my-2">
                        <img src="{{asset('assets/social_1.png')}}" class="img-fluid social-post" alt="social-media">
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-3 my-2">
                        <img src="{{asset('assets/social_2.png')}}" class="img-fluid social-post" alt="social-media">
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-3 my-2">
                        <img src="{{asset('assets/social_3.png')}}" class="img-fluid social-post" alt="social-media">
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-3 my-2">
                        <img src="{{asset('assets/social_4.png')}}" class="img-fluid social-post" alt="social-media">
                    </div>
                </div>
            </div>
            <div class="container text-secondary text-end fw-normal mt-3"><span class="">View More</span></div>
        </section>

        <section class="section-eight">
            <div class="container join-section">
                <h1 class="heading">JOIN THE BRANDWAGON</h1>
                <button class="custom-btn" aria-label="Let's do Business">
                    <div class="">Let's do Business</div>
                </button>
            </div>
        </section>

        {{-- <div class="container-fluid p-0 main">
        <section class="one">
            <h1>Page one</h1>
        </section>
        <section class="two">
            <h1>Two one</h1>
        </section>
        <section class="three">
            <h1>Three one</h1>
        </section>
        <section class="four">
            <h1>Four one</h1>
        </section>
        <section class="five">
            <!-- MAIN (Center website) -->
            <div class="mains">

                <div id="myBtnContainer mb-5">
                    <button class="btn active" onclick="filterSelection('all')"> Show all</button>
                    <button class="btn" onclick="filterSelection('nature')"> Nature</button>
                    <button class="btn" onclick="filterSelection('cars')"> Cars</button>
                    <button class="btn" onclick="filterSelection('people')"> People</button>
                </div>

                <!-- Portfolio Gallery Grid -->
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-6 column nature">
                            <div class="content">
                                <img src="https://images.unsplash.com/photo-1454496522488-7a8e488e8606?q=80&w=2076&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="Mountains" style="width:100%">
                                <h4>Mountains</h4>
                                <p>Lorem ipsum dolor..</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 column nature">
                            <div class="content">
                                <img src="https://plus.unsplash.com/premium_photo-1667544928728-ab4bfed4648c?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="Lights" style="width:100%">
                                <h4>Lights</h4>
                                <p>Lorem ipsum dolor..</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 column nature">
                            <div class="content">
                                <img src="https://images.unsplash.com/photo-1476231682828-37e571bc172f?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="Nature" style="width:100%">
                                <h4>Forest</h4>
                                <p>Lorem ipsum dolor..</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 column cars">
                            <div class="content">
                                <img src="https://images.unsplash.com/photo-1550745165-9bc0b252726f?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="Car" style="width:100%">
                                <h4>Retro</h4>
                                <p>Lorem ipsum dolor..</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 column cars">
                            <div class="content">
                                <img src="https://images.unsplash.com/photo-1498084393753-b411b2d26b34?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="Car" style="width:100%">
                                <h4>Fast</h4>
                                <p>Lorem ipsum dolor..</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 column cars">
                            <div class="content">
                                <img src="https://images.unsplash.com/photo-1695638720110-72b396c0915f?q=80&w=1964&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="Car" style="width:100%">
                                <h4>Classic</h4>
                                <p>Lorem ipsum dolor..</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 column people">
                            <div class="content">
                                <img src="https://images.unsplash.com/photo-1503454537195-1dcabb73ffb9?q=80&w=1972&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="Car" style="width:100%">
                                <h4>Girl</h4>
                                <p>Lorem ipsum dolor..</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 column people">
                            <div class="content">
                                <img src="https://images.unsplash.com/photo-1615109398623-88346a601842?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="Car" style="width:100%">
                                <h4>Man</h4>
                                <p>Lorem ipsum dolor..</p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- END MAIN -->
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="card">
                            <img src="https://images.unsplash.com/photo-1615109398623-88346a601842?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="Avatar" class="image">
                            <div class="overlay">
                                <div class="text">Hello World</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div> --}}
        <x-partials.footer />
    </div>
</x-partials.layout>
