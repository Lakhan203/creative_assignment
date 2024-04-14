<x-partials.layout>
    <div class="container-fluid p-0">
        <x-partials.navigation />

        <div class="container work-container">
            <h1 class="heading">OUR WORKFOLIO</h1>
            <div class="container work">
                <div class="row">
                    <div class="dropdown-section mb-5">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 col-lg-4 mb-sm-2 mb-lg-0">
                                    <div class="dropdown">
                                        <div class="dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                          Type of Clients
                                        </div>
                                        <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" onclick="filterSelection('client1')">Client 1</a></li>
                                          <li><a class="dropdown-item" onclick="filterSelection('client2')">Client 2</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-4 mb-sm-2 mb-lg-0">
                                    <div class="dropdown">
                                        <div class="dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                          Type of Work
                                        </div>
                                        <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" onclick="filterSelection('work1')">Work 1</a></li>
                                          <li><a class="dropdown-item" onclick="filterSelection('work2')">Work 2</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-4 mb-sm-2 mb-lg-0 text-end all-projects"><a onclick="filterSelection('all')">All Projects</a></div>
            
                            </div>
                        </div>

                    </div>
         
                    <div class="col-lg-4 col-md-4 col-sm-6 column client1">
                        <div class="card">
                            <img src="{{asset('assets/portfolio.png')}}"
                                alt="Avatar" class="image">
                            <div class="overlay">
                                <div class="card-text">
                                    <div class="text-center card-image"><img src="{{asset('assets/footer_logo.png')}}" class="" alt="" style="height: 75px;height:75px;object-fit:contain"></div>
                                    <p class="card-heading">Lorem, ipsum dolor.</p>
                                    <p class="card-sub"><span>lorem ipsum</span>&nbsp;<span>&#x2022;lorem ipsum</span>&nbsp;<span>&#x2022;lorem ipsum</span></p>
                                    <p class="card-para">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio in hic explicabo laboriosam nesciunt accusantium eius nostrum, debitis veniam at quos totam, laborum aut quaerat quae ipsum minima necessitatibus incidunt?</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 column work1">
                        <div class="card">
                            <img src="{{asset('assets/portfolio.png')}}"
                                alt="Avatar" class="image">
                            <div class="overlay">
                                <div class="card-text">
                                    <div class="text-center card-image"><img src="{{asset('assets/footer_logo.png')}}" class="" alt="" style="height: 75px;height:75px;object-fit:contain"></div>
                                    <p class="card-heading">Lorem, ipsum dolor.</p>
                                    <p class="card-sub"><span>lorem ipsum</span>&nbsp;<span>&#x2022;lorem ipsum</span>&nbsp;<span>&#x2022;lorem ipsum</span></p>
                                    <p class="card-para">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio in hic explicabo laboriosam nesciunt accusantium eius nostrum, debitis veniam at quos totam, laborum aut quaerat quae ipsum minima necessitatibus incidunt?</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 column client1">
                        <div class="card">
                            <img src="{{asset('assets/portfolio.png')}}"
                                alt="Avatar" class="image">
                            <div class="overlay">
                                <div class="card-text">
                                    <div class="text-center card-image"><img src="{{asset('assets/footer_logo.png')}}" class="" alt="" style="height: 75px;height:75px;object-fit:contain"></div>
                                    <p class="card-heading">Lorem, ipsum dolor.</p>
                                    <p class="card-sub"><span>lorem ipsum</span>&nbsp;<span>&#x2022;lorem ipsum</span>&nbsp;<span>&#x2022;lorem ipsum</span></p>
                                    <p class="card-para">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio in hic explicabo laboriosam nesciunt accusantium eius nostrum, debitis veniam at quos totam, laborum aut quaerat quae ipsum minima necessitatibus incidunt?</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 column work1">
                        <div class="card">
                            <img src="{{asset('assets/portfolio.png')}}"
                                alt="Avatar" class="image">
                            <div class="overlay">
                                <div class="card-text">
                                    <div class="text-center card-image"><img src="{{asset('assets/footer_logo.png')}}" class="" alt="" style="height: 75px;height:75px;object-fit:contain"></div>
                                    <p class="card-heading">Lorem, ipsum dolor.</p>
                                    <p class="card-sub"><span>lorem ipsum</span>&nbsp;<span>&#x2022;lorem ipsum</span>&nbsp;<span>&#x2022;lorem ipsum</span></p>
                                    <p class="card-para">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio in hic explicabo laboriosam nesciunt accusantium eius nostrum, debitis veniam at quos totam, laborum aut quaerat quae ipsum minima necessitatibus incidunt?</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 column client2">
                        <div class="card">
                            <img src="{{asset('assets/portfolio.png')}}"
                                alt="Avatar" class="image">
                            <div class="overlay">
                                <div class="card-text">
                                    <div class="text-center card-image"><img src="{{asset('assets/footer_logo.png')}}" class="" alt="" style="height: 75px;height:75px;object-fit:contain"></div>
                                    <p class="card-heading">Lorem, ipsum dolor.</p>
                                    <p class="card-sub"><span>lorem ipsum</span>&nbsp;<span>&#x2022;lorem ipsum</span>&nbsp;<span>&#x2022;lorem ipsum</span></p>
                                    <p class="card-para">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio in hic explicabo laboriosam nesciunt accusantium eius nostrum, debitis veniam at quos totam, laborum aut quaerat quae ipsum minima necessitatibus incidunt?</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 column work1">
                        <div class="card">
                            <img src="{{asset('assets/portfolio.png')}}"
                                alt="Avatar" class="image">
                            <div class="overlay">
                                <div class="card-text">
                                    <div class="text-center card-image"><img src="{{asset('assets/footer_logo.png')}}" class="" alt="" style="height: 75px;height:75px;object-fit:contain"></div>
                                    <p class="card-heading">Lorem, ipsum dolor.</p>
                                    <p class="card-sub"><span>lorem ipsum</span>&nbsp;<span>&#x2022;lorem ipsum</span>&nbsp;<span>&#x2022;lorem ipsum</span></p>
                                    <p class="card-para">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio in hic explicabo laboriosam nesciunt accusantium eius nostrum, debitis veniam at quos totam, laborum aut quaerat quae ipsum minima necessitatibus incidunt?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 column client1">
                        <div class="card">
                            <img src="{{asset('assets/portfolio.png')}}"
                                alt="Avatar" class="image">
                            <div class="overlay">
                                <div class="card-text">
                                    <div class="text-center card-image"><img src="{{asset('assets/footer_logo.png')}}" class="" alt="" style="height: 75px;height:75px;object-fit:contain"></div>
                                    <p class="card-heading">Lorem, ipsum dolor.</p>
                                    <p class="card-sub"><span>lorem ipsum</span>&nbsp;<span>&#x2022;lorem ipsum</span>&nbsp;<span>&#x2022;lorem ipsum</span></p>
                                    <p class="card-para">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio in hic explicabo laboriosam nesciunt accusantium eius nostrum, debitis veniam at quos totam, laborum aut quaerat quae ipsum minima necessitatibus incidunt?</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 column work2">
                        <div class="card">
                            <img src="{{asset('assets/portfolio.png')}}"
                                alt="Avatar" class="image">
                            <div class="overlay">
                                <div class="card-text">
                                    <div class="text-center card-image"><img src="{{asset('assets/footer_logo.png')}}" class="" alt="" style="height: 75px;height:75px;object-fit:contain"></div>
                                    <p class="card-heading">Lorem, ipsum dolor.</p>
                                    <p class="card-sub"><span>lorem ipsum</span>&nbsp;<span>&#x2022;lorem ipsum</span>&nbsp;<span>&#x2022;lorem ipsum</span></p>
                                    <p class="card-para">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio in hic explicabo laboriosam nesciunt accusantium eius nostrum, debitis veniam at quos totam, laborum aut quaerat quae ipsum minima necessitatibus incidunt?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 column client2">
                        <div class="card">
                            <img src="{{asset('assets/portfolio.png')}}"
                                alt="Avatar" class="image">
                            <div class="overlay">
                                <div class="card-text">
                                    <div class="text-center card-image"><img src="{{asset('assets/footer_logo.png')}}" class="" alt="" style="height: 75px;height:75px;object-fit:contain"></div>
                                    <p class="card-heading">Lorem, ipsum dolor.</p>
                                    <p class="card-sub"><span>lorem ipsum</span>&nbsp;<span>&#x2022;lorem ipsum</span>&nbsp;<span>&#x2022;lorem ipsum</span></p>
                                    <p class="card-para">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio in hic explicabo laboriosam nesciunt accusantium eius nostrum, debitis veniam at quos totam, laborum aut quaerat quae ipsum minima necessitatibus incidunt?</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 column work2">
                        <div class="card">
                            <img src="{{asset('assets/portfolio.png')}}"
                                alt="Avatar" class="image">
                            <div class="overlay">
                                <div class="card-text">
                                    <div class="text-center card-image"><img src="{{asset('assets/footer_logo.png')}}" class="" alt="" style="height: 75px;height:75px;object-fit:contain"></div>
                                    <p class="card-heading">Lorem, ipsum dolor.</p>
                                    <p class="card-sub"><span>lorem ipsum</span>&nbsp;<span>&#x2022;lorem ipsum</span>&nbsp;<span>&#x2022;lorem ipsum</span></p>
                                    <p class="card-para">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio in hic explicabo laboriosam nesciunt accusantium eius nostrum, debitis veniam at quos totam, laborum aut quaerat quae ipsum minima necessitatibus incidunt?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        {{-- <x-partials.footer /> --}}
    </div>
</x-partials.layout>
