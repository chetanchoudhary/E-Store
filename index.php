<?php

define('ROOT', './');
require ROOT.'includes/common.php';

if (isset($_SESSION['email'])) {
  header('location: home.php');
}

include ROOT.'includes/login_modal.php';
 ?>


<html>
<head>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="includes/footer.css">
        <title>E-Store</title>
    <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">

    </head>
    <body>

   <?php
        define('ROOT', './');
        include ROOT.'includes/header.php';
        ?>

      <div class="container-fluid" style="margin-top:70px; margin-bottom:100px">
          <div class="row">
             <div class="col-md-4 col-sm-6">
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <h5>Apple IphoneX</h5>
                  </div>
                  <div class="panel-body">
                     <div class="thumbnail">
                      <img src="img/apple.jpeg" class="img-responsive" />
                      <div class="caption">
                      5.8", A11 Bionic Chip, 128 GB ROM,(12+12)mp Camera, Rs. 89000/-
                      </div>
                 </div>
                 <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#login">Order Now!</button>
                  </div>

              </div>
          </div>

             <div class="col-md-4 col-sm-6">
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <h5>MI MIX-2</h5>
                  </div>
                  <div class="panel-body">
                     <div class="thumbnail">
                      <img src="img/mi-mi-mix-2.jpeg" class="img-responsive" />
                      <div class="caption">
                    5.99" Display, 6 GB RAM, 128 GB ROM, 12MP Rear Camera, QS 835 OctaCore Chip, Rs. 32999/-
                      </div>
                 </div>
                 <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#login">Order Now!</button>
                  </div>

              </div>
          </div>

             <div class="col-md-4 col-sm-6">
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <h5>MOTO G5</h5>
                  </div>
                  <div class="panel-body">
                     <div class="thumbnail">
                      <img src="img/motorola-moto-g5.jpeg" class="img-responsive" />
                      <div class="caption">
                      5.2" Display, 4 GB RAM, 32 GB ROM, 12MP Rear Camera, QS 625 Octa Core 2GHz Processor, Rs. 13999/-
                      </div>
                 </div>
                 <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#login">Order Now!</button>
                  </div>

              </div>
          </div>

          </div>



          <div class="row">
             <div class="col-md-4 col-sm-6">
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <h5>REDMI NOTE 4</h5>
                  </div>
                  <div class="panel-body">
                     <div class="thumbnail">
                      <img src="img/redmi.jpeg" class="img-responsive" />
                      <div class="caption">
                    5.5" Display, 4 GB RAM, 64 GB ROM, 13MP Rear Camera, QS 625 Octa Core 2GHz Processor, Rs. 11999/-
                      </div>
                 </div>
                 <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#login">Order Now!</button>
                  </div>

              </div>
          </div>

             <div class="col-md-4 col-sm-6">
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <h5>SAMSUNG S7</h5>
                  </div>
                  <div class="panel-body">
                     <div class="thumbnail">
                      <img src="img/samsung.jpeg" class="img-responsive" />
                      <div class="caption">
                      5.1" Display, 4 GB RAM, 32 GB ROM, 12MP Rear Camera, Exynos 2.3GHz Processor, Rs. 30000/-
                      </div>
                 </div>
                 <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#login">Order Now!</button>
                  </div>

              </div>
          </div>

             <div class="col-md-4 col-sm-6">
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <h5>SONY XPERIA R1</h5>
                  </div>
                  <div class="panel-body">
                     <div class="thumbnail">
                      <img src="img/sony.jpeg" class="img-responsive" />
                      <div class="caption">
                    5.2" Display, 3 GB RAM, 32 GB ROM, 13MP Rear Camera, QS 430 64-bit Processor, Rs. 15000/-
                      </div>
                 </div>
                 <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#login">Order Now!</button>
                  </div>

              </div>
          </div>

          </div>


          </div>







    <?php
        include ROOT.'includes/footer.php';
        ?>

    </body>
</html>
