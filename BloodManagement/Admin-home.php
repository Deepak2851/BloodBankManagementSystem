<?php
 include('connection.php');
 session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="css/s1.css" />
  </head>
  <body>
    <div id="full">
      <div id="inner_full">
<div id="header"><h1><center><a href="Admin-home.php" style="text-decoration:none;color:white">BLOODBANK MANAGEMENT SYSTEM</center></a></h1></div>
<div id="body">
<br>
<?php
$un=$_SESSION['un'];
if(!$un)   //Research
{
  header("Location:index.php");
}
?>
<h1><center>Welcome Admin</center></h1>
<ul>
  <li><a href="Donor-red.php">Donor Registration</a></li>
  <li><a href="Donor-List.php">Donor List</a></li>
  <li><a href="Stock-Blood-List.php">Stock blood list</a></li>
</ul><br><br><br><br><br><br>
<ul>
  <li><a href="Exchange-Blood-List.php">Blood Request Registration</a></li>
  <li><a href="NGO-List.php">Recieved Blood List</a></li>
<li><a href="Out-Stock-Blood-List.php">Out Stock Blood List</a></li>
</ul>
</div>
<div id="footer"><br><a href="logout.php"><p><center><font color="white">LOGOUT</font></center></a></p></div>
      </div>
    </div>
  </body>
</html>
