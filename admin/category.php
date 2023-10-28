<?php
include "header.php";
?>
<div class="container mt-4 ">
<div class="row">
        <div class="col-lg-10">
            <h3>All Categories</h3>
        </div>
        <div class="col-lg-2 d-flex justify-content-end">
        <!-- <a class="btn btn-info" href="add-category.php">Add New Category</a> -->
        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#myModal">
    Add New Category
  </button>
</div>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="">
        <div class="form-group mb-2">
    <label for="exampleInputEmail1">Category Name</label>
    <input class="form-control" type="text" aria-label="readonly input example" readonly>
  </div>
  <div class="text-end">
  <button type="submit" class="btn btn-info px-4" data-bs-dismiss="modal">Save</button>
  </div>
        </form>
        
      </div>


    </div>
  </div>
        </div>
        <div class="col-lg-12 mt-4">
        <table class="table table-hover">
    <thead>
      <tr>
        <th class="col-lg-1">Sl No.</th>
        <th class="col-lg-5">Category</th>
        <th class="col-lg-4">No. of Posts</th>
        <th class="col-lg-1">Edit</th>
        <th class="col-lg-1">Delete</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>01</td>
        <td>MBA</td>
        <td>45</td>
        <td class=""><i class="fa-regular fa-pen-to-square"></i></td>
        <td><i class="fa-solid fa-trash-can"></i></td>
      </tr>
      <tr>
        <td>01</td>
        <td>MBA</td>
        <td>45</td>
        <td class=""><i class="fa-regular fa-pen-to-square"></i></td>
        <td><i class="fa-solid fa-trash-can"></i></td>
      </tr>
      <tr>
        <td>01</td>
        <td>MBA</td>
        <td>45</td>
        <td class=""><i class="fa-regular fa-pen-to-square"></i></td>
        <td><i class="fa-solid fa-trash-can"></i></td>
      </tr>
      <tr>
        <td>01</td>
        <td>MBA</td>
        <td>45</td>
        <td class=""><i class="fa-regular fa-pen-to-square"></i></td>
        <td><i class="fa-solid fa-trash-can"></i></td>
      </tr>
      <tr>
        <td>01</td>
        <td>MBA</td>
        <td>45</td>
        <td class=""><i class="fa-regular fa-pen-to-square"></i></td>
        <td><i class="fa-solid fa-trash-can"></i></td>
      </tr>
      
      
    </tbody>
  </table>
        </div>
        </div>


        <!-- Pagination Start -->
        <div class="mt-4">
            <nav aria-label="...">
              <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active">
                  <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">Next</a>
                </li>
              </ul>
            </nav>
          </div>
          <!-- Pagination End -->
</div>
<?php
include "../footer.php";
?>