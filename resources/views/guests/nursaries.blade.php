<x-guest-layout>
    <main class="main">
        <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
        <script>
            AOS.init();
        </script>
        <!-- Page Title -->
        <div class="page-title" data-aos="fade">
            <div class="heading">
                <div class="container">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-lg-8">
                            <h1>Seedlings Available For Sale</h1>
                            <p class="mb-0">Welcome to our Nurseries page! Here, you’ll find a wide selection of
                                high-quality seedlings, carefully raised to meet your planting needs. We offer a
                                variety of seedlings at competitive prices, ensuring you get the best value for your
                                investment. Explore our listings below to find the perfect seedlings for your next
                                project</p>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li class="current">Nursaries</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->

        <!-- Services Section -->
        <section id="services" class="services section">

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
                        <h3 style="display: flex; justify-content:center; color:red">No Photos found</h3>
                    @endforelse




                </div>

            </div>

        </section><!-- /Services Section -->

    </main>
</x-guest-layout>
