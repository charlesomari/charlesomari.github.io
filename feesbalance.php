

<html>
<head>
<title>insert data</title>
<style type="text/css">
body{}
h2{
background-color:#536872;
text-align:center;
border-radius: 10px 10px 0 0;
margin: -10px -40px;
padding: 15px
}
#login{
width:600px;
float: left;
border-radius: 10px;
border: 2px solid #ccc;
padding: 10px 40px 25px;
margin-top: 40px;margin-bottom: 40px;
margin-left:250px;
}

input[type=text],input[type=email]{
width:50%;
padding: 10px;
margin-top: 8px;
border: 2px solid #ccc;
padding-left: 5px;
font-size: 16px;
font-family:raleway;
}
input[type=evt]{
width:50%;
padding: 10px;
margin-top: 8px;
border: 1px solid #ccc;
padding-left: 5px;
font-size: 16px;
height:10%;
}

input[type=submit]{
width: 40%;
background-color:#BD33A4;
color: white;
border: 2px solid #FFCB00;
padding: 10px;
font-size:20px;
cursor:pointer;
border-radius: 5px;
margin-top: 10%;
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
<div id="login">
<h2>Balance UpdateForm</h2>
<hr/>
<form action="" method="post">
<label>ADM No :</label>
<input type="text" name="admno" id="admno" required="required" placeholder="admno"/></select><br/><br 
<label>Year :</label>
<select name="year" required autofocus>
	<option value"2019">2019</option>
	<option value"2019">2020</option>
	<option value"2019">2021</option>
	<option value"2019">2022</option></select>
<label>Term :</label>
<select name="term" required autofocus>
	<option value"term1">Term 1</option>
	<option value"term2">Term 2</option>
	<option value"term3">Term 3</option>
	</select><br/><br> 
<label>Fee balance :</label>
<input type="text" name="bal" id="bal" required="required" placeholder="balance"/>
<input type="submit" value=" Upload Balance " name="submit"/><br/><br>

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

$sql = "INSERT INTO feesbal (admno,year,term,bal)
VALUES ('".$_POST["admno"]."','".$_POST["year"]."','".$_POST["term"]."','".$_POST["bal"]."')";

if ($conn->query($sql) === TRUE) {
echo "<script type= 'text/javascript'>alert('balance uploaded successfully');</script>";
} else {
echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
}

$conn->close();
}
?>
</body>
</html>

