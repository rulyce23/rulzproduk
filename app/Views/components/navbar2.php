  <script src="http://rulzproduk.kesug.com/public/vendor/jquery/jquery.min.js"></script>
    <script src="http://rulzproduk.kesug.com/public/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="http://rulzproduk.kesug.com/public/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="http://rulzproduk.kesug.com/public/js/sb-admin-2.min.js"></script>


<link href="http://rulzproduk.kesug.com/public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="http://rulzproduk.kesug.com/public/css/sb-admin-2.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" >
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <link  href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<!-- Load main content -->
<body id="page-top">
<!-- Page Wrapper -->
<div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
`  <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center">
            <div class="sidebar-brand-icon rotate-n-15">
                <img src=http://rulzproduk.kesug.com/public/img/rullz.jpg " height="65" width="65" style="border-radius: 50%; margin-top:5px;"></img>
            </div>
            <div class="sidebar-brand-text mx-2">Rullz Invent Sales</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">
        <!-- Nav Item - Dashboard -->
       
        <li class="nav-item">
                <a class="nav-link" href="<?= site_url('account') ?>">
                 <i class="fas fa-fw fa-tachometer-alt"></i>Dashboard</a>
            </li>
        </li>

        <hr class="sidebar-divider my-1">

        <li class="nav-item">
        
        <a class="nav-link" href="<?= site_url('customer') ?>">
            <i class="fas fa-fw fa-user-alt"></i>
            <span>Customer</span></a>     
        </li>

        <hr class="sidebar-divider my-1">

        <li class="nav-item">

        <a class="nav-link" href="<?= site_url('barang') ?>">
            <i class="fas fa-fw fa-stuff-alt"></i>
            <span>Barang</span></a>     
        </li>
                <hr class="sidebar-divider my-1">

        <li class="nav-item">

        <a class="nav-link" href="<?= site_url('transaksi') ?>">
           <i class="fas fa-fw fa-dollar-alt"></i>
            <span>Transaksi</span></a>     
        </li>
        <hr class="sidebar-divider my-1">
              <li class="nav-item">
                <a class="nav-link" href="<?= site_url('users') ?>"><i class="fas fa-fw fa-stuff-alt"></i>
            <span>User Customer</span></a>  
            </li>
            <hr class="sidebar-divider my-1">
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('users/logs') ?>"><i class="fas fa-fw fa-stuff-alt"></i>
            <span>Log</span></a>  
            </li>
            <hr class="sidebar-divider my-1">
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('settings') ?>"><i class="fas fa-fw fa-stuff-alt"></i>
            <span>Setting</span></a>  
            </li>



                  <!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready To Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-link" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger" href="<?= site_url('logout') ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="<?= site_url('logout') ?>" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars" style="color: #192446;"></i>
                </button>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-item nav-link dropdown-toggle mr-md-2" href="#" id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="text-capitalize"><?= $userData['name'] ?? "Admin" ?></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="bd-versions">
              <a class="dropdown-item" href="<?= site_url('profile') ?>">Profile</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="<?= site_url('logout') ?>">Logout</a>
            </div>
          </li>
        </ul>

            </nav>