<x-app-layout>
    <!-- Services Section -->
    @include('admin.components.create_nurseries_modal')



    <section id="services" class="services section" style="min-height: 100vh ;margin-top: 84px">
        <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
        <script>
            AOS.init();
        </script>

        <div class="container">
            <div class="row align-items-end">
                <button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                    class="btn btn-sm bg-success text-white  ms-1" style="width: 140px"><span
                        class="bi bi-plus"></span>Add Nurseries</button>
            </div>

            <div class="row gy-4 pt-2">

                @forelse ($nurseries as $nursery)
                    <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="100">

                        <div class="service-item card p-3 shadow position-relative">
                            <div>
                                <img src= "{{ asset($nursery->photo) }}"alt="">
                            </div>
                            <div class="d-flex justify-content-between mt-2 ">
                                <div>

                                    <h1 style="font-weight:bolder; color:rgb(7, 99, 7)">{{ $nursery->name }} </h1>

                                </div>
                                <div>
                                    <ul class="nav nav-pills card-header-pills d-flex">


                                        <li class="nav-item ">

                                            <a href="/delete_nurseries/{{ $nursery->id }}"
                                                class=" button btn btn-sm bg-success text-white  "
                                                style="width: 40px; margin-left:5px;"><span
                                                    class="bi bi-trash"></span></a>

                                        </li>
                                    </ul>
                                </div>

                            </div>
                            <p> {{ $nursery->description }}
                            </p>
                            <h3 style="font-weight: bolder; color:red">price: MK {{ $nursery->price }}</h3>
                        </div>
                    </div><!-- End Service Item -->
                @empty
                    <h3 style="display: flex; justify-content:center; color:red">No nursaries</h3>
                @endforelse

            </div>

        </div>

    </section><!-- /Services Section -->

</x-app-layout>
