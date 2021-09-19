<?php session_start();  ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title> Course Review Portal </title>
  <link rel="icon" type="image/jpg" href="../images/crp_logo.jpg">

  <!--CSS -->

  <link rel="stylesheet" href="../css/login.css">


  <!--Bootstrap-->

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <!-- JavaScript Bootstrap -->

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

  <!--Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
<body>
  <div class="row no-gutters">

    <div class="col-lg-6 no-gutters">

      <div class=left-side>

        <div class="row no-gutters">

          <div class="col-lg-12 no-gutters slide">

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="../images/login_pic 1.png" class="d-block w-100" alt="slide-img-1">
                </div>
                <div class="carousel-item">
                  <img src="../images/login_pic 2.jpg" class="d-block w-100" alt="slide-img-2">
                </div>
                <div class="carousel-item">
                  <img src="../images/login_pic 3.png" class="d-block w-100" alt="slide-img-3">
                </div>
                <div class="carousel-item">
                  <img src="../images/login_pic 4.png" class="d-block w-100" alt="slide-img-4">
                </div>
                <div class="carousel-item">
                  <img src="../images/login_pic 5.jpg" class="d-block w-100" alt="slide-img-5">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>

          </div>

          <div class="col-lg-12 no-gutters about">
              <h3 class= "about-heading">ABOUT COURSE REVIEW</h3>

              <p class="about-des">
                To make the elective selection process easier for students,
                a course review portal is developed,
                which collects review or feedback of courses from students who have previously attended the courses
                and neatly presents it in a review page.
              </p>
          </div>

        </div>

      </div>

    </div>
    <div class="col-lg-6  no-gutters title">

      <div class="right-side">

        <img src="../images/login_logo.png" class="logo" alt="Logo" >

        <a href="..\adminLogin\login.php" class="Admin">Admin</a>

        <form class="form-signin  logDet" action="validate.php" method="post" onsubmit="return login()">

          <h4 class="welCard"><span class="wel">Welcome back to </span><a href="" class="newAcc">Course Review</a></h4>

          <h1>Login</h1>

          <div class="form-label-group  uid login" >
            <input type="Username" id="inputUid" class="form-control" placeholder="Username" required autofocus name="user">
            <div id="uid_error">Please Enter a valid Username</div>
          </div>

          <div class="form-label-group password login">
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required autofocus name="pass">
            <div id="pass_error">Please Enter a Valid Password</div>
          </div>

          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 checkbox mb-3">
              <label>
                <input type="checkbox" value="remember-me"> Remember me
              </label>
            </div>


            <div class="col-lg-6 col-md-6 col-sm-6 mb-3" style="padding-left: 55px ">
              <a href="" id="fpass" onclick="getPassword();"> Forgot Password?</a>
            </div>

          </div>

          <button class="btn btn-lg btn-warning btn-block  btnSignin" type="submit" >Sign in</button>

          <p class="newAccount">
           Want a new account? <a href="" class="newAcc" onclick="getStarted();">GET STARTED</a>
          </p>
        </form>

        <?php
          $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

          if(strpos($fullUrl,"login=notValid")==true)
          {
            echo "<script> alert('Invalid Username or Password') </script>";
            exit();
          }

         ?>

      </div>

    </div>





  </div>
  <script src="..\js\loginPage.js" charset="utf-8"></script>
</body>

</html>
