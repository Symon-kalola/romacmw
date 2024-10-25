
  <!-- Modal -->
  <div class="modal fade" id="edit_nurseries" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Nursery</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form id="nusery_edit_form" method="POST" enctype="multipart/form-data">
                @csrf
               
                <div class="mb-3">
                  <label for="edit_name" class="form-label">Name</label>
                  <input type="text" class="form-control" id="edit_name" name="edit_name">
                  <span class="error text-danger" id="nameError_edit"></span>
                </div>
                <div class="mb-3">
                    <label for="edit_price" class="form-label">Price</label>
                    <input type="number" class="form-control" name="edit_price" id="edit_price">
                    <span class="error text-danger" id="priceError_edit"></span>
                  </div>
                  <div class="mb-3">
                    <label for="edit_description" class="form-label">Description</label>
                    <textarea class="form-control" id="edit_description" name="edit_description" rows="3"></textarea>
                    <span class="error text-danger" id="descriptionError_edit"></span>
                  </div>
                  <div class="mb-3">
                    <label for="edit_description" class="form-label">id</label>
                    <input type="number" class="form-control" name="edit_id" id="edit_id">
                    <span class="error text-danger" id="id_edit"></span>
                  </div>
                  <div class="mb-3">
                    <label for="edit_photo" class="form-label">Image</label>
                    <input class="form-control" id="edit_photo" name="edit_photo" rows="3" type="file" >
                    <span class="error text-danger" id="photoError_edit"></span>
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

    $('#nusery_edit_form').on('submit', function(e){
        e.preventDefault();
        $('.error').text('');

        $.ajax({
            url:"{{route('nurseries.update')}}",
            type:"POST",
            data: new FormData(this),
            contentType: false,
            processData: false,
            success:function(response){
                console.log(response);
                
            },
            
            error: function (xhr) {
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