<?php
include('config.php');
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO bins (bins_id ,bins_capaacity_filled , bins_location , truck_id )
VALUES ('".$_POST["bin_Id"]."','".$_POST["bin_capacity"]."','".$_POST["bin_loc"]."','".$_POST["truck_id"]."')";



?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Collapsible sidebar using Bootstrap 3</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="style.css">
    </head>
    <body>



        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <a href="index.php"><h3>Smart Waste Management</h3><a>
                </div>

                <ul class="list-unstyled components">
                    <p>DASHBOARD</p>
                    <li class="active">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">SYSTEM ACTION</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li><a href="#">CURRENT BINS COLLECTION</a></li>
                            <li><a href="#">CURRENT TRUCK ASSIGN</a></li>
                           
                        </ul> 
                    </li>
                    <li>
                        
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">SYSTEM MONITORING</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li><a href="#">BINS NOT FILLED</a></li>
                            <li><a href="#">IDLE TRUCKS</a></li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="#">Reports</a>
                    </li>
                    <li>
                        <a href="#">About US</a>
                    </li>
                </ul>

                <ul class="list-unstyled CTAs">
                    <li><a>copyright</a></li>
                    <li><a>SWM_project_2018</a></li>
                </ul>
            </nav>

            <!-- Page Content Holder -->
            <div id="content">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <span>MENU</span>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                               <h2>Add bins Details</h2>
                            </ul>
                        </div>
                    </div>
                </nav>

                <div class="container">
                    <form action="" method="POST">
                    <div class="form-group">
                      <label for="ID">bin id:</label>
                      <input type="ID" class="form-control" id="bin Id" placeholder="Enter bin Id" name="bin_Id">
                    </div>
                    <div class="form-group">
                      <label for="pwd"> bin Location:</label>
                      <input type="password" class="form-control" id="pwd" placeholder="Enter bin Location" name="bin_loc">
                    </div>
                <div class="form-group">
                      <label for="pwd"> bin Capacity:</label>
                      <input type="password" class="form-control" id="Capacity" placeholder="Enter bin Capacity" 
                      name="bin_capacity">
                    </div>
                    
                    <button type="Add" class="btn btn-primary" name="submit">Add</button>
                  </form>
                </div>


               
            </div>
        </div>





        <!-- jQuery CDN -->
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
         </script>
    </body>
</html>
