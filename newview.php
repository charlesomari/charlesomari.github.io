<html>
<head>
<title>insert data</title>
<link rel="stylesheet" type="text/css" href="studentform.css">
</head>
<body>
<div id="login">
<h2>Student's Form</h2>
<hr/>
<form action="" method="post">
    <label>Student Adm No :</label>
<input type="text" name="stu_admno" id="admno" required="required" placeholder="enter adm no"/><br/><br />
<label>Student Name :</label>
<input type="text" name="stu_name" id="name" required="required" placeholder="Please Enter Name"/><br /><br />

<label>Gender :</label>
<input type="text" name="gender" id="gender" required="required" placeholder="Please Enter gender"/><br/><br />
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

$sql = "SELECT * FROM students WHERE student_name=?,student_admno=?, gender=?";
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

