<nav class="main-header navbar navbar-expand navbar-white navbar-light py-2">
   <!-- Left navbar links -->
   <ul class="navbar-nav">
      <li class="nav-item">
         <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>

   </ul>
   <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
         <a class="nav-link" data-toggle="dropdown" href="#">
            <span class="badge badge-danger navbar-badge">3</span>
            <i class="far fa-bell"></i>
         </a>

      </li>
      <li class="nav-item dropdown">
         <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
            <h5><?= $this->session->userdata('fullname') ? $this->session->userdata('fullname') : 'Admin' ?></h5>
         </a>
         <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="width:auto;">
            <a class="dropdown-header"></a>
            <a class="text-center d-flex justify-content-center align-items-center">
            </a>
            <a class="text-center d-flex justify-content-center align-items-center mb-2">

            </a>
            <a class="dropdown-item" href="<?= base_url('auth/logout') ?>">
               <i class="fas fa-power-off text-danger mr-2"></i> Logout
            </a>
            <a class=" dropdown-footer"></a>
         </div>
      </li>
   </ul>
</nav>