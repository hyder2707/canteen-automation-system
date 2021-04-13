<?php  
session_start(); 
if(isset($_SESSION['admin_sid']) || isset($_SESSION['customer_sid']))
{
	header("location:index.php");
}
else{
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <title>Login</title>
  <script src="https://kit.fontawesome.com/177c91fb35.js" crossorigin="anonymous"></script>


  <!-- Favicons-->
  <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->


  <!-- CORE CSS-->
  
  <!-- <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"> -->
  <!-- <link href="css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection"> -->
    <!-- Custome CSS-->    
    <link rel="stylesheet" href="ss.css">

    <!-- <link href="css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="css/layouts/page-center.css" type="text/css" rel="stylesheet" media="screen,projection"> -->
  

  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" id="bootstrap-css">

  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <style>
    .button{
      text-align: center;
    }
  </style>
</head>

<body class="cyan">
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->
<p class="h1 text-center mb-5 p-3">Canteen Automation system</p>


<div class="cont">
<form method="POST" action="routers/router.php" id="form">
  <div class="form sign-in text-center">
    <h2>Login</h2>
    <label>
      <span>Username</span>
      <input type="text" name="username" id="username" />
    </label>
    <br>
    <label>
      <span>Password</span>
      <input type="password" name="password" id="password" />
    </label>
    <br>
    <button type="submit" class="submit m-0 mx-auto mt-5">Sign In</button>
  </div>
  </form>
  <div class="sub-cont text-center">
    <div class="img">
      <div class="img__text m--up">
        <h2>New here?</h2>
        <p>Sign up and discover great amount of new opportunities!</p>
      </div>
      <div class="img__text m--in">
        <h2>One of us?</h2>
        <p>If you already has an account, just sign in. We've missed you!</p>
      </div>
      <div class="img__btn text-center">
        <span class="m--up">Sign Up</span>
        <span class="m--in">Sign In</span>
      </div>
    </div>
    <div class="form sign-up text-center">
    <form action="routers/register-router.php" novalidate="novalidate" id="formValidate" method="POST" id="form">
      <h2>Registration</h2>
      <label>
        <span>Username</span>
        <input type="text" id="username" name="username" data-error=".errorTxt1" />
      </label>
      <br>
      <label>
        <span>Name</span>
        <input type="text" id="name" name="name" data-error=".errorTxt2" />
      </label>
      <br>
      <label>
        <span>Password</span>
        <input type="password" name="password" id="password" data-error=".errorTxt3" />
      </label>
      <br>
      <label>
        <span>Phone</span>
        <input type="tel" name="phone" id="phone" />
      </label>
      
      
      <button type="submit" class="submit m-0 mx-auto mt-5">Sign Up</button>
    </div>
  </div>
</div>

<a href="https://instagram.com/hyder_khokhawala" target="_blank" class="icon-link">
  <i class="fab fa-instagram fa-2x"></i>
</a>
<a href="https://instagram.com/_lateefshaikh_" target="_blank" class="icon-link icon-link--twitter">
  <i class="fab fa-instagram fa-2x"></i>
</a>

  <!-- ================================================
    Scripts
    ================================================ -->

  <!-- jQuery Library -->
  <script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>
  <!--materialize js-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <!--scrollbar-->
  <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

      <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="js/custom-script.js"></script>
    <script type="text/javascript" src="js/js.js"></script>




</body>
</html>
<?php
}
?>