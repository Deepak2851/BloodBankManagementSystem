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
        width: 200px;
        height: 40px;
      }
    </style>
  </head>
  <body>
    <div id="full">
      <div id="inner_full">
<div id="header"><h1><center><a href="Admin-home.php" style="text-decoration:none;color:white">BLOODBANK MANAGEMENT SYSTEM</center></a></h1></div>
<div id="body">
<br>
<!-- <?php
// $un=$_SESSION['un'];
// if(!$un)
// {
//   header("Location:index.php");
// }
 ?> -->
<h1><center>Donor Registration</center></h1><br>
<center><div id="form">
<table>
  <tr>
    <td><center><b><font color="FFE400">Name</font></b></center></td>
    <td><center><b><font color="FFE400">Father's Name</font></b></center></td>
    <td><center><b><font color="FFE400">Address</font></b></center></td>
    <td><center><b><font color="FFE400">City</font></b></center></td>
    <td><center><b><font color="FFE400">Age</font></b></center></td>
    <td><center><b><font color="FFE400">Blood Group</font></b></center></td>
    <td><center><b><font color="FFE400">Email</font></b></center></td>
    <td><center><b><font color="FFE400">Mobile Number</font></b></center></td>
  </tr>
  <?php
   $q=$db->query("SELECT * FROM donor_registration");
   while($r1=$q->fetch(PDO::FETCH_OBJ))
   {
     ?>
     <tr>
       <td><center><?= $r1->name; ?></center></td>
       <td><center><?= $r1->fname; ?></center></td>
       <td><center><?= $r1->address; ?></center></td>
       <td><center><?= $r1->city; ?></center></td>
       <td><center><?= $r1->age; ?></center></td>
       <td><center><?= $r1->bgroup; ?></center></td>
       <td><center><?= $r1->email; ?></center></td>
       <td><center><?= $r1->mnumber; ?></center></td>
     </tr>
     <?php
   }
   ?>
</table>
</div></center>
</div>
<div id="footer"><br><a href="logout.php"><p><center><font color="black">LOGOUT</font></center></a></p></div>
      </div>
    </div>
  </body>
</html>
