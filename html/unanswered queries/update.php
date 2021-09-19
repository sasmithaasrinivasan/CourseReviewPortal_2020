<?php include("db.php");?>
<?php
if(isset($_POST['submit'])) {
	//$sem = $_POST['country'];
    $elective = $_POST['eid'];
    $student = $_POST['sid'];
    $Question = $_POST['Question'];
    $Answer = $_POST['Answer'];
    echo "Hello";
    $sql = "update `forums` set `Answer`='$Answer' where `Student_id`='$student' and `Elective_id`= '$elective'and `Question`='$Question'" ;
    $sql1 = "update `forums` set `Faculty_id`='FAC09' where `Student_id`='$student' and `Elective_id`= '$elective'and `Question`='$Question'" ;
	//echo "called";
    $res = mysqli_query($con, $sql);
    $res1 = mysqli_query($con, $sql1);
	if(($res==1) and ($res1==1) ){

		echo "Successfully updated.";
	}

	else{
		echo "Failed Error!!";
	}

}

?>
