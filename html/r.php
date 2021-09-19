<?php

    session_start();
    if(!isset($_SESSION['username']))
    {
      header('location:login.php');
    }
   //include('db.php');
   $_SESSION['username']=$_SESSION['username'];

?>
<html>

  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="r.css">
	<link rel="stylesheet" href="rr.css">
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
    <div class='item1'><a href='r.php' >Dashboard</a></div>
    <div class='item2'><a href='pro.php'>Profile</a></div>
    <div class='item3' ><a href='choose_elective.php'>Courses</a></div>
    <div class='item4'><a href='forumredo/index.php'>Forum</a></div>
    <div class='item5'><a href='about.html'>About</a></div>
    <div class='item6'><a href=#>Help</a></div>
    <div class='item7'><a href='logout.php'>Logout</a></div>
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
   <h2> Quote of the day: </h2>
   		<img src='../images/unnamed.png' width="510" height="600"></img>
        <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=Asia%2FKolkata&amp;src=djFiaW5uc3UzdTdjN2htcjlpM3RlOGVjNm9AZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;color=%233F51B5" style="border:solid 1px #777"
		width="800" height="600" frameborder="0" scrolling="no"></iframe>



</main>
</body>
</html>

   </main>

</div>
  </body>
</html>
