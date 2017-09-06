<!DOCTYPE html>
<!--
Copyright (C) 2017 RTG
This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.
You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> Mode Manager </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <style>


            
        </style>
    </head>
    <body>
        
        <nav class="navbar navbar-default">
            
            <div class="container-fluid">
                
                <div class="navbar-header">
                    
                    <a class="navbar-brand" href="#"> Mode Manager </a>
                    
                </div>
                
                <ul class="nav navbar-nav navbar-left">
                   
                    <li> <a href="../"> Home </a> </li>
                    <li class="active"> <a href="#"> Control Panel </a> </li>
                    
                </ul>
                
            </div>
            
        </nav>
        
    <center>

            <br><br><br>

            <?php

                    $url = "http://localhost".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
                    if(strpos($url, 'status=2') != FALSE) {
                        echo "Your Webpage is now in Maintenance Mode! <br>";
                    } elseif (strpos($url, 'status=1')) {
                        echo "Your Webpage is now Active! <br>";
                    } elseif (strpos($url, 'error=1')) {
                        echo "Please do not click the same server status <br>";
                    } elseif (strpos($url, 'error=2')) {
                        echo "Please do not click the same server status <br>";
                    }

            ?>

            <br><br><br>
            
            <form method="POST" action="run.php">
                
                <strong> Your Current Webpage Status: </strong> <br><br> 

                <select name="select" required>

                    <?php
                    include "../dbh.php";

                        $sql = "SELECT * FROM panel";
                        $res = $conn->query($sql);

                        if ($row = $res->fetch_assoc()) {
                            if ($row['status'] < 2) {
                                echo "<option value='ac'> Currently Active </option>";
                                echo "<option value='maintenance'> Start Maintenance Mode </option>";
                            } else {
                                echo "<option value='ma'> Currently Under Maintenance </option>";
                                echo "<option value='activate'> Start Active Mode </option>";
                            }
                        }

                    ?>

                </select>

                <br><br><br>
                <button type="submit" class="btn bnt-default"> Change </button>

            </form>    
        
    </center>
        
    </body>
</html>