<?php include("db.php"); ?>

<?php
if(isset($_POST['id'])) {
	//$sem = $_POST['country'];
	$elective = $_POST['id'];
	$sql = "select * from `forums` where `Elective_ID`='$elective' and Answer is not null";
	//echo "called";
	$res = mysqli_query($con, $sql);
	if(mysqli_num_rows($res) > 0) {
		
		while($row = mysqli_fetch_object($res)) {
			echo " <p style='font-size:2vw'> Question:   ".$row->Question."<br> Answer:  ".$row->Answer."<br> </p> ";
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