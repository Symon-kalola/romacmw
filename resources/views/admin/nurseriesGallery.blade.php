<x-app-layout>
    @include('admin.components.add_photo')

    <div class="container " style="height: 100vh ;margin-top: 100px; overflow-y:">
        <div class="row align-items-end">
            <button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                class="btn btn-sm bg-success text-white  ms-1" style="width: 140px"><span class="bi bi-plus"></span>Add
                Photo</button>
        </div>

        <div class="row" id="photoList">
            @forelse ($photos as $photo)
                <div class="col-md-3 mt-4 ">
                    <a href="{{ asset($photo->photo) }}" target="_blank">
                        <img src="{{ asset($photo->photo) }}" alt="">
                    </a>
                    <a type="button" href="/admin/delete_photo/{{ $photo->id }}/{{ $photo->type }}"
                        class="btn btn-sm  bg-danger text-white  " style=" width:100%; "><span
                            class="bi bi-trash"></span></a>
                </div>
            @empty
                <h3 style="display: flex; justify-content:center; color:red">No photos found</h3>
            @endforelse




        </div>
    </div>



</x-app-layout>
