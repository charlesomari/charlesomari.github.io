<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color:orange;
  margin-left: 300px;
  margin-right: 300px;
  width:40%;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 90%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin-left: 100px;
  border: none;
  cursor: pointer;
  width: 20%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

</style>
</head>
<body>


<form action="insert.php" method="POST">
  <div class="container">
    <h1>Register A New Student</h1>
   
    <hr>

    <label for="fname"><b>Fname</b></label>
    <input type="text" placeholder="Enter fname" name="fname" required>
    <label for="lname"><b>lname</b></label>
    <input type="text" placeholder="Enter lname" name="lname" required>
    <label for="sname"><b>Surname</b></label>
    <input type="text" placeholder="Enter Surname" name="Surname" required>
    <label for="gender"><b>Gender</b></label>
    <input type="text" placeholder=" select Gender" name="Gender" required></br>
     <label for="date of birth"><b>Date Of Birth</b></label>
    <input type="text" placeholder=" enter date of birth" name="date of birth" required>
    <label for="stream<"><b>Stream</b></label>
    <input type="text" placeholder="Enter stream<" name="stream<" required>

    <button type="submit" class="registerbtn">Register</button>
  </div>
  
  <div class="container signin">
  </div>
</form>

</body>
</html>
