<?php

session_start();
$con = new mysqli("localhost","root","","coursereviewportal");
$name=$_POST['user'];
$pass=$_POST['pass'];

$s = "select * from admin where admin_id='$name' && admin_pwd='$pass'";

$result= mysqli_query($con, $s);
$num= mysqli_num_rows($result);

if($num == 1){
  $_SESSION['username']=$name;
  header('location:dataPage.php');
}
else {
  header('location:login.php?login=notValid');
}

 ?>
