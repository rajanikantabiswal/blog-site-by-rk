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
            <a class="navbar-brand fw-bold text-uppercase" href="index.html">RK Developer</a>
        
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
    <a class="nav-link" aria-current="page" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
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
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
        </div>
        </div>

      </div>

</body>
</html>