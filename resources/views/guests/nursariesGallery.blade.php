<x-guest-layout>
    <div class="container ">
        <div class="row">
            @forelse ($photos as $photo)
                <div class="col-md-3 mt-4">
                    <a href="{{ asset($photo->photo) }}" target="_blank">
                        <img src="{{ asset($photo->photo) }}" alt="">
                    </a>
                </div>
            @empty
                <h3 style="display: flex; justify-content:center; color:red">No photos found</h3>
            @endforelse













        </div>
    </div>

</x-guest-layout>
