<x-app-layout>
    <container style="min-height: 100vh ;margin-top: 84px">

        <div class="row">

            @include('admin.components.add_user_modal')


            <div class="pagetitle">
                <h1>Profile</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item">Users</li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </nav>
                @if (auth()->check() && auth()->user()->is_admin)
                    <div class="row align-items-end">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#add_user"
                            class="btn btn-sm bg-success text-white  ms-1" style="width: 140px"><span
                                class="bi bi-plus"></span>Add Member</button>
                    </div>
                @endif

            </div><!-- End Page Title -->
            @forelse ($users as $user)
                <section class="section profile">
                    <div class="row">
                        <div class="col-xl-4">

                            <div class="card">
                                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                                    <img src={{ asset($user->profile) }} alt="Profile" class="rounded-circle">
                                    <h2>{{ $user->name }}</h2>
                                    <h4>{{ $user->position }}</h4>
                                    <h5><span class="text-success">>>></span>{{ $user->role }}<span
                                            class="text-success">
                                            <<<< </span>
                                    </h5>
                                </div>
                            </div>

                        </div>

                        <div class="col-xl-8">

                            <div class="card">
                                <div class="card-body pt-3">
                                    <!-- Bordered Tabs -->
                                    <ul class="nav nav-tabs nav-tabs-bordered">

                                        <li class="nav-item">
                                            <button class="nav-link active" data-bs-toggle="tab"
                                                data-bs-target={{ '#profile-overview' . $user->id }}>Overview</button>
                                        </li>
                                        @if (auth()->check() && auth()->user()->is_admin)
                                            <li class="nav-item">
                                                <button class="nav-link" data-bs-toggle="tab"
                                                    data-bs-target={{ '#profile-edit' . $user->id }}>Edit
                                                    Profile</button>
                                            </li>
                                        @endif



                                    </ul>
                                    <div class="tab-content pt-2">

                                        <div class="tab-pane fade show active profile-overview"
                                            id={{ 'profile-overview' . $user->id }}>

                                            <h5 class="card-title">Profile Details</h5>

                                            <div class="row">
                                                <div class="col-lg-3 col-md-4 label ">Full Name</div>
                                                <div class="col-lg-9 col-md-8">{{ $user->name }}</div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-3 col-md-4 label">Job</div>
                                                <div class="col-lg-9 col-md-8">{{ $user->position }}</div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-3 col-md-4 label">email</div>
                                                <div class="col-lg-9 col-md-8">{{ $user->email }}</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3 col-md-4 label">Role</div>
                                                <div class="col-lg-9 col-md-8">{{ $user->role }}</div>
                                            </div>
                                            @if (auth()->check() && auth()->user()->is_admin)
                                                <a href="/delete/{{ $user->id }}"
                                                    class="btn btn-sm bg-danger text-white  ms-1"
                                                    style="width: 140px"><span class="bi bi-trash"></span>Remove
                                                    Member</a>
                                            @endif





                                        </div>

                                        @if (auth()->check() && auth()->user()->is_admin)
                                            <div class="tab-pane fade profile-edit pt-3"
                                                id={{ 'profile-edit' . $user->id }}>

                                                <!-- Profile Edit Form -->
                                                <form method="POST" action="/edit" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row mb-3">
                                                        <label for="profile"
                                                            class="col-md-4 col-lg-3 col-form-label">Profile
                                                        </label>
                                                        <div class="col-md-8 col-lg-9">
                                                            <input required name="profile" type="file"
                                                                class="form-control" id="profile"
                                                                value="{{ $user->profile }}">
                                                        </div>
                                                    </div>


                                                    <div class="row mb-3">
                                                        <label for="edit_name"
                                                            class="col-md-4 col-lg-3 col-form-label">Full
                                                            Name</label>
                                                        <div class="col-md-8 col-lg-9">
                                                            <input required name="edit_name" type="text"
                                                                class="form-control" id="edit_name"
                                                                value="{{ $user->name }}">
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label for="edit_position"
                                                            class="col-md-4 col-lg-3 col-form-label">Position</label>
                                                        <div class="col-md-8 col-lg-9">
                                                            <input name="edit_position" required type="text"
                                                                class="form-control" id="edit_position"
                                                                value="{{ $user->position }}">
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3 d-none">
                                                        <label for="edit_position"
                                                            class="col-md-4 col-lg-3 col-form-label">Position</label>
                                                        <div class="col-md-8 col-lg-9">
                                                            <input required name="id" type="text"
                                                                class="form-control" id="id"
                                                                value="{{ $user->id }}">
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label for="edited_email"
                                                            class="col-md-4 col-lg-3 col-form-label">Email</label>
                                                        <div class="col-md-8 col-lg-9">
                                                            <input required name="edit_email" type="text"
                                                                class="form-control" id="edit_email"
                                                                value="{{ $user->email }}">
                                                        </div>
                                                    </div>


                                                    <div class="row mb-3">
                                                        <label for="role"
                                                            class="col-md-4 col-lg-3 col-form-label">Role</label>
                                                        <div class="col-md-8 col-lg-9">


                                                            <select class="form-select form-select-sm"
                                                                aria-label=".form-select-sm example" id="edit_role"
                                                                name="edit_role">
                                                                <option value="owner">owner</option>
                                                                <option value="admin">admin</option>
                                                                <option selected value="member">member</option>


                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label for="edit_password_confirmation"
                                                            class="col-md-4 col-lg-3 col-form-label">New
                                                            Password</label>
                                                        <div class="col-md-8 col-lg-9">
                                                            <input required name="edit_password" type="password"
                                                                class="form-control" id="edit_password">
                                                        </div>
                                                    </div>








                                                    <div class="text-center">
                                                        <button type="submit" class="btn btn-primary">Save
                                                            Changes</button>
                                                    </div>
                                                </form><!-- End Profile Edit Form -->

                                            </div>
                                        @endif


                                    </div><!-- End Bordered Tabs -->

                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            @empty
                <h3 style="display: flex; justify-content:center; color:red">No Users found</h3>
            @endforelse
        </div>

    </container>

</x-app-layout>
