<?php include("db.php"); ?>

<?php
if(isset($_POST['id'])) {
	//$sem = $_POST['country'];
	$elective = $_POST['id'];
	$sql = "select * from `review` where `Elective_id`='$elective'";
	//echo "called";
	$res = mysqli_query($con, $sql);
	if(mysqli_num_rows($res) > 0) {

		while($row = mysqli_fetch_object($res)) {
			echo " <p style='font-size:2vw'> Alumni ID:   ".$row->Alumni_id."<br> Review Data:  ".$row->Review_data."<br> </p> ";
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
