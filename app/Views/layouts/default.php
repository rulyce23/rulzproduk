<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="rulzco">
    <meta name="generator" content="">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
	<link href="css/sb-admin-2.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   

    <!-- load extended styles -->
    <?= $this->renderSection('style') ?>

    <!-- default styles  -->

</head>
<?= view('App\Views\components\navbar') ?>

<body class="bg-light">
    <!-- navbar -->
 
    <main role="main" class="container">
      <!-- notifications -->
      <?= view('App\Views\components\notifications') ?>

      <!-- load content from other views -->
      <?= $this->renderSection('main') ?>
    </main>

    <script src="vendor/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="vendor/jquery/jquery.min.js" ></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="js/sb-admin-2.min.js"></script>
    <!-- load extended scripts -->
    <?= $this->renderSection('script') ?>
</body>

</html>