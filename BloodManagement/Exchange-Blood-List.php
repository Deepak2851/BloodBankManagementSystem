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
<h1><center>Exchange Blood Donor Registration</center></h1><br>
<center><div id="form1">
  <form action="" method="post">
<table>
  <tr>
    <td width="150px" height="50px">Name </td>
    <td width="200px" height="50px"><input type="text" name="name1" placeholder="Enter Name"></td>
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
  <td width="150px" height="50px">Exchange Blood Group </td>
  <td class="savedit" width="200px" height="50px">
    <select name="exbgroup">
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
    <td width="200px" height="50px"><input type="text" name="mnumber1" placeholder="Enter Mobile Number"></td>
  </tr>
  <tr>
    <td><input type="submit" name="Submit" value="Save"></td>
  </tr>
</table>
</form>
<?php
if(isset($_POST['Submit']))
{

  $name=$_POST['name1'];
  $fname=$_POST['fname'];
  $address=$_POST['address'];
  $city=$_POST['city'];
  $age=$_POST['age'];
  $bgroup=$_POST['bgroup'];
  $mnumber=$_POST['mnumber1'];
  $email=$_POST['email'];
  $exbgroup=$_POST['exbgroup'];
  //  $q2="SELECT * from donor_registration where bgroup='$bgroup'";
  //  $st=$db->query($q2);
  //  $num_row=$st->fetch();
  //  $id=$num_row['id'];
  // $name1=$num_row['name'];
  // $b1=$num_row['bgroup'];
  // $mnumber=$num_row['mnumber'];
  $q1="INSERT INTO outstock_blood_group(bname,name,mnumber) value(?,?,?)";
  $st1=$db->prepare($q1);
  $st1->execute([$b1,$name,$mnumber]);
  $delete_q="delete from donor_registration where id ='$id'";
  $st1= $db->prepare($delete_q);
  $st1->execute();
  $q=$db->prepare("INSERT INTO exchange_blood_group(name,fname,address,city,age,bgroup,email,mnumber,ebgroup) VALUES
  (:name1,:fname,:address,:city,:age,:bgroup,:email,:mnumber,:ebgroup)");
  $q->bindValue('name1',$name);
  $q->bindValue('fname',$fname);
  $q->bindValue('address',$address);
  $q->bindValue('city',$city);
  $q->bindValue('age',$age);
  $q->bindValue('bgroup',$bgroup);
  $q->bindValue('email',$email);
  $q->bindValue('mnumber',$mnumber);
  $q->bindValue('ebgroup',$exbgroup);
  if($q->execute())
  {
    echo "<script>alert('Registration Successful')</script>";
  }
  else {
    echo "<script>alert('Registration Unsuccessful')</script>";
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
