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
                <form id="nusery_form" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                        <span class="error text-danger" id="nameError"></span>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" class="form-control" name="price" id="price">
                        <span class="error text-danger" id="priceError"></span>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                        <span class="error text-danger" id="descriptionError"></span>
                    </div>
                    <div class="mb-3">
                        <label for="photo" class="form-label">Image</label>
                        <input class="form-control" id="photo" name="photo" rows="3" type="file">
                        <span class="error text-danger" id="photoError"></span>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>
<script>
    $('#nusery_form').on('submit', function(e) {
        e.preventDefault();
        $('.error').text('');

        $.ajax({
            url: "{{ route('nurseries.create') }}",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function(response) {
                alert('Nursery added successfully!');

                // Refresh the page after successful response
                location.reload();

            },

            error: function(xhr) {
                // Parse the error response
                let errors = xhr.responseJSON.errors;

                // Display error messages
                if (errors.name) {
                    $('#nameError').text(errors.name[0]);
                    console.log(errors.name[0]);

                }
                if (errors.price) {
                    $('#priceError').text(errors.price[0]);
                }
                if (errors.description) {
                    $('#descriptionError').text(errors.description[0]);
                }
                if (errors.photo) {
                    $('#photoError').text(errors.photo[0]);
                }
            }

        });



    });
</script>
