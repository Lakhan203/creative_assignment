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
                            <div class="col-sm-10">
                                <button class="custom-btn" aria-label="Read More">
                                    <div class="">Read More </div><img src="{{ asset('assets/vector.png') }}"
                                        class="img-fluid btn-image" height="15" width="15px" alt="">
                                </button>
                            </div>
                            <div class="col-sm-2">
                                <img src="{{ asset('assets/mouse.png') }}" class="img-fluid mouse" height="100"
                                    width="100" alt="mouse">
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <section class="section-four">
            <h1>Four one</h1>
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
