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
          if(mysqli_num_rows($result)>0){
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
      <tr>
        <td>01</td>
        <td>GITA is the best College in Bhubaneswar</td>
        <td>MBA</td>
        <td>12 Aug 2023</td>
        <td>Admin</td>
        <td><i class="fa-regular fa-pen-to-square"></i></td>
        <td><i class="fa-solid fa-trash-can"></i></td>

      </tr>
      <tr>
        <td>01</td>
        <td>GITA is the best College in Bhubaneswar</td>
        <td>MBA</td>
        <td>12 Aug 2023</td>
        <td>Admin</td>
        <td class=""><i class="fa-regular fa-pen-to-square"></i></td>
        <td><i class="fa-solid fa-trash-can"></i></td>

      </tr>
      <tr>
        <td>01</td>
        <td>GITA is the best College in Bhubaneswar</td>
        <td>MBA</td>
        <td>12 Aug 2023</td>
        <td>Admin</td>
        <td class=""><i class="fa-regular fa-pen-to-square"></i></td>
        <td><i class="fa-solid fa-trash-can"></i></td>

      </tr>
      <tr>
        <td>01</td>
        <td>GITA is the best College in Bhubaneswar</td>
        <td>MBA</td>
        <td>12 Aug 2023</td>
        <td>Admin</td>
        <td class=""><i class="fa-regular fa-pen-to-square"></i></td>
        <td><i class="fa-solid fa-trash-can"></i></td>

      </tr>
      <tr>
        <td>01</td>
        <td>GITA is the best College in Bhubaneswar</td>
        <td>MBA</td>
        <td>12 Aug 2023</td>
        <td>Admin</td>
        <td class=""><i class="fa-regular fa-pen-to-square"></i></td>
        <td><i class="fa-solid fa-trash-can"></i></td>

      </tr>
      
    </tbody>
  </table>
  <?php
          }
  ?>
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