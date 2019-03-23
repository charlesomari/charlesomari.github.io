<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color:grey;
  margin-left: 300px;
  margin-right: 300px;
  width:70%;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 35%;
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
.h{color:blue;}

/* Set a style for the submit button */
.sbtbtn {
  background-color: green;
  color: white;
  padding: 16px 20px;
  margin-left: 100px;
  border: none;
  cursor: pointer;
  width: 20%;
  opacity: 0.9;
}

.sbtbtn:hover {
  opacity: 1;
}

</style>
</head>
<body>

<form action="/action_page.php">
  <div class="container">
    <h1>Admin Results Upload</h1>
   
    <hr>

    <label for="Adm No"><b>Adm No</b></label>
    <input type="text" placeholder="Enter Adm No" name="Adm No" required>
    <label for="Stream"><b>Stream</b></label>
    <input type="text" placeholder="Enter Stream" name="Stream" required><br>
    <label for="Stream"><b>Year</b></label>
    <input type="text" placeholder="Enter Year" name="Year" required>
    <label for="Total Marks"><b>Total Marks</b></label>
    <input type="text" placeholder="Enter Total Marks" name="Total Marks" required><br>
    <label for="Total Grade"><b>Total Grade</b></label>
    <input type="text" placeholder="Enter Total Marks" name="Total Grade" required><br>
    
    
    <button type="submit" class="sbtbtn">Submit</button>
  </div>
  
  <div class="container signin">
  </div>
</form>

</body>
</html>
