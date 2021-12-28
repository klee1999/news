<?php 
  include_once 'config/myConfig.php'; 
  if (isset($_GET['page'])) {
    $page = $_GET['page'];
  }else{
    $page = 'home';
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>HYG - Phòng chống dịch covid-19</title>
  <link href="img/HYTV_logo_2020.png" rel="icon">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <link href="css/style.css" rel="stylesheet">
  <!-- Font Awesome JS -->
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous"> -->
  <!-- <script src="https://kit.fontawesome.com/6a6923a178.js" crossorigin="anonymous"></script> -->
  </head>

<body style="overflow: auto;">
  <div class="warpper">
    <?php include_once 'layout/header.php'; ?>
  </div>
  <!-- Content -->
  <div id="page-wrapper">
    <?php include_once 'layout/sidebar.php'; ?>
    <div id="content" >
      <?php  
          if (isset($_GET['page'])) {
              $page = $_GET['page'];
          }else{
              $page = 'home';
          }

          if (file_exists('views/'.$page.'.php')) {
              include_once 'views/'.$page.'.php';
          }else{
                header('Location: index.php');
          }
          
          // include_once 'layout/footer.php';
      ?>
        
    </div>
  </div>
<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

<script type="text/javascript" src="js/scripts.js"></script>

</body>
</html>
