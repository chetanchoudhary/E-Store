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
       
      <div class="row" style="margin-top : 70px">
          <div class="container">
              <div class="col-xs-9">
                  <h2>LIVE SUPPORT</h2>
                  <h4>24 Hours | 7 days a Week | 365 days a year Live Technical Support</h4>
                  <p>We put customer satisfaction first. It is important for us always to be available with efficient and prompt customer service. Click on "Live Chat" and you will be immediately connected to one of our supporters, without waiting time.</p>

<h4>Assistance in your language</h4>
<p>E-Store.com provides technical assistance in many different languages, and our English speaking live chat support is even available 24 hours all year round. Our live chat support is open in Swedish, Danish, Dutch, French and Norwegian on weekdays 9-18 (CET), and in German every day 9-21 (CET).</p>

<h4>Email Support</h4>
                  <p>Our email support answers all questions within 24 hours in English, Swedish, Danish, German, Dutch, French, Norwegian, Spanish, Portuguese and Italian.</p><br>
              </div>
              <div class="col-xs-3">
                  <img src="img/contact.png" class="img img-responsive" />
              </div>
          </div>
      </div>
      <div class="row" style="margin-bottom : 100px">
          <div class="container">
             <div class="col-xs-8">
                 <form>
                     <h2>CONTACT US</h2>
                     <div class="form-group">
                         <label for ="name">Name</label>
                         <input type="text" class="form-control" name="name">
                     </div>
                     <div class="form-group">
                         <label for ="email">E-mail</label>
                         <input type="email" class="form-control" name="email">
                     </div>
                     <div class="form-group">
                         <label for ="message">Message</label>
                         <textarea class="form-control" name="message" rows="6"></textarea>
                     </div>
                     <button type="submit" class="btn btn-primary">Submit</button>
                 </form>
             </div>
             <div class="col-xs-4">
                 <h2>Company Information:</h2>
                 E-Store Online Private Limited,<br><br>
                 T14, Goyal Complex Berasia Road,<br><br>
                 Bhopal, MP, India<br><br>
                 Phone: (+91) 738 951 7722<br> <br>
                 Email: info@estore.com<br><br>
                 Follow us on Twitter, Facebook, Instagram.
             </div>
              
          </div>
      </div>


        
    
    <?php
        include ROOT.'includes/footer.php';
        ?>
    
    </body>
</html>