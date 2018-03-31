<?php
define('ROOT', './');
    require ROOT.'includes/common.php';
    if(!isset($_SESSION['email'])){
        header('location: index.php');
    }
$user_id = $_GET['id'];
$update_query = "UPDATE users_items SET status = 'Confirmed' WHERE user_id = '$user_id'";
$update_query_result = mysqli_query($con, $update_query);
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

        <div class="container" style="margin-top: 100px">
             <div class="jumbotron">
                 <center><h2>Success!</h2>
                 <h4>Thank-you for ordering from E-Store. The order shall be delivered to you shortly.</h4><br>
                 Order some more Electronic items <a href="home.php" style="color: blue;">here</a>.</center>
             </div>


             </div>



    <?php
        include ROOT.'includes/footer.php';
        ?>

    </body>
</html>
