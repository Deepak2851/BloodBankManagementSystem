<?php
 include('connection.php');
 session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exchanged Blood List</title>
    <link rel="stylesheet" type="text/css" href="css/s1.css"/>;
  </head>
  <body>
    <div id="full">
      <div id="inner_full">
      <div id="header"><h2><center><a ref="Admin-home.php" style="text-decoration:none color:white;">BLOOD BANK MANAGEMENT SYSTEM</a></center></h2></div>
     <div id="body">
       <br>
       <?php
       $un=$_SESSION['un'];
       if(!$un)
       {
         header("Location:index.php");
       }
       ?>
       <h1><center>Exchanged Blood List</center></h1><br>
       <center><div id="form">
         <table>
           <tr>
             <td><center><b><font color="gold">Name</font></b></center></td>
             <td><center><b><font color="gold">Father's Name</font></b></center></td>
             <td><center><b><font color="gold">Address</font></b></center></td>
             <td><center><b><font color="gold">City</font></b></center></td>
             <td><center><b><font color="gold">Age</font></b></center></td>
             <td><center><b><font color="gold">Blood Group</font></b></center></td>
             <td><center><b><font color="gold">Exchange Blood Group</font></b></center></td>
             <td><center><b><font color="gold">Mobile Number</font></b></center></td>
             <td><center><b><font color="gold">E-Mail</font></b></center></td>
           </tr>
           <?php
           $q=$db->query("SELECT * FROM exchange_blood_group");
           while($r1=$q->fetch(PDO::FETCH_OBJ))
           {
             ?>
             <tr>
               <td><center><?= $r1->name; ?></center></center></td>
               <td><center><?=$r1->fname; ?></center></center></td>
               <td><center><?=$r1->address; ?></center></center></td>
               <td><center><?=$r1->city; ?></center></center></td>
                   <td><center><?=$r1->age; ?></center></center></td>
                    <td><center><?=$r1->bgroup; ?></center></center></td>
                     <td><center><?=$r1->ebgroup; ?></center></center></td>
                      <td><center><?=$r1->mnumber; ?></center></center></td>
                       <td><center><?=$r1->email; ?></center></center></td>
             </tr>
             <?php
           }
           ?>
         </table>
       </div> </center>
     </div>
     <div id="footer"><br><a href="logout.php"><p><center><font color="white">LOGOUT</font></center></a></p></div>
     </div>
    </div>
    </div>
  </body>
</html>
