<?php
session_start();

// initializing variables
$admno = "";
$username    = "";
$errors = array(); 

$db = mysqli_connect('localhost', 'root', '', 'project');

// registration form phpside
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $admno = mysqli_real_escape_string($db, $_POST['admno']);
  $username= mysqli_real_escape_string($db, $_POST['username']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($admno)) { array_push($errors, "admno Number is required"); }
  if (empty($username)) { array_push($errors, "Usename is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  
  $user_check_query = "SELECT * FROM students WHERE username='$username' OR admno='$admno' LIMIT 1";//verify that only one user exists with the same employeenumber
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['admno'] === $admno) {
      array_push($errors, "admno Number already exists");
    }

    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO students (admno, username, password) 
  			  VALUES('$admno', '$username', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "";
  	header('location: studentlogin.php');
  }
}

//userlogin

if (isset($_POST['login_user'])) {
  $admno = mysqli_real_escape_string($db, $_POST['admno']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($admno)) {
    array_push($errors, "admno Number is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM students WHERE admno='$admno' AND password='$password'";
    $results = mysqli_query($db, $query);
     if (mysqli_num_rows($results) == 1) {
      $_SESSION['admno'] = $admno;
      $_SESSION['success'] = "Welcome";
      header('location: parent.php');
    }else {
     array_push($errors, "Wrong username or password");
    }
  }
}


if(isset($_POST['rem'])) 
    { 
        //Add additional member to cookie array as per requirement 
        setcookie("username", $_SESSION['username'], time()+60*60*24*100, "/"); 
        //setcookie("regno", $_SESSION['regno'], time()+60*60*24*100, "/"); 
        return; 
    }

?>