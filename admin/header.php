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
      <div class="header">
        <nav class="navbar navbar-expand-lg bg-body-tertiary py-3">
          <div class="container">
            <a class="navbar-brand fw-bold text-uppercase" href="index.php">RK Developer</a>
        
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
    <a class="nav-link text-info" aria-current="page" href="post.php">Post</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-info" href="category.php">Categories</a>
  </li>
  <li class="nav-item ">
    <a class="nav-link text-info" href="users.php">Users</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="setting.php" tabindex="-1" aria-disabled="true">Setting</a>
  </li>
</ul>
      </div>
      </div>
