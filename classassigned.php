

<html>
<head>
<title>insert data</title>
<style type="text/css">
body{}
h2{
background-color: 	#00CC99;
text-align:center;
border-radius: 10px 10px 0 0;
margin: -10px -40px;
padding: 15px
}
#login{
width:400px;
float: left;
border-radius: 10px;
border: 2px solid #ccc;
padding: 10px 40px 25px;
margin-top: 20px;margin-bottom: 50px;
margin-left:350px;
}

input[type=text],input[type=email]{
width:50%;
padding: 10px;
margin-top: 8px;
border: 1px solid #ccc;
padding-left: 5px;
font-size: 16px;
}
input[type=evt]{
width:50%;
padding: 10px;
margin-top: 8px;
border: 1px solid #ccc;
padding-left: 5px;
font-size: 16px;
}

input[type=submit]{
width: 70%;
background-color:#E30022;
color: white;
border: 2px solid #FFCB00;
padding: 10px;
font-size:20px;
cursor:pointer;
border-radius: 5px;
margin-left: 15%;
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
<h2>Lertz Events Teachers Class Assignment Upload</h2>
<hr/>
<form action="" method="post">
<label>Teachers Name :</label>
<input type="text" name="teachers_name" id="tsname" required="required" placeholder="Enter teachers' name"/><br/><br />
<label>Class Assigned :</label>
<input type="evt" name="class asigned" id="class_asigned" required="required" placeholder="class asigned"/><br/><br />
<input type="submit" value=" Upload class assigned " name="submit"/><br />

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

$sql = "INSERT INTO classassignment (teachers_name,class_asigned)
VALUES ('".$_POST["teachers_name"]."','".$_POST["class_asigned"]."')";

if ($conn->query($sql) === TRUE) {
echo "<script type= 'text/javascript'>alert('assigned teacher class uploaded successfully');</script>";
} else {
echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
}

$conn->close();
}
?>
</body>
</html>

