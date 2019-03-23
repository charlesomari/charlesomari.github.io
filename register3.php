<?php include('db1.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>SIGN IN PAGE</title>
  <link rel="stylesheet" type="text/css" href="stylez.css">
  <style type="text/css">
  </style>
</head>
<body style="background-color: #7f8c8d;" >
	 
  <form id="loginform" method="post" action="teacherslogin.php">
    <h2  style="text-align:center;font-size:20px;">LOGIN HERE STAFF PLEASE</h2>
<center><img src="techer.png" width="150px" ></center>
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>TSC Number</label>
  		<input type="text" name="tscno" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
    <div style="float:right"><input type='checkbox' name="rem" value=''>Remember me</div><br></br>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">LOGIN</button>
  	</div>
    <div class="input-group">
      <button type="reset" class="btn" name="reset">RESET</button>
    </div>
  	<p>
  		 <a href="teachersacct.php">create an account</a>|| <a href="#">  forgot password?</a>
  	</p>
  </form>
  </body>
</html>
