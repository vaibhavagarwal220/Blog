<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <?php
  mail('vaibhav_agarwal@students.iitmandi.ac.in', "test", "This is a test mail", "From: Unknown<vaibhavagarwal@adminuser>");
  ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css\bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js\bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.2.0/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.2.0/material.min.js"></script>
    
    </head>
    <body id=cu>
        <div class=wrapper><h1 class=hd>Contact Us</h1>
        <nav>
           <ul class="nav nav-pills nav-justified"><li>
                    <a href="index.php">Home</a>
                </li>
                <li class=active>
                    <a>Contact Us</a>
                </li>
                <li>
                    <a href="aboutus.php">About Us</a>
                </li>
            </ul>
        </nav><br>
        <table class="table table-striped table-condensed">
            <tr class="head">
                <th>
                 Name   
                </th>
                <th>
                 Number    
                </th>
                <th>
                  Hobby      
                </th>
                <th>Image</th>
            </tr>
            <tr>
                <td>
                  Vaibhav  
                </td>
                <td>
                   9736260564 
                </td>
                <td>
                 Web Designing
                </td>
                <td><img src="Images/a.gif" class="align-left pport"></td>
            </tr>
            <tr class="even">
                <td>
                  Vaibhav  
                </td>
                <td>
                   9736260564 
                </td>
                <td>
                 Web Designing
                </td>
                <td><img src="Images/b.gif" class="align-left pport"></td>
            </tr>
            
        </table>
    </div></body>
</html>
