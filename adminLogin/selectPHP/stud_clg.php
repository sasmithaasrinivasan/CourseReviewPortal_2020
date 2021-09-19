<?php

session_start();
$con = new mysqli("localhost","root","","coursereviewportal");
$opt=$_POST['option'];
$id=$_POST['studId'];
$_SESSION['user']=$id;
if($opt == 'Insert')
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  $sem=$_POST['sem'];
  $pass=$_POST['pass'];
  $dept=$_POST['dept'];
  $deg=$_POST['deg'];
  $s = "select * from student where student_id='$id'";
  $result= mysqli_query($con, $s);
  $num= mysqli_num_rows($result);

  if($num == 1){
    header('location:../forms/collegiateStudent.php?insert=notValid');
  }
  else {
    $reg="INSERT INTO `student`(`student_id`, `stud_Name`, `stud_Email`, `stud_sem`, `stud_pwd`, `stud_Dept_Name`, `stud_Degree_Name`) VALUES ('$id','$name','$email','$sem','$pass','$dept','$deg') ";
    mysqli_query($con,$reg);
    header('location:../forms/collegiateStudent.php?insert=valid');
  }
}
else if($opt == 'Update')
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  $sem=$_POST['sem'];
  $pass=$_POST['pass'];
  $dept=$_POST['dept'];
  $deg=$_POST['deg'];
  $s = "select * from student where student_id='$id'";
  $result= mysqli_query($con, $s);
  $num= mysqli_num_rows($result);

  if($num == 1){
    $reg="UPDATE `student` SET `stud_Name`='$name' WHERE `student_id`='$id'";
    mysqli_query($con,$reg);
    $reg="UPDATE `student` SET `stud_Email`='$email' WHERE `student_id`='$id'";
    mysqli_query($con,$reg);
    $reg="UPDATE `student` SET `stud_sem`='$sem' WHERE `student_id`='$id'";
    mysqli_query($con,$reg);
    $reg="UPDATE `student` SET `stud_Dept_Name`='$dept' WHERE `student_id`='$id'";
    mysqli_query($con,$reg);
    $reg="UPDATE `student` SET `stud_pwd`='$pass' WHERE `student_id`='$id'";
    mysqli_query($con,$reg);
    $reg="UPDATE `student` SET `stud_Degree_Name`='$deg' WHERE `student_id`='$id'";
    mysqli_query($con,$reg);
    header('location:../forms/collegiateStudent.php?update=valid');

  }
  else {
    header('location:../forms/collegiateStudent.php?update=notValid');
  }
}
else if($opt == 'Delete')
{
  $s = "select * from student where student_id='$id'";
  $result= mysqli_query($con, $s);
  $num= mysqli_num_rows($result);

  if($num == 1){
    $reg="delete from student where student_id='$id'";
    mysqli_query($con,$reg);
    header('location:../forms/collegiateStudent.php?delete=valid');

  }
  else {
    header('location:../forms/collegiateStudent.php?delete=notValid');
  }
}


?>
