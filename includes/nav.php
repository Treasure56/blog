<nav class="navbar navbar-expand-lg navbar-dark bg fixed-top bg-danger">
        <div class="container-fluid">
          <!-- logo -->
          <a class="navbar-brand fs-5" href="index.php">Blog Website</a>

          <!-- toggle button/ menu bar -->
          <button class="navbar-toggler shadow-non border-0" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- side bar -->
          <div class="offcanvas offcanvas-start sidebar" tabindex="-1" id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel">

            <!-- sidebar header -->
            <div class="offcanvas-header text-white border-bottom">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Blog website</h5>

              <button type="button" class="btn-close text-reset btn-close-white shadow-non" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
            </div>

            <!-- sidebar body -->
            <div class="offcanvas-body d-flex flex-column p-4 p-lg-0 text-white">
              <ul class="navbar-nav justify-content-end align-items-center flex-grow-1 pe-3">
                <li class="nav-item mx-2">
                  <a class="nav-link" href="blog.php">Blog</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">Courses</a>
                  <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="#">Write to 1k</a>
                    <a class="dropdown-item" href="#">Writer website in a weekend</a>
                    <a class="dropdown-item" href="#">Freelance writing prep</a>
                  </div>
                </li>
                <li class="nav-item mx-2">
                  <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item mx-2">
                  <a class="nav-link" href="contact.php">Contact</a>
                </li>

              </ul>
            </div>
          </div>
        </div>
      </nav>