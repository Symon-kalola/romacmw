<x-guest-layout>
    <main class="main">


        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">

            <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

                <div class="carousel-item active">
                    <img src="{{ asset('assets/img/bac4.jpg') }}" alt="">
                    <div class="carousel-container">
                        <div>
                            <h4>Welcome to</h4>
                            <h2><span>Rehabilitation</span> Of Malawian Canopy</h2>
                            <a href="/contact" class="btn-get-started">Contact Us</a>
                        </div>
                    </div>
                </div><!-- End Carousel Item -->

                <div class="carousel-item">
                    <img src="{{ asset('assets/img/t1.jpg') }}" alt="">
                    <div class="carousel-container">
                        <div>
                            <h5>Available Through Out the Season</h5>
                            <h2><span>Hybrid Pine</span> seedlings </h2>
                            <a href="property-single.html" class="btn-get-started">Order | MK 200 each </a>
                        </div>
                    </div>
                </div><!-- End Carousel Item -->

                <div class="carousel-item">
                    <img src="{{ asset('assets/img/Compressed/cacia.jpg') }}" alt="">
                    <div class="carousel-container">
                        <div>
                            <h5>Available Through Out the Season</h5>
                            <h2><span>Accacia</span> Seedlings</h2>
                            <a href="property-single.html" class="btn-get-started">Order | MK 250 each </a>
                        </div>
                    </div>
                </div><!-- End Carousel Item -->

                <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>

                <ol class="carousel-indicators"></ol>

            </div>

        </section><!-- /Hero Section -->

        <!-- Services Section -->
        <section id="services" class="services section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2><span class="theme-color">Seedlings</span> For Sale</h2>
                <p>We sell different types of hybrid nursery seedlings which will be available throught the season,
                    check
                    out our catelog below</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">
                    @forelse ($nurseries as $nursery)
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="service-item  position-relative">
                                <div>
                                    <img src= "{{ asset($nursery->photo) }}"alt="">
                                </div>
                                <div class="d-flex justify-content-between ">
                                    <a href="product/id" class="stretched-link">
                                        <h3>{{ $nursery->name }} </h3>
                                    </a>
                                    <h3 class="theme-color">MK {{ $nursery->price }}</h3>
                                </div>
                                <p>{{ $nursery->description }}
                                </p>
                            </div>
                        </div><!-- End Service Item -->





                    @empty
                        <h3 style="display: flex; justify-content:center; color:red">No Nurseries found</h3>
                    @endforelse

                </div>

            </div>

        </section><!-- /Services Section -->

        <!-- Services Section -->
        <section id="services" class="services section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2><span class="theme-color">Our</span> Services</h2>
                <p>We also provide a range of services for our customer to plant seedlings at very negligible prices</p>
            </div><!-- End Section Title -->

            <div class="container"
                style="min-height:600px; background-image: url({{ asset('assets/img/Compressed/cac2.jpg') }})">

                <div class="row gy-4 p-5" style="margin-bottom:100px;">


                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-broadcast"></i>
                            </div>
                            <a href="service-details.html" class="stretched-link">
                                <h3>Free Consultation</h3>
                            </a>
                            <p>Romac offers free consultation services to assist customers with all their planting
                                needs.
                                Whether you’re looking for advice on selecting the right seedlings, managing woodlots,
                                or opening new woodlots, Romac’s experts are here to help. Get tailored recommendations
                                and guidance to ensure your planting
                                projects are a success, all at no cost.</p>
                        </div>
                    </div><!-- End Service Item -->



                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-bounding-box-circles"></i>
                            </div>
                            <a href="service-details.html" class="stretched-link">
                                <h3>Planting Services</h3>
                            </a>
                            <p>In addition to free consultations, Romac provides professional
                                planting services at a reasonable price. Whether you're starting a
                                new project or expanding an existing woodlot, Romac's experienced team will handle
                                the planting
                                process, ensuring optimal growth and success for your seedlings</p>
                            <a href="service-details.html" class="stretched-link"></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-calendar4-week"></i>
                            </div>
                            <a href="service-details.html" class="stretched-link">
                                <h3>Woodlots Management</h3>
                            </a>
                            <p>Romac extends its services to include comprehensive woodlot management,
                                even for customers living abroad. Whether you're in Malawi or overseas,

                                Romac’s team ensures that your woodlot is properly maintained and managed,
                                providing peace of mind and professional care for your investment</p>
                            <a href="service-details.html" class="stretched-link"></a>
                        </div>
                    </div><!-- End Service Item -->



                </div>

            </div>

        </section><!-- /Services Section -->

        <!-- Agents Section -->
        <section id="agents" class="agents section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2><span class="theme-color">Our</span> Team</h2>
                <p>Our dedicated team is readly available to help our customers anytime</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-5">
                    @forelse ($users as $user)
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="member">
                                <div class="pic"><img src="{{ asset($user->profile) }}" class="img-fluid"
                                        alt=""></div>
                                <div class="member-info">
                                    <h4 class="theme-color">{{ $user->name }}</h4>
                                    <span> {{ $user->position }}</span>

                                </div>
                            </div>
                        </div><!-- End Team Member -->

                    @empty
                        <h3 style="display: flex; justify-content:center; color:red">No Users found</h3>
                    @endforelse

                </div>

            </div>

        </section><!-- /Agents Section -->

        <!-- Testimonials Section -->
        <section id="testimonials" class="testimonials section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2 class="theme-color">Testimonials</h2>
                <p>Feedback from our valued customers and clients</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 1
                }
              }
            }
          </script>
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    Working with Romac has been a fantastic experience! From their free consultation to
                                    their professional planting services, they’ve exceeded my expectations at every
                                    step. Their team helped me choose the perfect seedlings for my woodlot, and even
                                    though I live abroad, they’ve managed everything seamlessly. Knowing that my woodlot
                                    is in good hands gives me great peace of mind. I highly recommend Romac to anyone
                                    looking to start or manage a woodlot
                                </p>
                                <div class="profile mt-auto">
                                    <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>Saul Goodman</h3>

                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    I hired Romac for their planting services, and I’m really impressed with the
                                    results! Their team was professional, efficient, and knew exactly how to handle my
                                    project. They took care of everything, from preparing the land to planting the
                                    seedlings, and the entire process was hassle-free. The pricing was very reasonable,
                                    and I can already see how well the seedlings
                                    are growing. If you need reliable planting services, Romac is the way to go!
                                </p>
                                <div class="profile mt-auto">
                                    <img src="{{ asset('assets/img/bot.jpg') }}" class="testimonial-img"
                                        alt="">
                                    <h3 class="theme-color">Symon Chakaka</h3>
                                    <h4>Customer</h4>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    Romac has been a game changer for me! Their expertise in seedlings and woodlot
                                    management is unmatched, and their free consultation helped me make informed
                                    decisions for my farm. The planting service was efficient and affordable, and even
                                    after planting, their ongoing management has kept my woodlot thriving. I live
                                    outside Malawi, but Romac has made it so easy to manage everything remotely.
                                    I couldn't be happier with their services
                                </p>
                                <div class="profile mt-auto">
                                    <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img"
                                        alt="">
                                    <h3 class="theme-color">Jena Karlis</h3>
                                    <h4>woodlot owner</h4>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    I recently purchased seedlings from Romac, and I couldn't be more satisfied.
                                    Their team was incredibly knowledgeable, helping me choose the right varieties for
                                    my land.
                                    The quality of the seedlings is outstanding, and they’ve already started to take
                                    root beautifully. Romac made the entire process simple and smooth, from consultation
                                    to purchase.
                                    I highly recommend them for anyone looking for top-quality seedlings and expert
                                    advice
                                </p>
                                <div class="profile mt-auto">
                                    <img src="{{ asset('assets/img/sim.jpg') }}" class="testimonial-img"
                                        alt="">
                                    <h3 class="theme-color">Symon Chakaka</h3>
                                    <h4>Customer</h4>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->



                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>

        </section><!-- /Testimonials Section -->

    </main>



    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>



</x-guest-layout>
