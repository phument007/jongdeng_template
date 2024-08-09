<!-- Modal -->
<div class="modal fade" id="modal_edit_news" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" style=" max-width:70%;">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Post</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST">
          <div class="row">
            <div class="col-md-8">
              <div class="form-group">
                <label for="">Title</label>
                <input type="text" name="title" class="title form-control shadow-none" >
              </div>
              <div class="form-group">
                <label for="">Descriptin</label>
                <textarea name="description" cols="10" rows="10" class="description form-control"></textarea>
              </div>
    
            </div>
            <div class="col-md-4">
              <div class="form-group">
                  <label for="">Category</label>
                  <select name="category" class="category shadow-none  form-control">
                      <option value="">កម្សាន្ត</option>
                  </select>
              </div>
              <div class="form-group">
                  <label for="">Type</label>
                  <select name="sub_category" class="sub_category shadow-none  form-control">
                      <option value="1">ព័ត្នមានជាតិ</option>
                      <option value="0">អន្តរជាតិ</option>
                  </select>
              </div>
              <div class="form-group mt-3">
                  <input type="file" name="image" class="image form-control">
                  <i class="bi bi-plus-circle-fill btn_upload"></i>
                  <div class="image_preview d-flex justify-content-center align-items-center">
                      <p class="">Upload Image here...</p>
                  </div>
              </div>

            </div>

          </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Save</button>
      </div>
    </div>
  </div>
</div>