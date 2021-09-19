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
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="faculty forum.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
  <body>

 <div class="container">

   <header>Course Review

     <div class="topnav"><?php  echo $_SESSION['username']; ?>


     </div>
   </header>
  <aside>
    <div class='container2'>
    <div class='item1'><a href="index.php">Dashboard</a></div>
    <div class='item2'><a href=#>Profile</a></div>
    <div class='item3' ><a href=#>Courses</a></div>
    <div class='item4'><a href="../forumredo/index.php">Forum</a></div>
    <div class='item5'><a href=#>Settings</a></div>
    <div class='item6'><a href=#>Help</a></div>
    <div class='item7'><a href="logout.php" onclick=" return confirm('Are You sure you want to logout?');">Logout</a></div>
    </div>
  </aside>
   <nav>
     <div class='container3'>

          <div class='i1'><a href="../answered queriesredo/index.php" >Answered Queries</a></div>
        <div class='i2'><a href="../unanswered queries/index.php" >Unanswered Queries</a></div>
      <div class='i3'><a href="../feedbackredo/index.php" >View Feedback</a></div>
      <div class='i4'><a href="../reviewredo/index.php" >View Review</a></div>

   </nav>
   <main>
    <div class="box">
    <p style='font-size:2vw'>
    Forums - Can view all question and answers for any elective
    <br>
    Answered Queries - Can view the answered queries in electives handled by the faculty.
    <br>
    Unanswered Queries - Can view the unanswered queries in electives handled by the faculty and can be answered.
    <br>
    Feedback - Can view feedback of the electives handled by the faculty.
    <br>
    Review -  Can view the alumni reviews of the electives handled by the faculty.
    </p>



 </div>

  </main>

</div>
  </body>

</html>
