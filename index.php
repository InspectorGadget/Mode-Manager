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
                   
                    <li class="active"> <a href="#"> Home </a> </li>
                    <li> <a href="panel/"> Control Panel </a> </li>
                    
                </ul>
                
            </div>
            
        </nav>
        
    <center>
                
        <?php
        include 'dbh.php';

            $sql = "SELECT * FROM `panel`";
            $res = $conn->query($sql);

            if ($row = $res->fetch_assoc()) {
                if ($row['status'] > 1) {
                    header ("Location: mm/");
                }
            }

        ?>

        <br><br>
        <h3> This page is out of Maintenance Mode </h3>

    </center>
        
    </body>
</html>