<?php include("db.php"); ?>

<?php
if(isset($_POST['id'])) {
	//$sem = $_POST['country'];
	$elective = $_POST['id'];
	$sql = "select * from `feedback` where `Elective_ID`='$elective'";
	//echo "called";
	$res = mysqli_query($con, $sql);
	if(mysqli_num_rows($res) > 0) {

		while($row = mysqli_fetch_object($res)) {
			echo " <p style='font-size:2vw'> Student ID:   ".$row->Student_id."<br> Feedback Data:  ".$row->Feedback_data."<br> </p> ";
		}
	}

	else{
		echo "No records";
	}

} else {
	//echo "hello";
	header('location: ./');
}
?>
