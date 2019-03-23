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
                        <h2 class="pull-left">LERTZ TEACHERS ON DUTY </h2>
                           <a href="admin2.php" class="btn btn-success pull-right">Back</a>
                        
                    </div>
                    <?php
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM duty";
                    if($result = $mysqli->query($sql)){
                        if($result->num_rows > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                    echo "<th>S.No</th>";
                                        echo "<th>Teachers Name</th>";
                                        echo "<th>Week On Duty</th>";
                                        echo "<th>Action</th>";
                                        echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = $result->fetch_array()){
                                    echo "<tr>";
                                    echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['teachers_name'] . "</td>";
                                        echo "<td>" . $row['week_on_duty'] . "</td>";
                                        echo "<td>";
                                          echo "<a href='dutydelete.php?id=". $row['id'] ."' title='delete Record' 
                                         data-toggle='tooltip'><span>delete</span></a>";
                                          echo "</td>";
                                      

                            echo "</td>";
                                    echo "</tr>";
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