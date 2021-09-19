<?php
  session_start();
  if(!isset($_SESSION['username']))
  {
    header('location:../login.php');
  }
  //include('db.php');
  $_SESSION['username']=$_SESSION['username'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Faculty Forum</title>

<link rel="stylesheet" href="faculty forum.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="js.js"></script>

</head>
<?php include("db.php");?>


<body>



<div class="container">

   <header>Course Review

     <div class="topnav"><?php  echo $_SESSION['username']; ?>


     </div>
   </header>
  <aside>
    <div class='container2'>
    <div class='item1'><a href="../fac_dashboard/index.php" >Dashboard</a></div>
    <div class='item2'><a href=#>Profile</a></div>
    <div class='item3' ><a href=#>Courses</a></div>
    <div class='item4'><a href="http://localhost/try1/index.php">Forum</a></div>
    <div class='item5'><a href=#>Settings</a></div>
    <div class='item6'><a href=#>Help</a></div>
    <div class='item7'><a href="logout.php" onclick=" return confirm('Are You sure you want to logout?');">Logout</a></div>
    </div>
  </aside>
   <nav>
     <div class='container3'>

          <div class='i1'><a href="http://localhost/answered queries/index.php" >Answered Queries</a></div>
        <div class='i2'><a href="http://localhost/unanswered queries/index.php" >Unanswered Queries</a></div>
      <div class='i3'><a href="http://localhost/feedback/index.php" >View Feedback</a></div>
      <div class='i4'><a href="http://localhost/review/index.php" >View Review</a></div>

   </nav>
   <main>
    <div class="box">

       <div >


<?php
if(isset($_POST['submit'])) {
	//$sem = $_POST['country'];
	$elective = $_POST['state'];
	$sql = "select * from `forums` where `Elective_id`='$elective' and Answer is null";
	//echo "called";
	$res = mysqli_query($con, $sql);
	if(mysqli_num_rows($res) > 0) {

		while($row = mysqli_fetch_object($res)) {
			echo "<form action='update.php' method='POST' style='font-size:1.25vw'>
      <label for='sid'>Student ID</label>
      <input type='text' id='sid' name='sid' value=".$row->Student_id."><br><br>
      <label for='eid'>Elective ID</label>
      <input type='text' id='eid' name='eid' value=".$row->Elective_id."><br><br>
      <label for='Question'>".$row->Question."</label>
      <input type='text' id='Question' name='Question' value=''><br><br>
      <label for='Answer'> Enter Answer</label>
      <input type='text' id='Answer' name='Answer' value=''<br><br><br>
      <input type='submit' name='submit' value='Submit'class='jk'> <br> <br>
    </form> ";
		}
	}

	else{
		echo "No Records";
	}

} else {
	//echo "hello";
	header('location: ./');
}
?>



       </div>
       <br>
       <br>
       <br>


 </div>

  </main>

</div>
  </body>

</html>
