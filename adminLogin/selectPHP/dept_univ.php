<?php

session_start();
$con = new mysqli("localhost","root","","coursereviewportal");
$opt=$_POST['option'];
$name=$_POST['dept'];
$bld=$_POST['bld'];
$_SESSION['user']=$_SESSION['username'];

if($opt == 'Insert')
{
  $s = "select * from department where Dept_name='$name'";
  $result= mysqli_query($con, $s);
  $num= mysqli_num_rows($result);

  if($num == 1){
    header('location:../forms/University_Department.php?insert=notValid');
  }
  else {
    $reg="insert into department (Dept_name,Building) values ('$name','$bld')";
    mysqli_query($con,$reg);
    header('location:../forms/University_Department.php?insert=valid');
  }
}
else if($opt == 'Update')
{
  $s = "select * from department where Dept_name='$name'";
  $result= mysqli_query($con, $s);
  $num= mysqli_num_rows($result);

  if($num == 1){
    $reg="update department set Building='$bld' where Dept_name='$name'";
    mysqli_query($con,$reg);
    header('location:../forms/University_Department.php?update=valid');

  }
  else {
    header('location:../forms/University_Department.php?update=notValid');
  }
}
else if($opt == 'Delete')
{
  $s = "select * from department where Dept_name='$name'";
  $result= mysqli_query($con, $s);
  $num= mysqli_num_rows($result);

  if($num == 1){
    $reg="delete from department where Dept_name='$name'";
    mysqli_query($con,$reg);
    header('location:../forms/University_Department.php?delete=valid');

  }
  else {
    header('location:../forms/University_Department.php?delete=notValid');
  }
}

?>
