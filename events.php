

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
width:20%;
padding: 10px;
margin-top: 8px;
border: 1px solid #ccc;
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
width: 30%;
background-color:#BD33A4;
color: white;
border: 2px solid #FFCB00;
padding: 10px;
font-size:20px;
cursor:pointer;
border-radius: 5px;
margin-left: 30%;
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
<h2>Lertz Events Form</h2>
<hr/>
<form action="" method="post">
<label>Date :</label>
<input type="text" name="date" id="date" required="required" placeholder="date"/>
<label>Event :</label>
<input type="evt" name="event" id="event" required="required" placeholder="Please enter the event"/><br/><br />
<input type="submit" value=" Upload Events " name="submit"/><br />

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

$sql = "INSERT INTO events (date,event)
VALUES ('".$_POST["date"]."','".$_POST["event"]."')";

if ($conn->query($sql) === TRUE) {
echo "<script type= 'text/javascript'>alert('New event uploaded successfully');</script>";
} else {
echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
}

$conn->close();
}
?>
</body>
</html>

