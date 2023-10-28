<?php
include "header.php";
?>
  <div class="container my-4">
    <div class="row">
        <div class="col-12">
            <h3 class="text-center">Add New User</h3>
        </div>
        <div class="col-md-6 offset-md-3">
        <form>
  <div class="form-group mb-2">
    <label for="exampleInputEmail1">First Name</label>
    <input class="form-control" type="text" aria-label="readonly input example">
  </div>
  <div class="form-group mb-2">
    <label for="exampleInputEmail1">Last Name</label>
    <input class="form-control" type="text" aria-label="readonly input example">
  </div>
  <div class="form-group mb-2">
    <label for="exampleInputEmail1">User Name</label>
    <input class="form-control" type="text" aria-label="readonly input example">
  </div>
  <div class="form-group mb-2">
    <label for="exampleInputEmail1">Password</label>
    <input class="form-control" type="Password" aria-label="readonly input example">
  </div>
  <div class="form-group mb-4">
    <label for="exampleInputEmail1">Role</label>
    <select class="form-select" id="sel1" name="sellist1">
      <option>Admin</option>
      <option>Normal User</option>
      
    </select>
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