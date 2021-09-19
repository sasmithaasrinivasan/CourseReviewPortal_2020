<?php

session_start();
$con = new mysqli("localhost","root","","coursereviewportal");
$opt=$_POST['option'];
$depName=$_POST['dept'];
$degName=$_POST['degree'];


if($opt == 'Insert')
{
  $s = "select * from degree where Dept_Name='$depName' && Degree_Name='$degName'";
  $result= mysqli_query($con, $s);
  $num= mysqli_num_rows($result);

  if($num == 1){
    header('location:../forms/University_Degree.php?insert=notValid');
  }
  else {
    $reg="insert into degree (Dept_Name,Degree_Name) values ('$depName','$degName')";
    mysqli_query($con,$reg);
    header('location:../forms/University_Degree.php?insert=valid');
  }
}
else if($opt == 'Update')
{
  $s = "select * from degree where Dept_Name='$depName' && Degree_Name='$degName'";
  $result= mysqli_query($con, $s);
  $num= mysqli_num_rows($result);
  $nDeg=$_POST['newDegree'];
  if($num == 1){
    $reg="update degree set Degree_Name='$nDeg' where Dept_Name='$depName'&& Degree_Name='$degName'";
    mysqli_query($con,$reg);
    header('location:../forms/University_Degree.php?update=valid');

  }
  else {
    header('location:../forms/University_Degree.php?update=notValid');
  }
}
else if($opt == 'Delete')
{
  $s = "select * from degree where Dept_Name='$depName' && Degree_Name='$degName'";
  $result= mysqli_query($con, $s);
  $num= mysqli_num_rows($result);

  if($num == 1){
    $reg="delete from degree where Dept_Name='$depName' && Degree_Name='$degName'";
    mysqli_query($con,$reg);
    header('location:../forms/University_Degree.php?delete=valid');

  }
  else {
    header('location:../forms/University_Degree.php?delete=notValid');
  }
}


?>
