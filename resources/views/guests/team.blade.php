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
                            <h1>About Romac</h1>
                            <p class="mb-0">At Romac, we are dedicated to transforming Malawi’s landscape through
                                sustainable reforestation and real estate services. Specializing in the cultivation
                                and sale of high-quality pine, bluegum, and acacia seedlings, we aim to restore the
                                country’s natural forests while supporting local and international clients in
                                establishing
                                and managing woodlots. Beyond our environmental efforts, we act as trusted agents for
                                real
                                estate transactions, offering expert guidance in land and property investments. Whether
                                you're
                                looking to invest in
                                a greener future or a new home, Romac is here to help you grow</p>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li class="current">About</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->


        {{-- the abou page --}}





        <!-- About Section -->
        <section id="about" class="about section">

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">

                        <h3>What We Do</h3>

                        <ul>
                            <li><i class="bi bi-check-circle"></i> <span><b>Seedlings Sale</b> </span>
                                <p class="fst-italic">
                                    Romac offers a wide selection of high-quality pine, bluegum, and acacia seedlings
                                    for sale to customers across Malawi. Whether you are looking to start a woodlot,
                                    reforest an area, or simply plant a few trees, we have the expertise and stock to
                                    meet
                                    your needs.
                                </p>
                            </li>
                            <li><i class="bi bi-check-circle"></i> <span><b>Planting Services</b> </span>
                                <p class="fst-italic">
                                    We understand that not everyone has the time or resources to plant their woodlots.
                                    Romac offers comprehensive planting services, where we handle the entire process,
                                    from land preparation to planting, ensuring that
                                    your trees are planted with care and expertise.
                                </p>
                            </li>
                            <li><i class="bi bi-check-circle"></i> <span><b>Woodlot Management</b> </span>
                                <p class="fst-italic">
                                    Managing a woodlot requires specialized knowledge and time. Romac provides ongoing
                                    woodlot management services, helping
                                    customers nurture their investment, monitor tree growth, and implement best
                                    practices for long-term sustainability. We cater to local and international clients,
                                    providing peace of mind even for those living abroad.
                                </p>
                            </li>
                            <li><i class="bi bi-check-circle pt-2"></i> <span><b>Real Estate Services</b> </span>
                                <p class="fst-italic">
                                    Beyond our environmental work, Romac also acts as an agent for real estate in
                                    Malawi, specializing in houses, land, and property investments. We offer transparent
                                    and professional real estate services, connecting buyers with the right
                                    opportunities
                                    while guiding them through the entire process.
                                </p>
                            </li>

                        </ul>
                    </div>

                    <div class="col-lg-6 about-images" data-aos="fade-up" data-aos-delay="200">
                        <div class="row gy-4">
                            <div class="col-lg-6">
                                <img src=" {{ asset('assets/img/car23.jpg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img src="{{ asset('assets/img/mom.jpg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img src="{{ asset('assets/img/Compressed/cacia.jpg') }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="col-lg-6">
                                <img src="{{ asset('assets/img/bluegum/n1.jpg') }}" class="img-fluid" alt="">
                            </div>
                            {{-- 
                            <div class="col-lg-6">
                                <div class="row gy-4">
                                    <div class="col-lg-12">
                                        <img src="{{  }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-lg-12">
                                        <img src="{{  }}" class="img-fluid" alt="">
                                    </div>

                                </div>
                            </div> --}}
                        </div>

                    </div>

                </div>

            </div>
        </section><!-- /About Section -->



        <!-- Features Section -->
        <section id="features" class="features section">

            <div class="container">

                <div class="row justify-content-around gy-4">
                    <div class="features-image col-lg-6" data-aos="fade-up" data-aos-delay="100"><img
                            src="{{ asset('assets/img/pine/woodlot.jpg') }}" alt=""></div>

                    <div class="col-lg-5 d-flex flex-column justify-content-center" data-aos="fade-up"
                        data-aos-delay="200">
                        <h4 style="font-weight: bolder">Mission Statement</h4>
                        <p>At Romac (Rehabilitation of Malawian Canopy), our mission is to restore and protect Malawi’s
                            natural environment by providing high-quality pine, bluegum, and acacia seedlings. We strive
                            to empower individuals and communities to engage in sustainable reforestation, while
                            offering comprehensive woodlot management services. Additionally, we aim to facilitate
                            growth in real estate by acting as
                            trusted agents for land and housing investments.</p>

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-easel flex-shrink-0"></i>
                            <div>
                                <h4><a href="" class="stretched-link">Vision</a></h4>
                                <p>To be the leading force in reforestation and sustainable land management in Malawi,
                                    ensuring a greener future for generations to come, while promoting responsible real
                                    estate development.</p>
                            </div>
                        </div><!-- End Icon Box -->
                        <h4 style="font-weight: bolder" class="pt-3">Goals</h4>

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-patch-check flex-shrink-0"></i>
                            <div>
                                <h4><a href="" class="stretched-link">Reforestation</a></h4>
                                <p>To contribute significantly to the restoration of Malawi’s forests by planting
                                    millions of trees and promoting sustainable woodlot management.</p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="500">
                            <i class="bi bi-brightness-high flex-shrink-0"></i>
                            <div>
                                <h4><a href="" class="stretched-link">Client Services</a></h4>
                                <p>To provide exceptional consultation and planting services for both local and
                                    international customers, ensuring sustainable woodlot development and maintenance.
                                </p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="600">
                            <i class="bi bi-brightness-high flex-shrink-0"></i>
                            <div>
                                <h4><a href="" class="stretched-link">Real Estate Growth</a></h4>
                                <p>To expand our real estate offerings by acting as trusted agents for land and housing
                                    transactions, with a focus on transparency and client satisfaction</p>
                            </div>
                        </div><!-- End Icon Box -->

                    </div>
                </div>

            </div>

        </section><!-- /Features Section -->


        {{-- end of the about page --}}

        <!-- Page Title -->
        <div class="page-title" data-aos="fade">

            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li class="current">Our Team</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->

        <!-- Agents Section -->
        <section id="agents" class="agents section">
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






                    {{-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="member">
                            <div class="pic"><img src="{{ asset('assets/img/sis.jpg') }}" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4 class="theme-color">Agnes Chizumila</h4>
                                <span>Assistant Marketing Manager<br></span>

                            </div>
                        </div>
                    </div><!-- End Team Member --> --}}


                </div>

            </div>

        </section><!-- /Agents Section -->

    </main>
</x-guest-layout>
