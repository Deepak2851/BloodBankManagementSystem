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
<!-- <?php
// $un=$_SESSION['un'];
// if(!$un)
// {
//   header("Location:index.php");
// }
 ?> -->
<h1><center>Donor Registration</center></h1><br>
<center><div id="form1">
  <form action="" method="post">
<table>
  <tr>
    <td width="150px" height="50px">Name </td>
    <td width="200px" height="50px"><input type="text" name="name" placeholder="Enter Name"></td>
    <td width="150px" height="50px">Father's Name </td>
    <td width="200px" height="50px"><input type="text" name="fname" placeholder="Enter Father's Name"></td>
  </tr>
  <tr>
    <td width="150px" height="50px">Address </td>
    <td width="200px" height="50px"><input type="text" name="address" placeholder="Enter Address"></td>
    <td width="150px" height="50px">City </td>
    <td width="200px" height="50px"><input type="text" name="city" placeholder="Enter City Name"></td>
  </tr>
  <tr>
    <td width="150px" height="50px">Age </td>
    <td width="200px" height="50px"><input type="text" name="age" placeholder="Enter Age"></td>
    <td width="150px" height="50px">Select Blood Group </td>
    <td width="200px" height="50px">
      <select name="bgroup">
        <option>A+</option>
        <option>B+</option>
        <option>AB+</option>
        <option>O+</option>
        <option>A-</option>
        <option>B-</option>
        <option>AB-</option>
        <option>O-</option>
      </select>
    </td>
  </tr>
  <tr>
    <td width="150px" height="50px">E-Mail </td>
    <td width="200px" height="50px"><input type="text" name="email" placeholder="Enter Email"></td>
    <td width="150px" height="50px">Mobile Number </td>
    <td width="200px" height="50px"><input type="text" name="mnumber" placeholder="Enter Mobile Number"></td>
  </tr>
  <tr>
    <td><input type="submit" name="Submit" value="Save"></td>
  </tr>
</table>
</form>
<?php
if(isset($_POST['Submit']))
{

  $name=$_POST['name'];
  $fname=$_POST['fname'];
  $address=$_POST['address'];
  $city=$_POST['city'];
  $age=$_POST['age'];
  $bgroup=$_POST['bgroup'];
  $mnumber=$_POST['mnumber'];
  $email=$_POST['email'];
  $q=$db->prepare("INSERT INTO donor_registration(name,fname,address,city,age,bgroup,email,mnumber) VALUES
  (:name,:fname,:address,:city,:age,:bgroup,:email,:mnumber)");
  $q->bindValue('name',$name);
  $q->bindValue('fname',$fname);
  $q->bindValue('address',$address);
  $q->bindValue('city',$city);
  $q->bindValue('age',$age);
  $q->bindValue('bgroup',$bgroup);
  $q->bindValue('mnumber',$mnumber);
  $q->bindValue('email',$email);
  if($q->execute())
  {
     echo "<script>alert('Donor Registration Successful')</script>";
  }
  else {
    echo "<script>alert('Donor Registration Failed')</script>";
  }
 }
else {
   "Not Clicked";
}
?>
</div></center>
</div>
<div id="footer"><br><a href="logout.php"><p><center><font color="white">LOGOUT</font></center></a></p></div>
      </div>
    </div>
  </body>
</html>
