<?php
include "header.php";
include "config.php";
?>
<?php
if (isset($_POST['save'])){
  
  $category= mysqli_real_escape_string($conn, $_POST['category']);

  $sql= "SELECT category_name FROM category WHERE category_name= '{$category}'";
  $result = mysqli_query($conn, $sql) or die("Query Failed");
  if(mysqli_num_rows($result)>0){

    echo '<div class="container mt-4 alert alert-warning alert-dismissible fade show" role="alert">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
      </svg>
  <strong>Category already exist !</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
  }else{
    $sql1= "INSERT INTO category (category_name) VALUES ('{$category}')";
    $result1= mysqli_query($conn, $sql1) or die("Query failed");
  
    if($result1){
      header("location: {$hostname}/admin/category.php");
    }
  } 
  
}
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
        <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
          <div class="form-group mb-2">
            <label for="category">Category Name</label>
            <input class="form-control" name="category" type="text" required>
          </div>
          <div class="text-end">
            <button type="submit" class="btn btn-info px-4" name="save">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- modal end -->

        <div class="col-lg-12 mt-4">
        <?php
        $sql2="SELECT * FROM category";
        $result2=$result = mysqli_query($conn, $sql2) or die("Query Failed");
          if(mysqli_num_rows($result2)==0){
            echo "<h4>No record found !</h4>";
          }else{
          ?>  
         
          
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
    <?php
            while($row=mysqli_fetch_assoc($result2)){
          ?>
      <tr>
        <td><?php echo $row['category_id'] ?></td>
        <td><?php echo $row['category_name'] ?></td>
        <td><?php echo $row['post'] ?></td>
        <td><a href='update-category.php?id=<?php echo $row['category_id'] ?>'><i class="fa-regular fa-pen-to-square"></i></a></td>
        <td><i class="fa-solid fa-trash-can" data-bs-toggle="modal" data-bs-target="#del_modal"></i></td>
      </tr>
     
      <!-- The Modal -->
<div class="modal" id="del_modal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <!-- Modal body -->
      <div class="modal-body text-center">
        <h4>Are you want to delete this category?</h4>
        <div class="mt-4">
          <button type="button" class="btn btn-outline-danger px-4 mx-2" data-bs-dismiss="modal">Cancle</button>
          <a type="button" class="btn btn-danger px-4 mx-2" href="delete-category.php?id=<?php echo $row['category_id'] ?>">Delete</a>
        </div>  
      </div>
    </div>
  </div>
</div>
<!-- modal end -->
<?php
            }
    ?>

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
          
  <?php
   }
  ?>
</div>
<?php
include "../footer.php";
?>