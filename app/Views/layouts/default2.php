<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="rulzco">
    <meta name="generator" content="">
    <!-- load extended styles -->
  
    <!-- default styles  -->
<script src="http://rulzproduk.kesug.com/public/vendor/jquery/jquery.min.js" ></script>
<script src="http://rulzproduk.kesug.com/public/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="http://rulzproduk.kesug.com/public/js/sb-admin-2.min.js"></script>

    <script src="http://rulzproduk.kesug.com/public/vendor/datatables/datatables.min.js" type="text/javascript"></script>

</head>

<body class="bg-light">
    <!-- load extended modals -->
    <?= $this->renderSection('modals') ?>
    <!-- navbar -->
    <?= view('App\Views\components\navbar2') ?>
    <main role="main" class="container">
        <?= view('App\Views\components\notifications2') ?>

      <!-- load content from other views -->
      <?= $this->renderSection('main') ?>
    </main>

   
    <!-- inline js code -->
    <script type="text/javascript">
        $('#dataTables-table').DataTable({responsive: true,pageLength: 15,lengthChange: false,searching: true,ordering: true});
    </script>
    
    <!-- load extended scripts -->
    <?= $this->renderSection('script') ?>
</body>

</html>