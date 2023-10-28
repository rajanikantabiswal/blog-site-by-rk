<?php
include "header.php";
?>
  <div class="container my-4">
    <div class="row">
        <div class="col-12">
            <h3 class="text-center">Add New Post</h3>
        </div>
        <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 ">
        <form action="save-post.php" method="POST" enctype="multipart/form-data">
  <div class="form-group mb-2">
        <label for="post_title">Title</label>
        <input type="text" name="post_title" class="form-control" autocomplete="off" required>
  </div>
  
  <div class="form-group mb-2">
    <label for="post_content">Content</label>
    <textarea class="form-control" name="post_content" rows="6"></textarea>
  </div>
  <div class="form-group mb-2">
    <label for="category">Category</label>
    <select class="form-select" name="category">
      <option>MBA</option>
      <option>MCA</option>
      <option>BTech</option>
      <option>BCA</option>
    </select>
  </div>
  <div class="form-group mb-4">
  <label for="thumbnail" class="form-label">Post Thumbnail</label>
  <input class="form-control" type="file" name="thumbnail">
</div>
  <button type="submit" class="btn btn-info px-4" name="save">Save</button>
  <button type="button" class="btn btn-outline-info px-4">Reset</button>
</form>
        </div>
    </div>
  </div>
<?php
include "../footer.php";
?>