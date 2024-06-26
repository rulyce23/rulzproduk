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
    <link rel="stylesheet" href="/../vendor/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="/../vendor/fontawesome/css/solid.min.css">
    <link rel="stylesheet" href="/../vendor/fontawesome/css/brands.min.css">
    <link rel="stylesheet" href="/../vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/../vendor/datatables/datatables.css">
    <link rel="stylesheet" href="/../css/starter-template.css">
</head>

<body class="bg-light">
    <!-- load extended modals -->
    <?= $this->renderSection('modals') ?>

    <!-- navbar -->

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