<?php include('db.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>SIGN IN PAGE</title>
   <style type="text/css">
   .input-group {
  margin: 0px 10px 10px 10px;
}
.input-group label {
  display: block;
  text-align: left;
  margin: 3px;
}
.input-group input {
  height: 30px;
  width: 80%;
  margin-left: 20px;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}
.avater {
  width: 50%;
  border-radius: 50%;
  margin-left: 15px;
  height:150px;}
.btn {
  height: 30px;
  width: 40%;
  padding: 5px 10px;
  font-size: 16px;
  color: white;
  background: green;
  border: 1px solid black;
  border-radius: 5px;
  margin-left:20%;
}
#loginform {
 width:350px; 
   margin: 0 auto;
   padding: 5px;
     border-radius:20px 20px 20px 20px;
   border: 1px solid #2c3e50; 
   background-color: white;
   height: 580px; 
   margin-top: 20px;
}


  </style>
</head>
<body style="background-color: #7f8c8d;" >
	 
  <form id="loginform" method="post" action="login1.php">
    <h2  style="text-align:center;font-size:20px;">LOGIN HERE  ADMIN PLEASE</h2>
<center><img src="techer.png" class="avater" width="150px" ></center>
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>ID Number</label>
  		<input type="text" name="idno" >
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
  		 <a href="register1.php">create an account</a>|| <a href="#">  forgot password?</a>
  	</p>
  </form>
  </body>
</html>
