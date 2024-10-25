<x-app-layout>



    <div class="container bg-white" style="min-height: 100vh ;margin-top: 84px">
        <div class="row">
            <div class="pagetitle">
                <h1>Profile</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Admin</a></li>

                        <li class="breadcrumb-item active">Messages</li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->

        </div>

        @forelse ($messages as $message)
            <div class="row">
                <div class="card ">
                    <div class="card-header d-flex justify-content-between">
                        <div>
                            <h2><span class="bi bi-person-circle"></span>{{ $message->name }}</h2>
                            <h5>{{ $message->email }}</h5>


                        </div>

                    </div>
                    <div class="card-body" style="height: 250px; overflow-y:scroll;">
                        <h5 class="card-title">{{ $message->subject }}</h5>
                        <p class="card-text">{{ $message->body }}</p>

                    </div>
                </div>

            </div>
        @empty
            <h3 style="display: flex; justify-content:center; color:red">No Messages</h3>
        @endforelse


    </div>

</x-app-layout>
