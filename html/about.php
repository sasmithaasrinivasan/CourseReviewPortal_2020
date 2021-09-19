<?php

    session_start();
    if(!isset($_SESSION['username']))
    {
      header('location:login.php');
    }
   $_SESSION['username']=$_SESSION['username'];

?>

<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="about.css">
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
    <div class='item2'><a href='profile.php'>Profile</a></div>
    <div class='item3' ><a href=#>Courses</a></div>
    <div class='item4'><a href=#>Forum</a></div>
    <div class='item5'><a href='about.html'>About </a></div>
    <div class='item6'><a href=#>Help</a></div>
    <div class='item7'><a href=#>Logout</a></div>
    </div>
  </aside>


   <main>

      <img src="https://biochemistry.blob.core.windows.net/public/2019/12/AboutUsHerobanner.jpg" alt="Person" height="250">
       <div class='c4'>
         <div class='p1'> This portal was created to guide students to choose the elective they wish by helping them with the knowledge of all the electived provided by the various departments across the university. So, goodluck for the journey to attain success. Adios!</div>
       </div>
         </div>

     </div>
   </main>

</div>
  </body>
</html>
