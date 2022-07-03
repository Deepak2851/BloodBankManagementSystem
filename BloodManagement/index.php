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
<div id="header"><h1><center>BLOODBANK MANAGEMENT SYSTEM</center></h1></div>
<div id="body">
  <br><br><br><br><br><br><br><br><br><br>
  <form action="" method="post">
  <table align="center">
    <tr>
      <td width="200px" height="70px"><b>Enter Username</b></td>
      <td width="150px" height="70px"><input type="text" name="un" placeholder="Enter UserName" style="width:180px;height:30px;border-radius:10px;"></td>
    </tr>
    <tr>
      <td width="200px" height="70px"><b>Enter Password</b></td>
      <td width="150px" height="70px"><input type="password" name="ps" placeholder="Enter Password" style="width:180px;height:30px;border-radius:10px;"></td>
    </tr>
    <tr>
      <td><input type="submit" name="sub" value="Login" style="width:70px;height:30px;border-radius:5px;"></inputtype></td>
    </tr>
  </table>
</form>
<?php
if(isset($_POST['sub']))
{
     $un=$_POST['un'];
     $ps=$_POST['ps'];

     $q=$db->prepare("SELECT * FROM Admin  WHERE UName='$un' AND Password='$ps'");
     $q->execute();
     $res=$q->fetchAll(PDO::FETCH_OBJ);   //Research
     if($res)
     {
        $_SESSION['un']=$un;
        header("Location:Admin-home.php");
     }
     else
     {
         "<script>alert('Wrong User')</script>";
     }
}
?>
</div>
<div id="footer"></div>
      </div>
    </div>
  </body>
</html>
