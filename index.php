<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <script src="./js/bootstrap.bundle.js"></script>
    <title>Project-2 by RK</title>
</head>
<body>
      <!-- Header Start -->
      <div class="header">
        <nav class="navbar navbar-expand-lg bg-body-tertiary py-3">
          <div class="container">
            <a class="navbar-brand fw-bold text-uppercase" href="index.html">RK Developer</a>
            <button class="menu-btn d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <!-- <span class="navbar-toggler-icon"></span> -->
              <i class="fa-solid fa-bars" style="color: #000000;"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="singlepost.html">Single Post</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                  </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li>
              </ul>
              <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
          </div>
        </nav>
      </div>
      <!-- Header end -->

    <!--Section 1 Start-->
    <div class="main d-flex container">
      <div class="row">
        <!-- Main Start -->
        <div class="col-lg-9">
          <div class="heading my-4">
            <h3>Latest Posts</h3>
          </div>
          <?php
          //include "post-grid.php";
          ?>
          <div>
            <h3>No record found</h3>
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
        <!-- Main End -->

        <!-- Sidebar Start -->
        <div class="col-lg-3">
          <!-- Recent Post Start -->
          <div>
            <div class="heading my-4">
              <h3>Recent Posts</h3>
            </div>
            <div class="">
            <!-- Recent-Post-card Start -->
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row g-0">
                <div class="w-25">
                  <img src="./Images/img1.jpg" class="object-fit-cover img-fluid h-100 h-100 rounded-start" alt="...">
                </div>
                <div class="w-75">
                  <div class="card-body">
                    <h5 class="card-title"><a href="singlepost.html">Card title</a></h5>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Recent-Post-card End -->
            <!-- Recent-Post-card Start -->
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row g-0">
                <div class="w-25">
                  <img src="./Images/img1.jpg" class="object-fit-cover img-fluid h-100 h-100 rounded-start" alt="...">
                </div>
                <div class="w-75">
                  <div class="card-body">
                    <h5 class="card-title"><a href="singlepost.html">Card title</a></h5>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Recent-Post-card End -->
            <!-- Recent-Post-card Start -->
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row g-0">
                <div class="w-25">
                  <img src="./Images/img1.jpg" class="object-fit-cover img-fluid h-100 h-100 rounded-start" alt="...">
                </div>
                <div class="w-75">
                  <div class="card-body">
                    <h5 class="card-title"><a href="singlepost.html">Card title</a></h5>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Recent-Post-card End -->
            <!-- Recent-Post-card Start -->
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row g-0">
                <div class="w-25">
                  <img src="./Images/img1.jpg" class="object-fit-cover img-fluid h-100 h-100 rounded-start" alt="...">
                </div>
                <div class="w-75">
                  <div class="card-body">
                    <h5 class="card-title"><a href="singlepost.html">Card title</a></h5>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Recent-Post-card End -->
            <!-- Recent-Post-card Start -->
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row g-0">
                <div class="w-25">
                  <img src="./Images/img1.jpg" class="object-fit-cover img-fluid h-100 h-100 rounded-start" alt="...">
                </div>
                <div class="w-75">
                  <div class="card-body">
                    <h5 class="card-title"><a href="singlepost.html">Card title</a></h5>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Recent-Post-card End -->
          </div>
          </div>
          <!-- Recent post End -->

          <!-- Trending Topics Start -->
          <div>
            <div class="heading my-4">
              <h3>Trending Topics</h3>
            </div>
            <!-- Trending Tpoic Card Start -->
            <div class="text-center mb-3 card-bg-scale position-relative overflow-hidden rounded bg-dark-overlay-4 "          style="background-image:url(./Images/img1.jpg); background-position: center left; background-size: cover;">
              <div class="p-3">
                <a href="#" class="stretched-link btn-link fw-bold text-white h5">Travel</a>
              </div>
            </div>
            <!-- Trending Tpoic Card End -->
            <!-- Trending Tpoic Card Start -->
            <div class="text-center mb-3 card-bg-scale position-relative overflow-hidden rounded bg-dark-overlay-4 "          style="background-image:url(./Images/img1.jpg); background-position: center left; background-size: cover;">
              <div class="p-3">
                <a href="#" class="stretched-link btn-link fw-bold text-white h5">Travel</a>
              </div>
            </div>
            <!-- Trending Tpoic Card End -->
            <!-- Trending Tpoic Card Start -->
            <div class="text-center mb-3 card-bg-scale position-relative overflow-hidden rounded bg-dark-overlay-4 "          style="background-image:url(./Images/img1.jpg); background-position: center left; background-size: cover;">
              <div class="p-3">
                <a href="#" class="stretched-link btn-link fw-bold text-white h5">Travel</a>
              </div>
            </div>
            <!-- Trending Tpoic Card End -->

            <!-- View All Category button -->
            <div class="text-center mt-3">
              <a href="#" class="fw-bold text-body text-primary-hover"><u>View all categories</u></a>
          </div>
          </div>
          <!-- Trending Topics End -->
         
        </div>
        <!-- Sidebar End -->
      </div>
    </div>
    <!-- Section 1 End -->

<div class="footer">
    <div class="container">
        <footer class="py-3 my-4">
          <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
          </ul>
          <p class="text-center text-body-secondary">© 2023 Company, Inc</p>
        </footer>
      </div>
</div>
    
</body>
</html>