<?php include('db.php');?>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="prof.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>

  <body>
 <div class="container">

   <header>Course Review

     <div class="topnav">CB.EN.U4CSE18455

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
    <div class='item2'><a href='pro.php'>Profile</a></div>
    <div class='item3' ><a href=#>Courses</a></div>
    <div class='item4'><a href=#>Forum</a></div>
    <div class='item5'><a href='about.html'>About </a></div>
    <div class='item6'><a href=#>Help</a></div>
    <div class='item7'><a href=#>Logout</a></div>
    </div>
  </aside>


   <main>

   <?php
	     $sql="Select * from student where student_id='CB.EN.U4CSE18455';  ";
		 $result=mysqli_query($con,$sql);
		 $row=mysqli_fetch_assoc($result);?>
		 ?>
		<br><br><br><br>
       <div class='p1'> Name: <?php echo $row['stud_Name'];?></div><br>
       <div class='p2'> Roll Number: <?php echo $row['student_id'];?></div><br>
       <div class='p3'> Current Semester:<?php echo $row['stud_sem'];?></div><br>
       <div class='p4'> Department:<?php echo $row['stud_Dept_Name'];?></div><br>
        <div class='p5'> Degree:<?php echo $row['stud_Degree_Name'];?></div><br><br>
        <div class='p6'><a href='pass1.php'>Change password</a></div>




   </main>
   </div>

  </body>
</html>
