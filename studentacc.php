<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body 
h2{
background-color: #FEFFED;
text-align:center;
border-radius: 10px 10px 0 0;
margin: -10px -40px;
padding: 15px;
}

hr{
border:0;
border-bottom:1px solid #ccc;
margin: 10px -40px;
margin-bottom: 30px;
}

#login{
width:600px;
float: left;
border-radius: 10px;
border: 2px solid #ccc;
padding: 10px 40px 25px;
margin-top: 0px;
margin-left:250px;
}

input[type=text],input[type=email]{
width:99.5%;
padding: 10px;
margin-top: 8px;
border: 1px solid #ccc;
padding-left: 5px;
font-size: 16px;
font-family:raleway;
}

input[type=submit]{
width: 100%;
background-color:#FFBC00;
color: white;
border: 2px solid #FFCB00;
padding: 10px;
font-size:20px;
cursor:pointer;
border-radius: 5px;
margin-bottom: -12px;
}

/*-----------------------------------------------------------------
css settings for right side advertisement
------------------------------------------------------------------*/
#formget{
float:right;
}

</style>
</head>
<body>

<html>
<head>
<title>insert data</title>
<link rel="stylesheet" type="text/css" href="studentform.css">
</head>
<body>
<div id="login">
<h2>Student's Account Form</h2>
<hr/>
<form action="" method="post">
  <label>Student Adm No :</label>
<input type="text" name="stu_admno" id="admno" required="required" placeholder="enter adm no"/><br/><br />
<label>Student Name :</label>
<input type="text" name="stu_name" id="name" required="required" placeholder="Please Enter Name"/><br /><br />

<label>Gender :</label>
<input type="text" name="gender" id="gender" required="required" placeholder="Please Enter gender"/><br/><br />
<label>Date of birth :</label>
<input type="text" name="dob" id="dob" required="required" placeholder="please enter date of birth"/><br/><br />
<label>Location :</label>
<input type="text" name="location" id="location" required="required" placeholder="Please Enter location"/><br/><br />
<label>stream :</label>
<input type="text" name="stream" id="stream" required="required" placeholder="Please Enter stream allocated"/><br/><br />
<input type="submit" value=" Submit " name="submit"/><br />
</form>
</div>
<!-- Right side div -->
<div id="formget">
</div>

</div>
<?php
if(isset($_POST["submit"])){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO students (student_name, student_admno, gender,dob,location,stream)
VALUES ('".$_POST["stu_name"]."','".$_POST["stu_admno"]."','".$_POST["gender"]."','".$_POST["dob"]."',
  '".$_POST["location"]."','".$_POST["stream"]."')";

if ($conn->query($sql) === TRUE) {
echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
} else {
echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
}

$conn->close();
}
?>
</body>
</html>



</body>
</html>
