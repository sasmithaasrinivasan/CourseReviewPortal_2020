<?php
session_start();
if(!isset($_SESSION['username']))
{
  header('location:../login.php');
}
include('db.php');
$_SESSION['username']=$_SESSION['username'];
?>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="r2.css">
	<link rel="stylesheet" href="r11.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>

  <body>
 <div class="container">

   <header>Course Review

     <div class="topnav"><?php  echo $_SESSION['username']; ?>

  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>

    </form>
    </button>

</div>
     </div>
   </header>
  <aside>
    <div class='container2'>
    <div class='item1'><a href='r.php'>Dashboard</a></div>
    <div class='item2'><a href='profile.php'>Profile</a></div>
    <div class='item3' ><a href=#>Courses</a></div>
    <div class='item4'><a href=#>Forum</a></div>
    <div class='item5'><a href='about.html'>About</a></div>
    <div class='item6'><a href=#>Help</a></div>
    <div class='item7'><a href=#>Logout</a></div>
    </div>
  </aside>
   <nav>
     <div class='container3'>
       <div class='i1'><a href='r.php' >Home</a></div>
          <div class='i2'><a href='r1.php'>Your reviews</a></div>
        <div class='i3'><a href='r2.php'>Query Status</a></div>
      <div class='i4'><a href='r3.php'>Viewed Courses</a></div>

   </nav>
   <main>
   <div class="dropdown">
  <button class="dropbtn">Status</button>
  <div class="dropdown-content">
    <a href="ans.php">Answered</a>
    <a href="unans.php">Unanswered</a>
   </div>
 </div>
<?php
    $uname=$_SESSION['username'];
	     $sql="Select Student_id,Elective_id,Question,Answer,Faculty_id from forums where Student_id='$uname' and Answer is not null;  ";
		 $result=mysqli_query($con,$sql);
		 $resultcheck=mysqli_num_rows($result);?>
		 <div class="container">
	<table width=1200px>
		<thead>
			<tr>
				<th width=20%>Elective ID</th>
				<th width=40%>Question</th>
				<th width=40%>Answer</th>
				<th width=30%>Answered by</th>

			</tr>
		</thead>
		<?php while($row=mysqli_fetch_assoc($result)):?>
		<tbody>
			<tr>
				<td><?php echo $row['Elective_id']; ?></td>
				<td><?php echo $row['Question']; ?></td>
				<td><?php echo $row['Answer']; ?></td>
				<td><?php echo $row['Faculty_id']; ?></td>

			</tr>

		</tbody>
		<?php endwhile;?>
	</table>

   </main>
   </body>
   </html>
