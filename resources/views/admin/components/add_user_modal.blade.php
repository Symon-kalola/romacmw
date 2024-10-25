<!-- Modal -->
<div class="modal fade" id="add_user" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="user_form" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                        <span class="error text-danger" id="nameError"></span>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email">
                        <span class="error text-danger" id="emailError"></span>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password">
                        <span class="error text-danger" id="passwordError"></span>
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password_confirmation"
                            id="password_confirmation">
                        <span class="error text-danger" id="confirmationError"></span>
                    </div>
                    <div class="mb-3">
                        <label for="position" class="form-label">Position</label>
                        <input type="text" class="form-control" id="position" name="position">
                        <span class="error text-danger" id="positionError"></span>
                    </div>
                    <div class="mb-3">
                        <label for="position" class="form-label">Phone 1</label>
                        <input type="number" class="form-control" id="phone1" name="phone1">
                        <span class="error text-danger" id="phone1Error"></span>
                    </div>
                    <div class="mb-3">
                        <label for="position" class="form-label">Phone 2</label>
                        <input type="number" class="form-control" id="phone2" name="phone2">
                        <span class="error text-danger" id="phone2Error"></span>
                    </div>
                    <div class="row mb-3">
                        <label for="role" class="col-md-4 col-lg-3 col-form-label">Role</label>
                        <div class="col-md-8 col-lg-9">


                            <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                id="is_admin" name="is_admin">
                                <option value=1>Admin</option>
                                <option selected value=0>Member</option>



                            </select>
                        </div>
                        <span class="error text-danger" id="roleError"></span>
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
    $('#user_form').on('submit', function(e) {
        e.preventDefault();
        $('.error').text('');

        $.ajax({
            url: "{{ route('add.user') }}",
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
                if (errors.email) {
                    $('#emailError').text(errors.email[0]);
                }

                if (errors.position) {
                    $('#positionError').text(errors.position[0]);
                }
                if (errors.password) {
                    $('#passwordError').text(errors.password[0]);
                }
                if (errors.photo) {
                    $('#roleError').text(errors.role[0]);
                }
            }

        });



    });
</script>
