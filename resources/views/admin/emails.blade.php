<x-app-layout>

    <div class="container bg-white" style="min-height: 100vh ;margin-top: 84px">
        <div class="row">
            <div class="pagetitle">
                <h1>Profile</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Admin</a></li>

                        <li class="breadcrumb-item active">Messages</li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->

        </div>

        @foreach ($emails as $email)
            <div class="row">
                <div class="card ">
                    <div class="card-header d-flex justify-content-between">
                        <div class="d-flex">
                            <h2><span class="bi bi-person-circle"></span>{{ $email['from'] }}</h2>
                            <p style="margin-left: 70px;">{{ $email['date'] }}</p>
                        </div>

                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $email['subject'] }}</h5>
                        <p class="card-text">{!! $email['body'] !!}</p>

                    </div>
                </div>

            </div>
        @endforeach


    </div>
    <script>
        $('#email_edit_form').on('submit', function(e) {
            e.preventDefault();
            $('.error').text('');

            $.ajax({
                url: "{{ route('nurseries.update') }}",
                type: "POST",
                data: new FormData(this),
                contentType: false,
                processData: false,
                success: function(response) {
                    console.log(response);

                },

                error: function(xhr) {
                    // Parse the error response
                    let errors = xhr.responseJSON.errors;

                    // Display error messages
                    if (errors.name) {
                        $('#nameError_edit').text(errors.name[0]);
                        console.log(errors.name[0]);

                    }
                    if (errors.price) {
                        $('#priceError_edit').text(errors.price[0]);
                    }
                    if (errors.description) {
                        $('#descriptionError_edit').text(errors.description[0]);
                    }
                    if (errors.id) {
                        $('#id_edit').text(errors.id[0]);
                    }
                    if (errors.photo) {
                        $('#photoError_edit').text(errors.photo[0]);
                    }

                }

            });



        });
    </script>
</x-app-layout>
