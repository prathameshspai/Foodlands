<?php 
      session_start(); 
    
      if (!isset($_SESSION['username'])) { //
      	$_SESSION['msg'] = "You must log in first";
      	header('location: login.php');//
      }
      if (isset($_GET['logout'])) {
      	session_destroy();
      	unset($_SESSION['username']);
      	header("location: login.php");
      }
    ?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="vossamcss.css">
    <title>Home Page</title>

    <style>
        body{background-image: url("vbh.png");}

    </style>
    
</head>
<body style="background-size: 100%;">

<div>
<?php if (isset($_SESSION['success'])) : ?>
  <div class="error success" >
    <h3>
      <?php 
      //  echo $_SESSION['success']; 
        unset($_SESSION['success']);
      ?>
    </h3>
  </div>
<?php endif ?>

<!-- logged in user information -->
<?php  if (isset($_SESSION['username'])) : ?>
  <p style="float:right;">  </p>
<?php endif ?>
</div>
    <button class="buttonc" style="float: right; margin-right: 0px; margin-bottom: 10px; margin-top: 10px;"> <span><a href="index.php?logout='1'" style="background-color: transparent; color: #000; text-decoration: none;">Logout</a> </span> </button>
<button class="buttonc" style=" float: right;  margin-bottom: 10px; margin-top: 10px; margin-right:0px"> <span><a href="index.php?logout='1'" style="background-color: transparent !important; color: #000; text-decoration: none;">Sign in</a> </span> </button>
    <button class="buttonc" style=" float: right;  margin-bottom: 10px; margin-top: 10px;"> <span><a href="contact.html" style="color: #000; text-decoration: none;">Contact</a> </span> </button>
       

<!-- notification message -->


    <img src="vossomtrans.png" width="16.5%" height="10%" style="margin-top: 0.25%;">
    <img src="vivooppomi.png" style="margin-left: 23%; margin-top: 0.5%; "  width=53% height="23%" >
    </div>
	
</body>

</html>

