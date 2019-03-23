

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>results</title>
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
                        <h2 class="pull-left">Students  K.C.S.E Results</h2>
                         <a href="parent.php" class="btn btn-success pull-right">Back</a>
                        
                    </div>
<?php

// check if the form has been submitted and display the results
if (isset($_POST['year'])) {

  define('DB_NAME', 'college');
  define('DB_USER', 'root');
  define('DB_PASSWORD', '');
  define('DB_HOST', 'localhost');

  $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
  if (!$conn) {
    die('Could not connect: ' . mysqli_connect_error());
  }

  // escape the post data to prevent injection attacks
  $year = mysqli_real_escape_string($conn, $_POST['year']);

  $sql = "SELECT * FROM `kcseresults` WHERE `year` LIKE '%$year%'"; 
  $result=mysqli_query($conn, $sql);

  // check if the query returned a result
  if (!$result) {
      echo 'There are no results for your search';
  } else {
    // result to output the table
                             echo '<table class="table table-striped table-bordered table-hover">'; 
                                  echo "<thead>";
                                   echo "<tr>";
                                        echo "<th>Year</th>";
                                        echo "<th>Total Students</th>";
                                        echo "<th>Math</th>";
                                        echo "<th>English</th>";
                                        echo "<th>Kiswa</th>";
                                        echo "<th>Physics</th>";
                                        echo "<th>Chemistry</th>";
                                        echo "<th>CRE</th>";
                                        echo "<th>Geography</th>";
                                        echo "<th>Biology</th>";
                                          echo "<th>Total Grade</th>";
                                        echo "</tr>";
                                echo "</thead>";
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
    {
    
                                       
                                        echo "<td>" . $row['year'] . "</td>";
                                        echo "<td>" . $row['totalstudents'] . "</td>";
                                                echo "<td>" . $row['math'] . "</td>";
                                        echo "<td>" . $row['english'] . "</td>";
                                         echo "<td>" . $row['kiswa'] . "</td>"; 
                                          echo "<td>" . $row['physics'] . "</td>";
                                           echo "<td>" . $row['chemistry'] . "</td>";
                                           echo "<td>" . $row['cre'] . "</td>";
                                           echo "<td>" . $row['geography'] . "</td>";
                                           echo "<td>" . $row['biology'] . "</td>";
                                            echo "<td>" . $row['totalgrade'] . "</td>";
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
  <label>Select The Year you Want to view</label>
  <select name="year" required autofocus>
  <option value"2019">2019</option>
  <option value"2018">2018</option>
  <option value"2017">2017</option>
  <option value"2016">2016</option>
<option value"2015">2015</option>
  <option value"2014">2014</option>
  <option value"2013">2013</option></select><br/><br />
  <br>
  <br>
  <input type="submit" value="OK">
</form>
<?php
} // end not submitted
?>