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
    <div class='item4'><a href="http://localhost/forumredo/index.php">Forum</a></div>
    <div class='item5'><a href=#>Settings</a></div>
    <div class='item6'><a href=#>Help</a></div>
    <div class='item7'><a href="logout.php" onclick=" return confirm('Are You sure you want to logout?');">Logout</a></div>
    </div>
  </aside>
   <nav>
     <div class='container3'>

          <div class='i1'><a href="http://localhost/answered queriesredo/index.php" >Answered Queries</a></div>
        <div class='i2'><a href="http://localhost/unanswered queries/index.php" >Unanswered Queries</a></div>
      <div class='i3'><a href="http://localhost/feedbackredo/index.php" >View Feedback</a></div>
      <div class='i4'><a href="http://localhost/reviewredo/index.php" >View Review</a></div>

   </nav>
   <main>
    <div class="box">

	<div class="">
	<form action ="" method="POST">
		<label class="dropbtn"> Semester:</label>
		<select name="country" id="country" class="jk">`
			<option value=''>------- Select --------</option>
			<?php
			$sql = "select distinct `Elective_Sem` from `Elective` natural join `Elec_Fac` where `Faculty_id`='FAC09'";
			$res = mysqli_query($con, $sql);
			if(mysqli_num_rows($res) > 0) {
				while($row = mysqli_fetch_object($res)) {
					echo "<option value='".$row->Elective_Sem."'>".$row->Elective_Sem."</option>";
				}
			}
			?>
		</select>

		<label class="dropbtn"> Elective:</label>
		<select name="state" id="state" class="jk" onchange="onchange1()"><option val="">------- Select --------</option></select>
     </form>



	</div>
  <p name="result" id= "result"> </p>






       </div>
       <br>
       <br>
       <br>


 </div>

  </main>

</div>
  </body>

</html>
