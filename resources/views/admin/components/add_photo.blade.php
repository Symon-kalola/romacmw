<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Nursery</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="photo_form" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="type" class="col-md-4 col-lg-3 col-form-label">type</label>
                        <div class="col-md-8 col-lg-9">
                            <select name="type" id="type" class="form-select form-select-sm"
                                aria-label=".form-select-sm example">
                                <option selected value="pine">pine</option>
                                <option value="bluegum">blue</option>
                                <option value="accacia">acaccia</option>
                            </select>
                            <span class="error text-danger" id="typeError"></span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="photo" class="form-label">Image</label>
                        <input class="form-control" id="photo" name="photo" rows="3" type="file">
                        <span class="error text-danger" id="photoError"></span>
                    </div>
                    <button type="submit" class="btn btn-primary">Submits</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>
<script>
    $('#photo_form').on('submit', function(e) {
        e.preventDefault();
        $('.error').text('');
        var type = $('#type').val();

        $.ajax({
            url: "{{ route('photo.add') }}",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function(response) {
                alert('Photo uploaded successfully!');
                const photo = response.photo;
                console.log(photo.photo);

                const newPhotoHtml = `
                    <div class="col-md-3 mt-4">
                        <a href="{{ asset('${photo.photo}') }}" target="_blank">
                            <img src="{{ asset('${photo.photo}') }}" alt="">
                        </a>
                        <button type="button" data-bs-toggle="modal" data-bs-target="#delete_modal"
                            class="btn btn-sm bg-danger text-white" style="width: 100%;">
                            <span class="bi bi-trash"></span>
                        </button>
                    </div>
                `;
                $('#photoList').append(newPhotoHtml);
                $('#staticBackdrop').modal('hide');
                $('#photo_form')[0].reset();
            },

            error: function(xhr) {
                // Parse the error response
                let errors = xhr.responseJSON.errors;

                // Display error messages
                if (errors.type) {
                    $('#TYPEError').text(errors.name[0]);
                    console.log(errors.type[0]);

                }
                if (errors.photo) {
                    $('#photoError').text(errors.photo[0]);

                }
            }

        });




    });
</script>
