<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<?php
//include 'router.php';
include 'classes/Page.php';
if (isset($_GET['activePage'])){
$_SESSION['activePage'] = $_GET['activePage'];
}
$website = new Page;
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Phonetics & Phonology</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <link rel="stylesheet" href="style.css">
  <!-- jQuery library -->

  <script>
      $(document).ready(function () {
          $('.dropdown-toggle').dropdown();
      });
  </script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      <a class="navbar-brand glyphicon glyphicon-home" href="router.php?activePage=10"></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="router.php?activePage=1">About</a></li>
          <li><a href="router.php?activePage=2">Pre-fortis Clipping</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#" class="disabled">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Separated Link</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Link</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Separated link</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>



  <!-- Fixed navbar -->


  <div class="container">
    <?php


    //routing switch
    if(isset($_SESSION['activePage'])){
              switch ($_SESSION['activePage']) {
                case 10:
                    include 'landingPage.php';
                    break;
                case 1:
                    include 'about.php';
                    break;
                case 2:
                    include 'prefortis.php';
                    break;
            }
    }else {
      include 'landingPage.php';
    }
    ?>
</div>


<footer class="footer">
    <div class="container">
      <p class="text-muted text-center">This Web is the creation of Radislav Šplíchal and Jakub Krejčí. All Rights Reserverd. This Webpage is under construction. This Website uses Cookies. </p>
    </div>
</footer>


</body>
</html>
