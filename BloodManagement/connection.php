<?php
$db=new PDO('mysql:host=localhost:3406;dbname=openendedproject','root','');
if($db)
{
   "CONNECTED";
}
else
{
   "NOT CONNECTED";
}
?>
