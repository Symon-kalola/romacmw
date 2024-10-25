<x-guest-layout>
    <main class="main" class="properties-page">
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
                            <h1>Real Estates for Sale</h1>
                            <p class="mb-0">At Romac, we offer a range of real estate options at very affordable prices. Our listings include woodlots, plots, and houses available in various prime locations across Malawi. Whether you're looking for land to develop or a new home, we have options to suit your needs. Explore our real estate catalogue for more details and find the perfect investment opportunity today.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li class="current">Real-Estates</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->

        <!-- Real Estate Section -->
        <section id="real-estate" class="real-estate section">

            <div class="container">

                <div class="row gy-4">

                    <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card">
                            <img src="{{ asset('assets/img/pine/woodlot.jpg') }}" alt="" class="img-fluid">
                            <div class="card-body">
                                <span class="sale-rent">Price | MK 25 000 000</span>
                                <h3><a href="property-single.html" class="stretched-link">Pine Woodlot</a>
                                </h3>
                                <div class="card-content d-flex flex-column justify-content-center text-center">
                                    <div class="row propery-info">
                                        <div class="col">Mzuzu, Nkholongo</div>
                                        <div class="col">5 Accres</div>
                                        <div class="col">Negotiatable</div>
                                        <div class="col">Available</div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div><!-- End Property Item -->

                    

                    <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="card">
                            <img src={{ asset('assets/img/pine/w2.jpg') }} alt="" class="img-fluid">
                            <div class="card-body">
                                <span class="sale-rent">Sale | MK 100 000 000</span>
                                <h3><a href="property-single.html" class="stretched-link">Woodlot For Sale </a></h3>
                                <div class="card-content d-flex flex-column justify-content-center text-center">
                                    <div class="row propery-info">
                                        <div class="col">Chikangawa</div>
                                        <div class="col">5 hectors</div>
                                        <div class="col">With pine</div>
                                        <div class="col">Sold</div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div><!-- End Property Item -->







                </div>

            </div>

        </section><!-- /Real Estate Section -->

    </main>
</x-guest-layout>
