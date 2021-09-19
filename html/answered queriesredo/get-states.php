<?php include("db.php"); ?>
<?php
if(isset($_POST['c_id'])) {
	$value = $_POST['c_id'];
	$sql = "select distinct `Elective_ID` from `Elec_Fac` natural join `Elective` where `Elective_Sem`=".mysqli_real_escape_string($con, $_POST['c_id'])." and `Faculty_ID` = 'FAC09'";
	$res = mysqli_query($con, $sql);
	if(mysqli_num_rows($res) > 0) {
		echo "<option value=''>------- Select --------</option>";
		while($row = mysqli_fetch_object($res)) {
			echo "<option value='".$row->Elective_ID."'>".$row->Elective_ID."</option>";
		}
	}
} else {
	header('location: ./');
}
?>
