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

     <div class="row" style="margin-top: 70px; margin-bottom: 100px;">
         <div class="container">
             <div class="col-sm-7">
                 <img src="img/signup_image.jpg" class="img img-responsive" style="margin:20px;" />
             </div>
             <div class="col-sm-4">
                 <h2>SIGN UP</h2>
                 <form action="signup_script.php" method="post">
                     <div class="form-group">
                         <input type="text" class="form-control" name="name" placeholder="Name" required="true">
                     </div>
                     <div class="form-group">
                         <input type="email" class="form-control" name="email" placeholder="E-mail" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                     </div>
                     <div class="form-group">
                         <input type="password" class="form-control" name="password" placeholder="Password" required="true" pattern=".{6,}">
                     </div>
                     <div class="form-group">
                         <input type="tel" class="form-control" name="contact" placeholder="Contact" required="true">
                     </div>
                     <div class="form-group">
                         <input type="text" class="form-control" name="city" placeholder="City" required="true">
                     </div>
                     <div class="form-group">
                         <input type="text" class="form-control" name="address" placeholder="Address" required="true">
                     </div>
                     <button type="submit" class="btn btn-primary" style="float: right">Submit</button>
                 </form>
             </div>
         </div>
     </div>



    <?php
        include ROOT.'includes/footer.php';
        ?>

    </body>
</html>
