<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Foodlands</title>
    <br>
    <br>
</head>
<style>
    .reg {
    text-align: center; 
    font-size: 49px !important;
	font-size:25px;
	margin-top: 8% !important;
  }
      .text {
    width: 30%;
    padding: 12px 20px;
  	margin-left: 35% !important;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid red;
    font-size: 20px;
    border-radius: 4px;
  }
  input[type=email] {
    width: 30%;
    padding: 12px 20px;
    margin: 8px 0;
	font-size: 200px !important;
	margin-left: 32%;
    box-sizing: border-box;
    border: 2px solid red;
    border-radius: 4px;
  }
  
   button[type=submit] {
    width: 30%;
    padding: 12px 20px;
    margin: 8px 0;
	margin-left: 35%;
    font-size: 20px;
    box-sizing: border-box;
    border: 2px solid rgb(0, 0, 0);
    background-color: rgb(0, 132, 255);
    border-radius: 4px;
    color: white;
  }
   input[type=password] {
    width: 30%;
    padding: 12px 20px;
    font-size: 20px;
    margin: 8px 0;
	margin-left: 35%;
    box-sizing: border-box;
    border: 2px solid red;
    border-radius: 4px;
  }
    </style>
<body style="background-image: url('backkl.png'); background-repeat: no-repeat; background-size: 100% 128%;">

	<div class="reg">
		<p> Login</p>
	</div>
	
	<form method="post" action="login.php">



		<div >
		
			<input type="text" class="text" name="username" placeholder="Username">
		</div>
		<div >
		
			<input type="password" name="password" placeholder="Password">
		</div>
		<div>
			<button type="submit" name="login_user">Submit</button>
		</div>
        <br>
		<p style="margin-left: 42.5%; font-size: 18px;">
		<b>	Not yet a member? <a href="register.php">Sign up</a></b>
		</p>
        <div style="margin-left: 42.5%;color:red">
        <?php include('errors.php'); ?>
</div>
	</form>


</body>
</html>