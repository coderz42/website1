<?php

$pageName = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], "/") +1);

?>

<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
    <div class="sidenav-header">
      <a class="navbar-brand m-0" href="index.php">
        <h4>Binus University</h4>
      </a>
    </div>

    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">

      <ul class="navbar-nav">
        <li class="nav-item">
          
          <a class="nav-link
            <?= $pageName == 'index.php' ? 'active':''; ?>
            " href="index.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-home <?= $pageName == 'index.php' ? 'text-white':'text-dark'; ?> text-lg"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>

        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Site Management</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link
            <?= $pageName == 'users.php' ? 'active':''; ?>
            <?= $pageName == 'users-create.php' ? 'active':''; ?>
            <?= $pageName == 'users-edit.php' ? 'active':''; ?>
            " href="users.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-user-plus <?= $pageName == 'users.php' ? 'text-white':'text-dark'; ?> text-lg"></i>
            </div>
            <span class="nav-link-text ms-1">Students</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  
            <?= $pageName == 'admins.php' ? 'active':''; ?>
            <?= $pageName == 'admins-create.php' ? 'active':''; ?>
            <?= $pageName == 'admins-edit.php' ? 'active':''; ?>
            " href="admins.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-user-plus <?= $pageName == 'admins.php' ? 'text-white':'text-dark'; ?> text-lg"></i>
            </div>
            <span class="nav-link-text ms-1">Admins</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  
            <?= $pageName == 'grading.php' ? 'active':''; ?>
            <?= $pageName == 'grading-create.php' ? 'active':''; ?>
            <?= $pageName == 'grading-edit.php' ? 'active':''; ?>
          " href="grading.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-list <?= $pageName == 'grading.php' ? 'text-white':'text-dark'; ?> text-lg"></i>
            </div>
            <span class="nav-link-text ms-1">Grade Records</span>
          </a>
        </li>        

      </ul>
    </div>
    <div class="sidenav-footer mx-3 ">
      <a class="btn btn-primary mt-3 w-100" href="../admin/logout.php">Logout</a>
    </div>
  </aside>