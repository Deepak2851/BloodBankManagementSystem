<?php
 include('connection.php');
 session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Donor Registration</title>
    <link rel="stylesheet" type="text/css" href="css/s1.css" />
    <style type="text/css">
      td{
        width: 150px;
        height: 40px;
      }
    </style>
  </head>
  <body>
    <div id="full">
      <div id="inner_full">
<div id="header"><h1><center><a href="Admin-home.php" style="text-decoration:none;color:white">BLOODBANK MANAGEMENT SYSTEM</center></a></h1></div>
<div id="body">
<!-- <?php
// $un=$_SESSION['un'];
// if(!$un)
// {
//   header("Location:index.php");
// }
 ?> -->
<h1><center>Stock Blood List</center></h1>
<center><div id="form2">
<table>
  <tr>
    <td><center><b><font color="FFE400">Name</font></b></center></td>
    <td><center><b><font color="FFE400">Quantity</font></b></center></td>
  </tr>
     <tr>
       <td><center>A+</center></td>
       <td><center>
         <?php
          $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='A+'");
          echo $row=$q->rowcount();
          ?>
       </center></td>
     </tr>
     <tr>
       <td><center>B+</center></td>
       <td><center>
         <?php
          $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='B+'");
          echo $row=$q->rowcount();
          ?>
       </center></td>
     </tr>
     <tr>
       <td><center>AB+</center></td>
       <td><center>
         <?php
          $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='AB+'");
          echo $row=$q->rowcount();
          ?>
       </center></td>
     </tr>
     <tr>
       <td><center>O+</center></td>
       <td><center>
         <?php
          $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='O+'");
          echo $row=$q->rowcount();
          ?>
       </center></td>
     </tr>
     <tr>
       <td><center>A-</center></td>
       <td><center>
         <?php
          $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='A-'");
          echo $row=$q->rowcount();
          ?>
       </center></td>
     </tr>
     <tr>
       <td><center>B-</center></td>
       <td><center>
         <?php
          $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='B-'");
          echo $row=$q->rowcount();
          ?>
       </center></td>
     </tr>
     <tr>
       <td><center>AB-</center></td>
       <td><center>
         <?php
          $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='AB-'");
          echo $row=$q->rowcount();
          ?>
       </center></td>
     </tr>
     <tr>
       <td><center>O-</center></td>
       <td><center>
         <?php
          $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='O-'");
          echo $row=$q->rowcount();
          ?>
       </center></td>
     </tr>
</table>
</div></center>
</div>
<div id="footer"><br><a href="logout.php"><p><center><font color="white">LOGOUT</font></center></a></p></div>
  </div>
  </div>
  </body>
</html>
