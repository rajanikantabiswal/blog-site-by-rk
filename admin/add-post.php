<?php
include "header.php";
?>
  <div class="container my-4">
    <div class="row">
        <div class="col-12">
            <h3 class="text-center">Add New Post</h3>
        </div>
        <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 ">
        <form>
  <div class="form-group mb-2">
    <label for="exampleInputEmail1">Title</label>
    <input class="form-control" type="text" aria-label="readonly input example" readonly>
  </div>
  
  <div class="form-group mb-2">
    <label for="exampleInputPassword1">Content</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
  </div>
  <div class="form-group mb-2">
    <label for="exampleInputEmail1">Category</label>
    <select class="form-select" id="sel1" name="sellist1">
      <option>MBA</option>
      <option>MCA</option>
      <option>BTech</option>
      <option>BCA</option>
    </select>
  </div>
  <div class="form-group mb-4">
  <label for="formFile" class="form-label">Post Thumbnail</label>
  <input class="form-control" type="file" id="formFile">
</div>
  <button type="submit" class="btn btn-info px-4">Save</button>
  <button type="button" class="btn btn-outline-info px-4">Reset</button>
</form>
        </div>
    </div>
  </div>
<?php
include "../footer.php";
?>