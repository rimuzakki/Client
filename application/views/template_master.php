<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Navbar Template for Bootstrap</title>

    <!-- Materialize core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/materialize.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/css/fontawesome-all.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/css/navbar.css" rel="stylesheet">

  </head>

  <body>
    <div class="navbar-fixed">
      <nav>
        <div class="container">
          <div class="nav-wrapper">
            <a href="<?php echo base_url(); ?>" class="brand-logo center">Dashboard</a>
            <a href="#" data-target="slide-out" class="sidenav-trigger show-on-large"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="right hide">
                <li>
                  <?php echo anchor('customer', 'Home', 'class="nav-link"'); ?>
                </li>
                <li class="nav-item">
                  <?php echo anchor('customer', 'list', 'class="nav-link"'); ?>
                </li>
                <li>
                  <?php echo anchor('customer/add', 'Entry', 'class="nav-link"'); ?>
                </li>
            </ul>
          </div>
        </div>
      </nav>

    </div>
      <ul class="sidenav" id="slide-out">
        <li>
          <?php echo anchor('customer', 'Home', 'class="nav-link"'); ?>
        </li>
        <!-- <li class="nav-item">
          <?php echo anchor('customer', 'list', 'class="nav-link"'); ?>
        </li> -->
        <li>
          <?php echo anchor('customer/add', 'Entry', 'class="nav-link"'); ?>
        </li>
      </ul>


    <div class="container">
      <div class="row">
        <div class="col m12">
          <?php echo $contents; ?>
        </div>
      </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"><\/script>')</script>
    <script src="<?php echo base_url(); ?>assets/js/materialize.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/style.js"></script>
  </body>
</html>
