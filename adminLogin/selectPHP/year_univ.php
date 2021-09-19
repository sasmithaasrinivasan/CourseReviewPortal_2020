<?php

session_start();
$con = new mysqli("localhost","root","","coursereviewportal");
$opt=$_POST['option'];
$deg=$_POST['degree'];
$year=$_POST['year'];

if($opt == 'Insert')
{
  $s = "select * from years where Degree_name='$deg'";
  $result= mysqli_query($con, $s);
  $num= mysqli_num_rows($result);

  if($num == 1){
    header('location:../forms/University_years.php?insert=notValid');
  }
  else {
    $reg="insert into years (Degree_name,No_Years) values ('$deg','$year')";
    mysqli_query($con,$reg);
    header('location:../forms/University_years.php?insert=valid');
  }
}
else if($opt == 'Update')
{
  $s = "select * from years where Degree_name='$deg'";
  $result= mysqli_query($con, $s);
  $num= mysqli_num_rows($result);

  if($num == 1){
    $reg="update years set No_Years='$year' where Degree_name='$deg'";
    mysqli_query($con,$reg);
    header('location:../forms/University_years.php?update=valid');

  }
  else {
    header('location:../forms/University_years.php?update=notValid');
  }
}
else if($opt == 'Delete')
{
  $s = "select * from years where Degree_name='$deg'";
  $result= mysqli_query($con, $s);
  $num= mysqli_num_rows($result);

  if($num == 1){
    $reg="delete from years where Degree_name='$deg'";
    mysqli_query($con,$reg);
    header('location:../forms/University_years.php?delete=valid');

  }
  else {
    header('location:../forms/University_years.php?delete=notValid');
  }
}

?>
