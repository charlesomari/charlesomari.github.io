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
margin-top: 20px;margin-bottom: 20px;
margin-left:300px;
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
input[type=btn]{
	width:80%;
padding: 10px;
margin-top: 8px;
border: 1px solid #ccc;
padding-left: 5px;
font-size: 16px;}


input[type=submit]{
width: 80%;
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
<h2>Class Overall Results Upload</h2>
<hr/>
<form action="" method="post">
<label>Year :</label>
     <select name="year" required autofocus>
	<option value"2019" >2019</option>
	<option value"2018">2018</option>
	<option value"2017">2017</option>
	<option value"2016">2016</option></select>
	<label>term :</label>
     <select name="term" required autofocus>
	<option value"term1" >Term 1</option>
	<option value"term2">Term 2</option>
	<option value"term3">Term 3</option>
	</select>
	<label>Stream :</label>
     <select name="stream" required autofocus>
	<option value"stream1a" >Stream 1A</option>
	<option value"stream1b">Stream 1B</option>
	<option value"stream2a">Stream 2B</option>
	<option value"stream1a" >Stream 2B</option>
	<option value"stream1b">Stream 3A</option>
	<option value"stream2a">Stream 3B</option>
	</select><br/><br />
<label>Total Students:</label>
<input type="mks" name="totalstudents" id="totalstudents" required="required" placeholder="total number of student"/>
<label>Average Math:</label>
<input type="mks" name="math" id="math" required="required" placeholder=" maths "/><br/><br />
<label>Average English:</label>
<input type="mks" name="english" id="english" required="required" placeholder=" English Results"/>
<label>Average kiswahili:</label>
<input type="mks" name="kiswa" id="kiswa" required="required" placeholder="kiswa results"/><br/><br />
<label>Average Physics:</label>
<input type="mks" name="physics" id="physics" required="required" placeholder="physics results"/>
<label>Average Chem:</label>
<input type="mks" name="chem" id="chem" required="required" placeholder="chem results"/><br/><br />
<label>Average C.R.E:</label>
<input type="mks" name="cre" id="cre" required="required" placeholder=" cre "/>
<label>AverageGeography:</label>
<input type="mks" name="geo" id="geo" required="required" placeholder="geo "/><br/><br />
<label>Average Biology:</label>
<input type="mks" name="bio" id="bio" required="required" placeholder="bio "/>
<label>Total Grade:</label>
<input type="mks" name="totalgrade" id="totalgrade" required="required" placeholder="Please enter total grade"/><br/><br />
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

$sql = "INSERT INTO class ( year,term, stream, totalstudents,  math, english, kiswa, physics,chemistry,cre,geography,biology,totalgrade)
VALUES ('".$_POST["year"]."','".$_POST["term"]."','".$_POST["stream"]."','".$_POST["totalstudents"]."','".$_POST["math"]."','".$_POST["english"]."',
	'".$_POST["kiswa"]."','".$_POST["physics"]."','".$_POST["chem"]."','".$_POST["cre"]."','".$_POST["geo"]."',
	'".$_POST["bio"]."','".$_POST["totalgrade"]."')";

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
