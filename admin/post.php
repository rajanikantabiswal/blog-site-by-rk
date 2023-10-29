<?php
include "config.php";
include "header.php";

$sql="SELECT * FROM post";
$result=$result = mysqli_query($conn, $sql) or die("Query Failed");
?>

      <div class="container mt-4 ">
        <div class="row">
        <div class="col-lg-10">
            <h3>All Posts</h3>
        </div>
        <div class="col-lg-2 d-flex justify-content-end">
            <a class="btn btn-info" href="add-post.php">Add New Post</a>
        </div>
        <div class="col-lg-12 mt-4">
          <?php
          if(mysqli_num_rows($result)==0){
            echo "<h4>No record found !</h4>";
          }else{
          ?>
        <table class="table table-hover">
    <thead>
      <tr>
        <th class="col-lg-1">Sl No.</th>
        <th class="col-lg-4">Title</th>
        <th class="col-lg-2">Category</th>
        <th class="col-lg-2">Date</th>
        <th class="col-lg-1">Author</th>
        <th class="col-lg-1">Edit</th>
        <th class="col-lg-1">Delete</th>
        
      </tr>
    </thead>
    
    <tbody>
    <?php
            while($row=mysqli_fetch_assoc($result)){
          ?>

      <tr>
        <td><?php echo $row['post_id']?></td>
        <td><?php echo $row['title']?></td>
        <td><?php echo $row['category']?></td>
        <td><?php echo $row['date']?></td>
        <td><?php echo $row['author']?></td>
        <td><a href='update-post.php?id=<?php echo $row['post_id'] ?>'><i class="fa-regular fa-pen-to-square"></i></a></td>
        <td><i class="fa-solid fa-trash-can" data-bs-toggle="modal" data-bs-target="#myModal"></i></td>
      </tr>
      
<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <!-- Modal body -->
      <div class="modal-body text-center">
        <h4>Are you want to delete this post?</h4>
        <div class="mt-4">
          <button type="button" class="btn btn-outline-danger px-4 mx-2" data-bs-dismiss="modal">Cancle</button>
          <a type="button" class="btn btn-danger px-4 mx-2" href="delete-post.php?id=<?php echo $row['post_id'] ?>">Delete</a>
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