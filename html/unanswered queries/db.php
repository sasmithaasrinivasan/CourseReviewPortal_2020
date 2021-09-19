<?php
$con = new mysqli("localhost","root","","coursereviewportal");
// Check connection
if(mysqli_connect_errno($con))	echo "Failed to connect MySQL: " .mysqli_connect_error();
?>
