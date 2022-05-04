   <?php
   /**
    * Navbar for Header Template 
    * 
    * @package sanpage
    */
   ?>
   
   <!-- Navbar -->
   <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-2">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <div class="d-flex">
      <!-- Toggle button -->
      <button class="navbar-toggler"
              type="button"
              data-mdb-toggle="collapse"
              data-mdb-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
              >
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar brand -->
      <a class="navbar-brand ms-3" href="#">
        <i class="fas fa-gem text-primary">BRAND</i>
      </a>
    </div>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 ms-2 ps-1 ms-lg-0 ps-lg-0 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Team</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Projects</a>
        </li>
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->

    <!-- Right elements -->
    <div class="d-flex align-items-center">
      <button type="button" class="btn btn-link px-3 mb-1 me-2">
        Login
      </button>

      <button type="button" class="btn btn-primary mb-1 me-lg-3">
        Sign up
      </button>
    </div>
    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->