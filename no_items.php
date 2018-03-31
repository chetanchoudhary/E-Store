<?php

define('ROOT', './');
require ROOT.'includes/common.php';

if (!isset($_SESSION['email'])) {
 header('location: index.php');
}


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
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
    <style>
        p{font-family: 'Roboto', sans-serif;}
        .p1{font-family: 'Roboto', sans-serif;}
    </style>

    </head>
    <body>

   <?php
        define('ROOT', './');
        include ROOT.'includes/header.php';
        ?>

        <div class="container">
            <center>   <div class="jumbotron" style="margin: 100px">
                   <h3>ADD items to cart first.<a href="home.php" style="color: blue;">Click here</a></h3>
                   <p>Your cart is Empty :(</p>
               </div></center>
           </div>



    <?php
        include ROOT.'includes/footer.php';
        ?>

    </body>
</html>
