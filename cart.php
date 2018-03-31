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
      include ROOT.'includes/header.php';
        ?>

        <?php
$user_id = $_SESSION['id'];
$select_query= "SELECT * FROM users_items INNER JOIN items ON users_items.item_id = items.id WHERE user_id = '$user_id' and status = 'Added to cart'";
$select_query_result = mysqli_query($con, $select_query);
$rows = mysqli_num_rows($select_query_result);

$sum = 0;
$itemno = 1;
if ($rows == 0){
   header('location: no_items.php');
}
?>




    <?php
        include ROOT.'includes/footer.php';
        ?>
          <div class = "row">

            <div class= "container" style="margin: 100px" >

                <?php
                        echo '<table class= "table">';
                            echo '<tr>';
                              echo '<th>'."Item Number".'</th>';
                              echo '<th>'."Name".'</th>';
                              echo '<th>'."Price".'</th>';
                              echo '<th>'."".'</th>';
                            echo '</tr>';


                              while ($array = mysqli_fetch_array($select_query_result)) {
                                echo '<tr>';
                                      echo '<td>'.$itemno.'</td>';
                                      echo '<td>'.$array['name'].'</td>';
                                      echo '<td>'.$array['price'].'</td>';
                                      echo '<td>'."<a href='cart-remove.php?id={$array['id']}' class='remove_item_link btn btn-danger'>Remove</a>".'</td>';
                                echo '</tr>';

                                  $sum += $array['price'];
                                  $itemno += 1;
                              }
                              echo '<tr>';

                                      echo '<th>'."".'</th>';
                                     echo '<th>'."Total".'</th>';
                                     echo '<th>'."Rs.". $sum .'</th>';
                                     echo '<th>'."<a href='success.php?id={$_SESSION['id']}' class='btn btn-primary'>Confirm Order</a>".'</th>';


                                echo '</tr>';
                        echo '</table>';

                 ?>

      </div>
</div>
    </body>
</html>
