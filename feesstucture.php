<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {width:100%;}
h2{
background-color: green;
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
width:500px;
float: left;
border-radius: 10px;
border: 2px solid #ccc;
padding: 10px 40px 25px;
margin-top: 0px;
margin-left:450px;
}

input[type=text],input[type=psw]{
width:99.5%;
padding: 10px;
margin-top: 8px;
border: 1px solid #ccc;
padding-left: 5px;
font-size: 16px;
font-family:raleway;
}
input[type=mks]{
	width:25%;
padding: 10px;
margin-top: 8px;
border: 1px solid #ccc;
padding-left: 5px;
font-size: 16px;}

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
<title>insert data</title>
</head>
<body>
<div id="login">
<h2>Fees structure Upload</h2>
<hr/>
<form action="" method="post">
 
<label>Year :</label>
<input type="text" name="year" id="year" required="required" placeholder="Please Enter the year"/><br /><br />
 <label> tuition :</label>
<input type="text" name="tuition" id="tuition" required="required" placeholder="enter tuition amount"/><br/><br />
<label>Food:</label>
<input type="text" name="tuition" id="tuition" required="required" placeholder="Please enter the tuition amount"/><br/><br />
<label>Others:</label>
<input type="text" name="others" id="others" required="required" placeholder="Please enter others amount"/><br/><br />
<label>Total:</label>
<input type="text" name="total" id="total" required="required" placeholder="Please enter total amount"/><br/><br />
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

$sql = "INSERT INTO fees ( year, tuition,food,others,total)
VALUES ('".$_POST["stu_admno"]."','".$_POST["year"]."','".$_POST["stream"]."','".$_POST["totalmarks"]."','".$_POST["totalgrade"]."')";

if ($conn->query($sql) === TRUE) {
echo "<script type= 'text/javascript'>alert('New results uploaded successfully');</script>";
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
