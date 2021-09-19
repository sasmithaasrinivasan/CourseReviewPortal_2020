<?php

session_start();
$con = new mysqli("localhost","root","","coursereviewportal");
$name=$_POST['user'];
$pass=$_POST['pass'];

$s = "select * from student where student_id='$name' && stud_pwd='$pass'";

$result= mysqli_query($con, $s);
$num= mysqli_num_rows($result);

if($num == 1){
  $_SESSION['username']=$name;
  header('location:r.php');
}
else {
  $s = "select * from faculty where Fac_id='$name' && Fac_PWD='$pass'";
  $result= mysqli_query($con, $s);
  $num= mysqli_num_rows($result);
  if($num==1){
    header('location:fac_dashboard/index.php');
    while($row = mysqli_fetch_object($result)) {
      $_SESSION['username']=$row->Fac_Name;
    }

  }
  else {
    header('location:login.php?login=notValid');
  }

}

 ?>
