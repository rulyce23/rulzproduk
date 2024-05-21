<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="rulzco">
    <meta name="generator" content="">
    <!-- load extended styles -->
    <?= $this->renderSection('style') ?>

    <!-- default styles  -->
    <script src="vendor/jquery/jquery.min.js" ></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="js/sb-admin-2.min.js"></script>
</head>

<body class="bg-light">
    <!-- load extended modals -->
    <?= $this->renderSection('modals') ?>
    <!-- navbar -->
    <?= view('App\Views\components\navbar') ?>
    <main role="main" class="container">
      <!-- notifications -->
      <?= view('App\Views\components\notifications') ?>
      <!-- load content from other views -->
      <?= $this->renderSection('main') ?>
    </main>

    <script src="vendor/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="vendor/datatables/datatables.min.js" type="text/javascript"></script>
   
    <!-- inline js code -->
    <script type="text/javascript">
        $('#dataTables-table').DataTable({responsive: true,pageLength: 15,lengthChange: false,searching: true,ordering: true});
    </script>
    
    <!-- load extended scripts -->
    <?= $this->renderSection('script') ?>
</body>

</html>