<?php
  session_start();
  if(!isset($_SESSION['username']))
  {
    header('location:login.php');
  }
  $_SESSION['username']=$_SESSION['username'];
  include('server.php')
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Course Review Portal</title>
    <link rel="icon" type="image/jpg" href="../images/crp_logo.jpg">

    <!--Google Fonts-->
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat:900&display=swap"
      rel="stylesheet"
    />
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <!--Bootstrap-->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />

    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>

    <!--Font Awesome-->
    <script
      src="https://kit.fontawesome.com/04a54148ef.js"
      crossorigin="anonymous"
    ></script>

    <!--CSS-->
    <link rel="stylesheet" href="../css/elective.css" />

    <!--JS-->
    <script src="../js/select_elective.js"></script>

    <script>
      function direct_elective() {
        window.open("elective.php","_self");
      }
      </script>

  </head>


  <body>
      <div class="container-fluid">
      <!-- Nav Bar -->

      <navbar class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
        <a class="navbar-brand nav-bar-text" href="#" text allign="center">Explore Elective</a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarTogglerDemo01"
          aria-controls="navbarTogglerDemo01"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <ul class="navbar-nav ml-auto">
            </ul>
        </div>
      </navbar>
    </div>


    <section id="register_birth">
        <div class="container-fluid">
          <div class="row">
            <div class="col col-lg-12">
              <div class="reg-box" id="reg-box">
                <div class="reg-form" id="reg-form">
                  <img src="../images/choose_elective.png" width="300px" height="200px"><br>
                  <h3 text allign="center">Please fill in the details</h3><br>
                  <form method="post" action="choose_elective.php">


                  <div class="form-group">
                        <label for="deg">Select Degree</label><br>
                        <select onchange="print_branch('branch', this.selectedIndex); print_semester('semester', this.selectedIndex);" id="degree" value='' name ="degree" class="form-control" required></select>
                        <label for="brh">Select Branch</label><br>
                        <select id ="branch" class="form-control" value='' required name="branch"></select>
                        <script language="javascript">print_degree("degree");</script>
                        <label for="sem">Select Semester</label><br>
                        <select onchange="print_elective('elective', this.selectedIndex);" id ="semester" class="form-control" required value='' name="semester"></select>
                        <label for="elec">Select Elective</label><br>
                        <select id ="elective" onselect="getvalue("elective");" class="form-control" required name="elective" value=''></select><br>

                    <button  type="submit" class="btn btn-primary" name="explore_elective">Explore</button>
                    <button type="reset" class="btn btn-primary" id="electivereset_button">Reset</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>


  </body>
</html>
