<!DOCTYPE html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Styles --> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="/public/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" >
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <link  href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="/public/vendor/bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="/public/vendor/bootstrap/css/bootstrap.min.css" type="text/javascript"></script>
   
   <style>
.custom-sidebar-toggle {
    background-color: transparent;
    border: none;
    cursor: pointer;
    padding: 5px;
}

.custom-sidebar-toggle i {
    font-size: 24px; /* Adjust size as needed */
    color: white; /* Adjust color as needed */
    transition: transform 0.3s ease;
}



</style>
    <!-- Favicon -->
</head>
<body id="page-top">
<!-- Page Wrapper -->
<div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
`  <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center">
            <div class="sidebar-brand-icon rotate-n-15">
                <img src="/../public/img/rullz.jpg " height="65" width="65" style="border-radius: 50%; margin-top:5px;"></img>
            </div>
            <div class="sidebar-brand-text mx-2">Rullz Invent Sales</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">
        <!-- Nav Item - Dashboard -->
       
        <li class="nav-item">
                <a class="nav-link" href="<?= site_url('account') ?>">
                 <i class="fa fa-window-maximize"></i>Dashboard</a>
            </li>
        </li>

        <hr class="sidebar-divider my-1">

        <li class="nav-item">
        
        <a class="nav-link" href="<?= site_url('customer') ?>">
            <i class="fa fa-user-circle"></i>
            <span>Customer</span></a>     
        </li>

        <hr class="sidebar-divider my-1">

        <li class="nav-item">

        <a class="nav-link" href="<?= site_url('barang') ?>">
            <i class="fa fa-glass"></i>
            <span>Barang</span></a>     
        </li>
                <hr class="sidebar-divider my-1">

        <li class="nav-item">

        <a class="nav-link" href="<?= site_url('transaksi') ?>">
           <i class="fa fa-shopping-basket"></i>
            <span>Transaksi</span></a>     
        </li>
        <hr class="sidebar-divider my-1">
              <li class="nav-item">
                <a class="nav-link" href="<?= site_url('users') ?>"><i class="fa fa-street-view"></i>
            <span>User Customer</span></a>  
            </li>
            <hr class="sidebar-divider my-1">
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('users/logs') ?>"><i class="fa fa-info"></i>
            <span>Log</span></a>  
            </li>
            <hr class="sidebar-divider my-1">
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('settings') ?>"><i class="fa fa-cog"></i>
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
        <hr class=" d-none d-md-block">
        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
  <button class="border-0" id="sidebarToggleTop">
    <i class="fa fa-angle-left"></i>
</button>
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
         <li class="nav-item">
    <a class="nav-link dropdown-toggle mr-md-2" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="text-capitalize"><?= $userData['name'] ?? "Admin" ?></span>
    </a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="<?= site_url('profile') ?>"><i class="fa fa-user"></i> Profile</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="<?= site_url('logout') ?>"><i class="fa fa-sign-out"></i> Logout</a>
    </div>
</li>

        </ul>

            </nav>
            <!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fa fa-angle-up"></i>
</a>
<!-- Scripts -->
<script src="/public/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="/public/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="/public/js/sb-admin-2.min.js"></script>

</body>
</html>