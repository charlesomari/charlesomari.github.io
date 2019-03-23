<?php include('db2.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>SIGN UP PAGE</title>
  <style>
body {font-family: Arial,
  Helvetica, sans-serif;}

    .input-group {
  margin: 0px 10px 10px 10px;
}
.input-group label {
  display: block;
  text-align: left;
  margin: 3px;
}
.avater {
  width: 50%;
  border-radius: 50%;
  margin-left: 15px;
  height:150px;
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
.btn {
  height: 30px;
  width: 50%;
  padding: 5px 10px;
  font-size: 16px;
  color: white;
  background: blue;
  border: 1px solid black;
  border-radius: 5px;
  margin-left:20%;
}
#loginform {
 width:350px; 
   margin: 0 auto;
   padding: 5px;
   border-radius:15px 15px 10px 10px;
   border: 1px solid #2c3e50; 
   background-color: white;
   height: 500px; 
   margin-top: 20px;
}

#registerform{
width:500px; 
   margin: 0 auto;
   padding: 5px;
     border-radius:15px 15px 10px 10px;
   border: 2px solid green; 
   background-color: white;
   height: 620px; 
   margin-top: 10px;
 }
   </style>

</head>
<body style="background-color:#7f8c8d;">
  
  <form id="registerform" method="post" action="">
    <h2  style="text-align:center;font-size:20px;">STUDENT ACCOUNT</h2>
    <center><img src="techer.png" width="150px" class="avater" ></center>
    <?php include('errors.php'); ?>
    <div class="input-group">
      <label>ADM Number*</label>
      <input type="text" name="admno" value="<?php echo $admno; ?>" required autofocus >
    </div>
    <div class="input-group">
      <label>Username*</label>
      <input type="text" name="username" value="<?php echo $username; ?>" required autofocus>
    </div>
    <div class="input-group">
      <label>Password*</label>
      <input type="password" name="password_1" required autofocus>
    </div>
    <div class="input-group">
      <label>Confirm password*</label>
      <input type="password" name="password_2" required autofocus>
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="reg_user">REGISTER</button>
    </div>
     <div class="input-group">
      <button type="reset" class="btn" name="reset">RESET</button>
      <p>
      Existing Student?<a href="studentlogin.php">Login</a>
    </p>
    </div>
    

  </form>
  </body>
</html>