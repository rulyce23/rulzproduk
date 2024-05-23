
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <link rel="stylesheet" href="<?= base_url('vendor/fontawesome/css/fontawesome.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('vendor/fontawesome/css/solid.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('vendor/fontawesome/css/brands.min.css'); ?>">
    <style>
        .card-center {
            display: float;
            justify-content: center;
            align-items: center;
        }

        .card-body {
            padding: 2rem;
        }

        .icon-container {
            display: float;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .icon-container i {
            font-size: 4rem;
            color: #d1d3e2;
        }
    </style>
</head>

<body>
    <!-- main navigation -->
    <?= view('App\Views\components\navbar') ?>
    <div class="container mt-4">
        <div class="row">
            <main role="main" class="col-12">
                <!-- Earnings (Monthly) Card Example -->
                <div class="row">
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body card-center">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Customer
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?= $allcust; ?>
                                        </div>
                                    </div>
                                    <div class="col-auto icon-container"  style="margin-right:-150">
                                           &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<i class="fas fa-calendar"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body card-center">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Barang
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?= $allbarang; ?>
                                        </div>
                                    </div>
                                    <div class="col-auto icon-container"  style="margin-right:-150" >
                                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fas fa-dollar-sign"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-4 col-md-12 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body card-center">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                            Transaksi
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?= $alltrans; ?>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="col-auto icon-container" style="margin-right:-150">
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-dollar-sign" style="margin-right:-50"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            </main>
        </div>
    </div>

    <footer>
        <div class="copyrights">
            <center>
               <p class="mb-2 mt-2">&copy; <?= date('Y') ?><a href="http://portorulyrp.kesug.com">  Rulz.co</a></p>
        </center>
        </div>
    </footer>

    <script src="<?= base_url("vendor/jquery/jquery.min.js") ?>" type="text/javascript"></script>
    <script src="<?= base_url("vendor/bootstrap/js/bootstrap.bundle.min.js") ?>" type="text/javascript"></script>
        <script src="<?= base_url("vendor/jquery/jquery.min.js")?>" type="text/javascript"></script>
   <script src="<?= base_url("vendor/bootstrap/js/bootstrap.min.js")?>"</script>
   <script src="<?= base_url("js/sb-admin-2.min.js")?>"</script>

</body>

</html>

 