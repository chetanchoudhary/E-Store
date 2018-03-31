<?php

require 'common.php';
include 'login_modal.php';

 ?>


<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a href="index.php" class="navbar-brand" style="font-family: 'Acme', sans-serif; font-size: 35px;">E-Store</a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id = "myNavbar">
            <ul class="nav navbar-nav navbar-right">
              <?php if(isset($_SESSION['email'])) { ?>
                <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>

                <li><a href="settings.php"><span class="glyphicon glyphicon-user"></span> Settings</a></li>
                <li><a href="logout_script.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>


              <?php } else { ?>
                <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> SignUp</a></li>
                <li><a href="" data-toggle="modal" data-target="#login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <li><a href="about.php"><span class="glyphicon glyphicon-tasks"></span> About us</a></li>
                <li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> Contact us</a></li>

              <?php } ?>
            </ul>
        </div>
    </div>
</nav>
