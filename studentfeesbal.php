

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>fees balance</title>
    <link rel="stylesheet" href="bootrap.css">
    <style type="text/css">
       
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Fees Balance</h2>
                         <a href="parent.php" class="btn btn-success pull-right">Back</a>
                        
                    </div>
<?php

// check if the form has been submitted and display the results
if (isset($_POST['admno'])) {

  define('DB_NAME', 'college');
  define('DB_USER', 'root');
  define('DB_PASSWORD', '');
  define('DB_HOST', 'localhost');

  $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
  if (!$conn) {
    die('Could not connect: ' . mysqli_connect_error());
  }

  // escape the post data to prevent injection attacks
  $admno = mysqli_real_escape_string($conn, $_POST['admno']);

  $sql = "SELECT * FROM `results` WHERE `admno` LIKE '%$admno%'"; 
  $result=mysqli_query($conn, $sql);

  // check if the query returned a result
  if (!$result) {
      echo 'There are no results for your search';
  } else {
    // result to output the table
                             echo '<table class="table table-striped table-bordered table-hover">'; 
                                  echo "<thead>";
                                    echo "<tr>";
                                     echo "<th>ADM No</th>";
                                     echo "<th>Term</th>";
                                        echo "<th>Fees Balance</th>"; 
                                           echo "</tr>";
                                echo "</thead>";
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
    {
      echo "<td>" . $row['admno'] . "</td>";
                                        echo "<td>" . $row['year'] . "</td>";
                                        echo "<td>" . $row['term'] . "</td>";  
    }
    echo "</table>";
  }

  mysqli_close($conn);
} // end submitted
else
{
// not submitted to output the form
?>
<form action="" method="post">
  <label>Enter Your ADM No:</label>
  <input name="admno" type="text" placeholder="admno reguired">
  <br>
  <br>
  <input type="submit" value="OK">
</form>
<?php
} // end not submitted
?>