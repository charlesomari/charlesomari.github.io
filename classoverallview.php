<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
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
                        <h2 class="pull-left">LERTZ STREAMS OVERALL RESULTS </h2>
                          <a href="admin2.php" class="btn btn-success pull-right">Back</a>
                                        </div>
                        
                    </div>
                    <?php
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM class";
                    if($result = $mysqli->query($sql)){
                        if($result->num_rows > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                   echo "<tr>";
                                   echo "<th>S.No</th>";
                                       echo "<th>Year</th>";
                                        echo "<th>Term</th>";
                                         echo "<th>Stream</th>";
                                          echo "<th>Total students</th>";
                                         echo "<th>Math</th>";
                                        echo "<th>English</th>";
                                        echo "<th>Kiswa</th>";
                                        echo "<th>Physics</th>";
                                        echo "<th>Chemistry</th>";
                                        echo "<th>CRE</th>";
                                        echo "<th>Geography</th>";
                                        echo "<th>Biology</th>";
                                         echo "<th>Total Grade</th>";
                                        echo "<th>Action</th>";
                                        echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = $result->fetch_array()){
                                     echo "<tr>";
                                echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['year'] . "</td>";
                                         echo "<td>" . $row['term'] . "</td>";
                                          echo "<td>" . $row['stream'] . "</td>";
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
                                           echo "<td>";
                                            echo "<a href='viewdel.php?id=". $row['id'] ."' title='delete Record' 
                                         data-toggle='tooltip'><span>delete</span></a>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            $result->free();
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
                    }
                    
                    // Close connection
                    $mysqli->close();
                    ?>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>