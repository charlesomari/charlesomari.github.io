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
                        <h2 class="pull-left">fee balances </h2>
                        
                    </div>
                    <?php
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM feesbal";
                    if($result = $mysqli->query($sql)){
                        if($result->num_rows > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                    echo "<th>S.No</th>";
                                        echo "<th>Admission Number</th>";
                                         echo "<th>Year</th>";
                                          echo "<th>Term</th>";
                                        echo "<th>Balance</th>";
                                        echo "<th>Action</th>";
                                        echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = $result->fetch_array()){
                                    echo "<tr>";
                                    echo "<td>" . $row['id'] . "</td>";

                                        echo "<td>" . $row['admno'] . "</td>";
                                             echo "<td>" . $row['year'] . "</td>";
                                                  echo "<td>" . $row['term'] . "</td>";
                                        echo "<td>" . $row['bal'] . "</td>";
                                        echo "<td>";
                                           
                                                echo "<a href='baldelete.php?id=". $row['id'] ."' title='delete Record' 
                                         data-toggle='tooltip'><span>delete</span></a>";
                                                                                
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