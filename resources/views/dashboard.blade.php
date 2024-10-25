<x-app-layout>
    <div class="container  " style="height: 100vh ;margin-top: 84px">


        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-8">
                    <div class="row">

                        <!-- Sales Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card sales-card">



                                <div class="card-body">
                                    <h5 class="card-title">Messages <span>| Today</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-chat-dots"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $message }}</h6>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Sales Card -->

                        <!-- Revenue Card -->


                        <!-- Customers Card -->
                        <div class="col-xxl-4 col-xl-12">

                            <div class="card info-card customers-card">


                                <div class="card-body">
                                    <h5 class="card-title">Photos <span>| Total</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-images"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $photos }}</h6>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div><!-- End Customers Card -->




                    </div>
                </div><!-- End Left side columns -->

                <!-- Right side columns -->
                <div class="col-lg-4">

                    <!-- Revenue Card -->

                    <div class="card info-card revenue-card">


                        <div class="card-body">
                            <h5 class="card-title">Users <span>| Total</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi  bi-person-gear"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{ $users }}</h6>

                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- End Revenue Card -->

                    <!-- Revenue Card -->

                    <div class="card info-card revenue-card">


                        <div class="card-body">
                            <h5 class="card-title">Nurseries <span>| Total</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-tree"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{ $nursery }}</h6>


                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- End Revenue Card -->










                </div><!-- End Right side columns -->

            </div>
        </section>




    </div>



</x-app-layout>
