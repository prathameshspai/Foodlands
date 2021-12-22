<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="vossamcss.css">
	<title>Foodlands Registration</title>
    
	<style>
    .reg {
    text-align: center; 
    font-size: 40px !important;
	font-size:20px;
	margin-top: 8% !important;
  }

  input[type=text] {
    width: 30%;
    padding: 12px 20px;
  	margin-left: 35% !important;
    margin: 8px 0;
	font-size:15px;
    box-sizing: border-box;
    border: 2px solid red;
    border-radius: 4px;
  }
  input[type=email] {
    width: 30%;
    padding: 12px 20px;
    margin: 8px 0;
	font-size:15px;
	margin-left: 35%;
    box-sizing: border-box;
    border: 2px solid red;
    border-radius: 4px;
  }
  
   button[type=submit] {
    width: 30%;
    padding: 12px 20px;
    margin: 8px 0;
	font-size:15px;
	margin-left: 35%;
    box-sizing: border-box;
    border: 2px solid rgb(0, 0, 0);
    background-color: rgb(0, 132, 255);
    border-radius: 4px;
    color: white;
  }
   input[type=password] {
    width: 30%;
    padding: 12px 20px;
	font-size:15px;
    margin: 8px 0;
	margin-left: 35%;
    box-sizing: border-box;
    border: 2px solid red;
    border-radius: 4px;
  }
  
	</style>
</head>

<body style="background-image: url('backkl.png'); background-repeat: no-repeat; background-size: 100% 125%;">

<div class="reg">
		<p >Register</p>
	</div>
	
	<form method="post" action="register.php" >



		<div >
			<input type="text" name="username" placeholder="Name"  value="<?php echo $username; ?>">
		</div>
		<div >
		
			<input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>">
		</div>
		<div >
		
			<input type="password" placeholder="Password" name="password_1">
		</div>
		<div >
			<input type="password" placeholder="Confirm Password" name="password_2">
		</div>
		<div >
			<input type="text" placeholder="Phone number" name="phoneno">
		</div>
		<div >
			<input type="text" placeholder="Address" name="address">
		</div>
		<div >
			<button type="submit" name="reg_user">Register</button>
		</div>
		<p style="margin-left: 43%">
			<b>Already a member? <a href="login.php">Sign in</a><b>
		</p>
		<div style="margin-left: 41.5%; color: red;">
		<?php include('errors.php'); ?>
		</div>
	</form>
</body>
</html>