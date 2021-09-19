<?php
       $sql="Select Elective_id,Faculty_id,Answer from forums where student_id='CB.EN.U4CSE18455';
	   $result=mysqli_query($conn,$sql);
	   $resultcheck=mysqli_num_rows($result); 
