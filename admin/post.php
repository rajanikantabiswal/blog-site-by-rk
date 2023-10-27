<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <script src="../js/bootstrap.bundle.js"></script>
    <title>Admin Pannel</title>
</head>
<body>
      <!-- Header Start -->
      <div class="offcanvas offcanvas-start" id="demo">
  <div class="offcanvas-header">
    <h1 class="offcanvas-title">Heading</h1>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body">
    <p>Some text lorem ipsum.</p>
    <p>Some text lorem ipsum.</p>
    <p>Some text lorem ipsum.</p>
    <button class="btn btn-secondary" type="button">A Button</button>
  </div>
</div>


      <div class="header">
        <nav class="navbar navbar-expand-lg bg-body-tertiary py-3">
          <div class="container">
            <a class="navbar-brand fw-bold text-uppercase" href="../index.php">RK Developer</a>
        
            <div class="btn-group">
            
                <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                Profile
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    
                    <li><button class="dropdown-item" type="button">Rajanikanta Biswal</button></li>
                    <li><button class="dropdown-item" type="button">Logout</button></li>
                </ul>
            </div>
            </div>
          </div>
          
        </nav>
      </div>
      <!-- Header end -->
      <div class="border-bottom">
    <div class="container p-0">
      <ul class="nav nav-tabs border-bottom-0">
  <li class="nav-item">
    <a class="nav-link text-info" aria-current="page" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-info" href="#">Link</a>
  </li>
  <li class="nav-item ">
    <a class="nav-link text-info" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
  </li>
</ul>
      </div>
      </div>

      <div class="container mt-4">
        <div class="row">
        <div class="col-lg-10">
            <h3>All Posts</h3>
        </div>
        <div class="col-lg-2 d-flex justify-content-end">
            <button class="btn btn-info">Add New Post</button>
        </div>
        <div class="col-lg-12 mt-4">
        <table class="table table-hover">
    <thead>
      <tr>
        <th class="col-lg-1">Sl No.</th>
        <th class="col-lg-4">Title</th>
        <th class="col-lg-2">Category</th>
        <th class="col-lg-2">Date</th>
        <th class="col-lg-2">Author</th>
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

</body>
</html>