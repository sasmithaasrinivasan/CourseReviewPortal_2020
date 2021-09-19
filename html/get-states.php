<?php include("db.php"); ?>
<?php
//echo "Hello World";
if(isset($_POST['c_id'])) {
	$new = $_POST['c_id'];
	$sql = "select * from `feedback` where `Elective_ID`='$new'";
	$res = mysqli_query($con, $sql);
	if(mysqli_num_rows($res) > 0) {
		
		while($row = mysqli_fetch_object($res)) {
			echo "	<tr> <td >".$row->Elective_ID."</td> <td>".$row->Feedback_Data."</td></tr>";
		}
	}
} else {
	header('location: ./');
}
?>
