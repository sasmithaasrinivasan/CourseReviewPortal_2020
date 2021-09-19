<?php

session_start();
$con = new mysqli("localhost","root","","coursereviewportal");
$opt=$_POST['option'];
$id=$_POST['facid'];
$_SESSION['user']=$id;
if($opt == 'Insert')
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  $exp=$_POST['exp'];
  $pos=$_POST['Position'];
  $pass=$_POST['pass'];
  $dept=$_POST['dept'];
  $deg=$_POST['deg'];
  $s = "select * from faculty where Fac_id='$id'";
  $result= mysqli_query($con, $s);
  $num= mysqli_num_rows($result);

  if($num == 1){
    header('location:../forms/collegiateFaculty.php?insert=notValid');
  }
  else {
    $reg="INSERT INTO `faculty`(`Fac_id`, `Fac_Name`, `Fac_Email`, `Fac_Exp`, `Fac_Pos`, `Fac_PWD`, `Fac_Dept_name`, `Fac_Degree_name`) VALUES('$id','$name','$email','$exp','$pos','$pass','$dept','$deg') ";
    mysqli_query($con,$reg);
    header('location:../forms/collegiateFaculty.php?insert=valid');
  }
}
else if($opt == 'Update')
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  $exp=$_POST['exp'];
  $pos=$_POST['Position'];
  $pass=$_POST['pass'];
  $dept=$_POST['dept'];
  $deg=$_POST['deg'];
  $s = "select * from faculty where Fac_id='$id'";
  $result= mysqli_query($con, $s);
  $num= mysqli_num_rows($result);

  if($num == 1){
    $reg="UPDATE `faculty` SET `Fac_Name`='$name' WHERE `Fac_id`='$id'";
    mysqli_query($con,$reg);
    $reg="UPDATE `faculty` SET `Fac_Email`='$email' WHERE `Fac_id`='$id'";
    mysqli_query($con,$reg);
    $reg="UPDATE `faculty` SET `Fac_Exp`='$exp' WHERE `Fac_id`='$id'";
    mysqli_query($con,$reg);
    $reg="UPDATE `faculty` SET `Fac_Pos`='$pos' WHERE `Fac_id`='$id'";
    mysqli_query($con,$reg);
    $reg="UPDATE `faculty` SET `Fac_Dept_name`='$dept' WHERE `Fac_id`='$id'";
    mysqli_query($con,$reg);
    $reg="UPDATE `faculty` SET `Fac_PWD`='$pass' WHERE `Fac_id`='$id'";
    mysqli_query($con,$reg);
    $reg="UPDATE `faculty` SET `Fac_Degree_name`='$deg' WHERE `Fac_id`='$id'";
    mysqli_query($con,$reg);
    header('location:../forms/collegiateFaculty.php?update=valid');

  }
  else {
    header('location:../forms/collegiateFaculty.php?update=notValid');
  }
}
else if($opt == 'Delete')
{
  $s = "select * from faculty where Fac_id='$id'";
  $result= mysqli_query($con, $s);
  $num= mysqli_num_rows($result);

  if($num == 1){
    $reg="delete from faculty where Fac_id='$id'";
    mysqli_query($con,$reg);
    header('location:../forms/collegiateFaculty.php?delete=valid');

  }
  else {
    header('location:../forms/collegiateFaculty.php?delete=notValid');
  }
}


?>
