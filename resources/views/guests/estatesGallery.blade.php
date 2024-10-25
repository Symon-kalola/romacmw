<x-guest-layout>

    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script>
        AOS.init();
    </script>
    <div class="container ">
        <div class="row">  
          <div class="col-md-3 mt-4" data-aos="fade-up" data-aos-delay="100">
                <a href="{{ asset('assets/img/pine/w3.jpg') }}" target="_blank">
                  <img src="{{ asset('assets/img/pine/w3.jpg') }}" alt="">
                </a>
            </div>
            <div class="col-md-3 mt-4" data-aos="fade-up" data-aos-delay="100">
                <a href="{{ asset('assets/img/pine/w2.jpg') }}" target="_blank">
                  <img src="{{ asset('assets/img/pine/w2.jpg') }}" alt="">
                </a>
            </div>
            <div class="col-md-3 mt-4" data-aos="fade-up" data-aos-delay="100">
                <a href="{{ asset('assets/img/pine/woodlot.jpg') }}" target="_blank">
                  <img src="{{ asset('assets/img/pine/woodlot.jpg') }}" alt="">
                </a>
            </div>

        </div>
    </div>

</x-guest-layout>
