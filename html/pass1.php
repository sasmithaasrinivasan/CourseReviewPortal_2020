<?php


?>

<html>
<head>
<title>Password Change</title>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="pass1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
</head>
<body>
<h1 align="center">CHANGE PASSWORD</h1>
<div><?php if(isset($message)) { echo $message; } ?></div>
<form method="post" action="" align="center">
Current Password:
<input type="password" name="currentPassword" required ><span id="currentPassword" ></span>
New Password:
<input type="password" name="newPassword" required><span id="newPassword"></span>
Confirm Password:
<input type="password" name="confirmPassword" required><span id="confirmPassword" ></span>
<br><br>
<input type="submit", value='Update Password'>
</form>
</body>
</html>


<!-- <?php
session_start();
include('db.php');
$id = $_SESSION["student_id"];

$result = mysqli_query($conn,"SELECT * from student WHERE student_id='" . $id . "'");
$row=mysqli_fetch_assoc($result);
if($_POST["currentPassword"] == $row["stud_pwd"] && $_POST["newPassword"] == $_POST["confirmPassword"] ) {
mysqli_query($conn,"UPDATE student set stud_pwd='" . $_POST["newPassword"] . "' WHERE student_id='" . $id . "'");
$message = "Password Changed Sucessfully";
} else{
 $message = "Password is not correct";
}

?> -->
