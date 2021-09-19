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


    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

    <link
      href="https://fonts.googleapis.com/css?family=Montserrat:900&display=swap"
      rel="stylesheet"
    />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

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



    <link href="https://cdn.quilljs.com/1.0.0/quill.snow.css" rel="stylesheet">
    <!--Font Awesome-->
    <script
      src="https://kit.fontawesome.com/04a54148ef.js"
      crossorigin="anonymous"
    ></script>

    <!--CSS-->
    <link rel="stylesheet" href="../css/elective.css" />

    <!--JS-->
    <script src="../js/select_elective.js"></script>
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/perfect-scrollbar/perfect-scrollbar.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../css/table_util.css">
    <link rel="stylesheet" type="text/css" href="../css/table_main.css">



    <script>
      function direct_elective() {
        var txt;
  if (confirm("Do you want to post a feedback?")) {
    txt = "Succesfully submitted!";
  } else {
    txt = "    Try again!";
  }
  //document.getElementById('r1').value = '';
  //document.getElementById("demo").innerHTML = txt;
        //window.open("elective.html#pr","_self");
      }
      </script>

<script>
  function direct_elective_1() {
    var txt;
  if (confirm("Do you want to post a questtion?")) {
    txt = "Succesfully submitted!";
  } else {
    txt = "    Try again!";
  }
  //$q=document.getElementById('q1').value;
  //document.getElementById('q1').value = '';
  //document.getElementById("demo1").innerHTML = txt;
    //window.open("elective.html#pq","_self");
  }
  </script>

  </head>


  <body>
      <div class="container-fluid">
      <!-- Nav Bar -->

      <navbar class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
        <a class="navbar-brand nav-bar-text" href="#" text allign="center" style="font-size:25px;">Elective</a>
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
            <li class="nav-item">
              <a class="nav-link nav-bar-text" href="#ci" style="font-size:18px;color:white;">Course Insights&nbsp;&nbsp;</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-bar-text" href="#co" style="font-size:18px;color:white;">Course Outcome&nbsp;&nbsp;</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-bar-text" href="#sy" style="font-size:18px;color:white;">Syllabus&nbsp;&nbsp;</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-bar-text" href="#ec" style="font-size:18px;color:white;">Evaluation Criteria&nbsp;&nbsp;</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-bar-text" href="#hf" style="font-size:18px;color:white;">Handling Faculties&nbsp;&nbsp;</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-bar-text" href="#af" style="font-size:18px;color:white;">Alumini Feedback&nbsp;&nbsp;</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-bar-text" href="#sr" style="font-size:18px;color:white;">Review&nbsp;&nbsp;</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-bar-text" href="#pr" style="font-size:18px;color:white;">Post Review&nbsp;&nbsp;</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-bar-text" href="#df" style="font-size:18px;color:white;">FAQ&nbsp;&nbsp;</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-bar-text" href="#pq" style="font-size:18px;color:white;">Post question&nbsp;&nbsp;</a>
            </li>
            </ul>
        </div>
      </navbar>
    </div>

    <section id="ci" style=background-color:#c9e783;>
      <div class="row" style=padding-top:200px;>
        <div class="column">
          <div class="container">
            <img src="../images/objectives.jpg" alt="Avatar" class="image">
            <div class="overlay">
              <div class="text"><p>Course code:<br><?php echo $_SESSION['id'];?><br>Course Objectives:<br><?php echo $_SESSION['course_objective'];?><br>Credits:&nbsp;&nbsp;<?php echo $_SESSION['credits'];?></p></div>
            </div>
          </div>
        </div>
       <div class="column">
        <div class="container">
          <img src="../images/prereq.jpg" alt="Avatar" class="image">
          <div class="overlay">
            <div class="text">Pre-requisites:<br><?php echo $_SESSION['prereqs'];?></div>
          </div>
        </div>
        </div>
       <div class="column">
        <div class="container">
          <img src="../images/books.jpg" alt="Avatar" class="image">
          <div class="overlay">
            <div class="text">Reference books:<br><?php echo $_SESSION['textbooks'];?></div>
          </div>
        </div>
    </div>
    </div>


      <br><br><br><br><br><br>
  </section>

    <section id="co">
      <div class="limiter">
        <div class="container-table100">
          <div class="wrap-table100">
            <div class="table100 ver1">
              <div class="table100-firstcol">
                <table>
                  <thead>
                    <tr class="row100 head">
                      <th class="cell100 column1">CO's</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="row100 body">
                      <td class="cell100 column1">CO1<br></td>
                    </tr>

                    <tr class="row100 body">
                      <td class="cell100 column1">CO2<br></td>
                    </tr>

                    <tr class="row100 body">
                      <td class="cell100 column1">CO3<br><br></td>
                    </tr>

                    <tr class="row100 body">
                      <td class="cell100 column1">CO4<br></td>
                    </tr>

                    <tr class="row100 body">
                      <td class="cell100 column1">CO5<br><br></td>
                    </tr>


                  </tbody>
                </table>
              </div>

              <div class="wrap-table100-nextcols js-pscroll">
                <div class="table100-nextcols">
                  <table>
                    <thead>
                      <tr class="row100 head">
                        <th class="cell100 column2">Course Outcome</th>
                        <th class="cell100 column3">Bloom's Taxonomy Level</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="row100 body">
                        <td class="cell100 column2">
                        <?php echo $_SESSION['co'][0]?>
                          </td>
                        <td class="cell100 column3"> <?php echo $_SESSION['bl'][0];?></td>
                      </tr>

                      <tr class="row100 body">
                        <td class="cell100 column2">
                        <?php echo $_SESSION['co'][1];?>
                          </td>
                        <td class="cell100 column3"><?php echo $_SESSION['bl'][1];?></td>
                      </tr>

                      <tr class="row100 body">
                        <td class="cell100 column2"><?php echo $_SESSION['co'][2];?></td>
                        <td class="cell100 column3"><?php echo $_SESSION['bl'][2];?></td>
                      </tr>

                      <tr class="row100 body">
                        <td class="cell100 column2"><?php echo $_SESSION['co'][3];?></td>
                        <td class="cell100 column3"><?php echo $_SESSION['bl'][3];?></td>
                      </tr>

                      <tr class="row100 body">
                        <td class="cell100 column2">
                        <?php echo $_SESSION['co'][4];?>
                          </td>
                        <td class="cell100 column3"><?php echo $_SESSION['bl'][4];?></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section id="sy">
      <div class="limiter">
        <div class="container-table100">
          <div class="wrap-table100">
            <div class="table100 ver1">
              <div class="table100-firstcol">
                <table>
                  <thead>
                    <tr class="row100 head">
                      <th class="cell100 column1">Unit Number<br></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="row100 body">
                      <td class="cell100 column1">Unit 1<br><br><br><br><br><br><br><br><br></td>
                    </tr>

                    <tr class="row100 body">
                      <td class="cell100 column1">Unit 2<br><br><br><br><br></td>
                    </tr>

                    <tr class="row100 body">
                      <td class="cell100 column1">Unit 3<br><br><br><br><br><br></td>
                    </tr>

                  </tbody>
                </table>
              </div>

              <div class="wrap-table100-nextcols js-pscroll">
                <div class="table100-nextcols">
                  <table>
                    <thead>
                      <tr class="row100 head">
                      <!--<th class="cell100 column2">Unit NO</th>-->
                        <th class="cell100 column2">Part 1 syllabus</th>
                        <th class="cell100 column23">Part 2 syllabus</th>
                        <th class="cell100 column4">Part 3 syllabus</th>
                        <th class="cell100 column5">No. of hours</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="row100 body">
                      <!--<td class="cell100 column2">Unit 1</th>-->
                        <td class="cell100 column2"><?php echo $_SESSION['un1'][0];?></td>
                        <td class="cell100 column23"><?php echo $_SESSION['un1'][1];?></td>
                        <td class="cell100 column4"><?php echo $_SESSION['un1'][2];?></td>
                        <td class="cell100 column5"><?php echo $_SESSION['no'][0];?></td>
                      </tr>

                      <tr class="row100 body">
                      <!--<td class="cell100 column2">Unit 2</th>-->
                        <td class="cell100 column2"><?php echo $_SESSION['un2'][0];?></td>
                        <td class="cell100 column23"><?php echo $_SESSION['un2'][1];?></td>
                        <td class="cell100 column4"> <?php echo $_SESSION['un2'][2];?></td>
                        <td class="cell100 column5"><?php echo $_SESSION['no'][1];?></td>
                      </tr>

                      <tr class="row100 body">
                      <!--<td class="cell100 column2">Unit 3</th>-->
                        <td class="cell100 column2"> <?php echo $_SESSION['un3'][0];?></td>
                        <td class="cell100 column23"><?php echo $_SESSION['un3'][1];?></td>
                        <td class="cell100 column4"><?php echo $_SESSION['un3'][2];?></td>
                        <td class="cell100 column5"><?php echo $_SESSION['no'][2];?></td>
                      </tr>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="ec">
      <div class="limiter">
        <div class="container-table100">
          <div class="wrap-table100">
            <div class="table100 ver1">
              <div class="table100-firstcol">
                <table>
                  <thead>
                    <tr class="row100 head">
                      <th class="cell100 column1">Assessment Type</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="row100 body">
                      <td class="cell100 column1">Internal</td>
                    </tr>

                    <tr class="row100 body">
                      <td class="cell100 column1"><br></td>
                    </tr>

                    <tr class="row100 body">
                      <td class="cell100 column1"><br></td>
                    </tr>

                    <tr class="row100 body">
                      <td class="cell100 column1">External</td>
                    </tr>

                    <tr class="row100 body">
                      <td class="cell100 column1"><br></td>
                    </tr>

                  </tbody>
                </table>
              </div>

              <div class="wrap-table100-nextcols js-pscroll">
                <div class="table100-nextcols">
                  <table>
                    <thead>
                      <tr class="row100 head">
                        <th class="cell100 column2">Component</th>
                        <th class="cell100 column3">Count</th>
                        <th class="cell100 column4">Contribution</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="row100 body">
                        <td class="cell100 column2"><?php echo $_SESSION['component'][0];?></td>
                        <td class="cell100 column3"><?php echo $_SESSION['count'][0];?></td>
                        <td class="cell100 column4"><?php echo $_SESSION['weightage'][0];?></td>
                      </tr>

                      <tr class="row100 body">
                        <td class="cell100 column2"><?php echo $_SESSION['component'][1];?></td>
                        <td class="cell100 column3"><?php echo $_SESSION['count'][1];?></td>
                        <td class="cell100 column4"><?php echo $_SESSION['weightage'][1];?></td>
                      </tr>

                      <tr class="row100 body">
                        <td class="cell100 column2"><?php echo $_SESSION['component'][2];?></td>
                        <td class="cell100 column3"><?php echo $_SESSION['count'][2];?></td>
                        <td class="cell100 column4"><?php echo $_SESSION['weightage'][2];?></td>
                      </tr>

                      <tr class="row100 body">
                        <td class="cell100 column2"><?php echo $_SESSION['component'][3];?></td>
                        <td class="cell100 column3"><?php echo $_SESSION['count'][3];?></td>
                        <td class="cell100 column4"><?php echo $_SESSION['weightage'][3];?></td>
                      </tr>

                      <tr class="row100 body">
                        <td class="cell100 column2"><?php echo $_SESSION['component'][4];?></td>
                        <td class="cell100 column3"><?php echo $_SESSION['count'][4];?></td>
                        <td class="cell100 column4"><?php echo $_SESSION['weightage'][4];?></td>
                      </tr>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section id="hf">
      <div class="limiter">
        <div class="container-table100">
          <div class="wrap-table100">
            <div class="table100 ver1">
              <div class="table100-firstcol">
                <table>
                  <thead>
                    <tr class="row100 head">
                      <th class="cell100 column1">Handling Faculties</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="row100 body">
                      <td class="cell100 column1"><?php echo $_SESSION['hf'][0];?></td>
                    </tr>

                    <tr class="row100 body">
                      <td class="cell100 column1"><?php echo $_SESSION['hf'][1];?></td>
                    </tr>

                    <tr class="row100 body">
                      <td class="cell100 column1"></td>
                    </tr>

                    <tr class="row100 body">
                      <td class="cell100 column1"></td>
                    </tr>

                    <tr class="row100 body">
                      <td class="cell100 column1"></td>
                    </tr>

                  </tbody>
                </table>
              </div>

              <div class="wrap-table100-nextcols js-pscroll">
                <div class="table100-nextcols">
                  <table>
                    <thead>
                      <tr class="row100 head">
                        <th class="cell100 column2">Position</th>
                        <th class="cell100 column23">Qualification</th>
                        <th class="cell100 column4">Experience (in years)</th>
                        <th class="cell100 column5">Contacts</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="row100 body">
                        <td class="cell100 column2"><?php echo $_SESSION['pos'][0];?></td>
                        <td class="cell100 column23"><?php echo $_SESSION['qual'][0];?></td>
                        <td class="cell100 column4"><?php echo $_SESSION['exp'][0];?></td>
                        <td class="cell100 column5"><?php echo $_SESSION['cont'][0];?></td>
                      </tr>

                      <tr class="row100 body">
                        <td class="cell100 column2"><?php echo $_SESSION['pos'][1];?></td>
                        <td class="cell100 column23">M<?php echo $_SESSION['qual'][1];?></td>
                        <td class="cell100 column4"><?php echo $_SESSION['exp'][1];?></td>
                        <td class="cell100 column5"><?php echo $_SESSION['cont'][1];?></td>
                      </tr>

                      <tr class="row100 body">
                        <td class="cell100 column2"></td>
                        <td class="cell100 column23"></td>
                        <td class="cell100 column4"></td>
                        <td class="cell100 column5"></td>
                      </tr>

                      <tr class="row100 body">
                        <td class="cell100 column2"></td>
                        <td class="cell100 column23"></td>
                        <td class="cell100 column4"></td>
                        <td class="cell100 column5"></td>
                      </tr>

                      <tr class="row100 body">
                        <td class="cell100 column2"></td>
                        <td class="cell100 column23"></td>
                        <td class="cell100 column4"></td>
                        <td class="cell100 column5"></td>
                      </tr>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br><br><br><br><br><br><br>
      <br><br><br><br><br><br><br>
    </section>





    <section id="af">
      <div class="container" style="padding-top:100px;width:1000px;height:700px">
        <div id="myCarousel1" class="carousel slide" data-ride="carousel" data-interval="25000" >
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
            <?php
          $x = 1;
        while($x < count($_SESSION['an'])) {?>
            <li data-target="#myCarousel2" data-slide-to=$x></li>
            <?php
   $x=$x+1;
     }

?>
          </ol>
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
              <div class="item active" >
                  <div id="about_content1" style="background-image: linear-gradient(-90deg,#06beb6, #48b1bf)">
                    <p id=p1  style="color: white; font-family: 'Trocchi', serif; font-size: 25px; font-weight: normal; line-height: 48px; margin: 0;padding-left:10px;">
                      <b><i>Name : <?php echo $_SESSION['an'][0];?> &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                             Company :<?php echo $_SESSION['acomp'][0];?>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                  Position : <?php echo $_SESSION['apos'][0];?><br>Experience in this job :<?php echo $_SESSION['aexp'][0];?> years&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                      Year of passing : <?php echo $_SESSION['ayop'][0];?><br>Feedback :<br><?php echo $_SESSION['ard'][0];?></i></b></p>
                      <br><br><br><br><br>
                  </div>
              </div>
              <?php
          $x = 1;

        while($x < count($_SESSION['an'])) {?>
              <div class="item">
                  <div id="about_content1" style="background-image: linear-gradient(-90deg,#06beb6, #48b1bf)">
                    <p id=p1  style="color: white; font-family: 'Trocchi', serif; font-size: 25px; font-weight: normal; line-height: 48px; margin: 0;padding-left:10px;">
                      <b><i>Name : <?php echo $_SESSION['an'][$x];?> &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                             Company : <?php echo $_SESSION['acomp'][$x];?>&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                             Position : <?php echo $_SESSION['apos'][$x];?><br>Experience in this job : <?php echo $_SESSION['aexp'][$x];?> years  &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                      Year of passing : <?php echo $_SESSION['ayop'][$x];?><br>Feedback :<br><?php echo $_SESSION['ard'][$x];?></i></b></p>
                      <br><br><br><br><br>
                  </div>
              </div>
              <?php
   $x=$x+1;
     }

?>

          </div>
          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel1" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel1" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <br><br><br><br><br><br>
    </section>

    <section id="sr">
      <div class="container" style="padding-top:100px;width:1000px;height:700px">
        <div id="myCarousel2" class="carousel slide" data-ride="carousel" data-interval="25000" >
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
            <?php
          $x = 1;
        while($x < count($_SESSION['sn'])) {?>
   <li data-target="#myCarousel2" data-slide-to=$x></li>
            <?php
   $x=$x+1;
     }

?>
          </ol>

          <!-- Wrapper for slides -->
          <?php
          $x=0;
          ?>
          <div class="carousel-inner">
          <div class="item active" >
                  <div id="about_content1" style="background-image: linear-gradient(-90deg,#FF7F50, #FFA500)">
                    <p id=p1  style="color: white; font-family: 'Trocchi', serif; font-size: 25px; font-weight: normal; line-height: 48px; margin: 0;padding-left:10px;">
                      <b><i>Name : <?php echo $_SESSION['sn'][$x];?> &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                             Semester : <?php echo $_SESSION['ssem'][$x];?> &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                  Rating : <?php echo $_SESSION['srat'][$x];?> <br>Course Review : <br> <?php echo $_SESSION['scr'][$x];?></i></b></p>
                      <br><br><br><br><br>
                  </div>
              </div>

          <?php
          $x = 1;

        while($x < count($_SESSION['sn'])) {?>

              <div class="item" >
                  <div id="about_content1" style="background-image: linear-gradient(-90deg,#FF7F50, #FFA500)">
                    <p id=p1  style="color: white; font-family: 'Trocchi', serif; font-size: 25px; font-weight: normal; line-height: 48px; margin: 0;padding-left:10px;">
                      <b><i>Name : <?php echo $_SESSION['sn'][$x];?> &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                             Semester : <?php echo $_SESSION['ssem'][$x];?> &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                  Rating : <?php echo $_SESSION['srat'][$x];?> <br>Course Review : <br> <?php echo $_SESSION['scr'][$x];?></i></b></p>
                      <br><br><br><br><br>
                  </div>
              </div>
              <?php
   $x=$x+1;
     }

?>

          </div>
          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel2" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel2" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <br><br><br><br><br><br> <br>
      <br><br><br><br><br><br><br>
    </section>

    <section id="pr">
      <div class="container-fluid">
        <div class="row">
          <div class="col col-lg-12">
            <div class="reg-box" id="reg-box">
              <div class="reg-form" id="reg-form">
                <img style="padding-right:35px;" src="../images/feedback.jpg" width="300px" height="200px"><br>
                <h3 style="padding-left:10px;">Post your review about the course</h3><br>
                <form id="pr" method="post" action="elective.php" style="padding-right:20px;">
                    <div class="form-group" >
                      <label for="fb"></label><br>
                      <textarea rows="20" cols="68" name="fb" id="fb" value=''></textarea>
                      <!--<input type="text" name="fb" id="fb" form="pr">
      <label for='fb'> E</label>
      <input type='text' id='fb' name='fb' value=''><br><br><br>-->
                  </div>

                 <!--<div id="toolbar">
                    <div id="title"> Rich-text Editor </div>
                    <button id="bold" onclick="makeBold()">
                      <i class="fas fa-bold"></i>
                     </button>
                    <button id="italic" onclick="makeItalic()">
                      <i class="fas fa-italic"></i>
                    </button>

                    <button id="underline" onclick="doUnderline()">
                       <i class="fas fa-underline"></i>
                    </button>

                    <button id="align_left" onclick="justifyLeft()">
                      <i class="fas fa-align-left"></i>
                    </button>
                    <button id="align_centre" onclick="justifyCenter()">
                      <i class="fas fa-align-center"></i>
                     </button>
                    <button id="align_right" onclick="justifyRight()">
                      <i class="fas fa-align-right"></i>
                     </button>

                  </div>
                  <div name = "fb" id="editor" contenteditable="true"></div>  -->

                  <h3 style="padding-left:70px;">Rate the course</h3><br>
                    <div class="feedback">
                      <div class="rating">
                        <input type="radio" name="rating" id="rating-5" value="5">
                        <label for="rating-5"></label>
                        <input type="radio" name="rating" id="rating-4" value="4">
                        <label for="rating-4"></label>
                        <input type="radio" name="rating" id="rating-3" value="3">
                        <label for="rating-3"></label>
                        <input type="radio" name="rating" id="rating-2" value="2">
                        <label for="rating-2"></label>
                        <input type="radio" name="rating" id="rating-1" value="1">
                        <label for="rating-1"></label>
                        <div class="emoji-wrapper">
                          <div class="emoji">
                            <svg class="rating-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
                            <path d="M512 256c0 141.44-114.64 256-256 256-80.48 0-152.32-37.12-199.28-95.28 43.92 35.52 99.84 56.72 160.72 56.72 141.36 0 256-114.56 256-256 0-60.88-21.2-116.8-56.72-160.72C474.8 103.68 512 175.52 512 256z" fill="#f4c534"/>
                            <ellipse transform="scale(-1) rotate(31.21 715.433 -595.455)" cx="166.318" cy="199.829" rx="56.146" ry="56.13" fill="#fff"/>
                            <ellipse transform="rotate(-148.804 180.87 175.82)" cx="180.871" cy="175.822" rx="28.048" ry="28.08" fill="#3e4347"/>
                            <ellipse transform="rotate(-113.778 194.434 165.995)" cx="194.433" cy="165.993" rx="8.016" ry="5.296" fill="#5a5f63"/>
                            <ellipse transform="scale(-1) rotate(31.21 715.397 -1237.664)" cx="345.695" cy="199.819" rx="56.146" ry="56.13" fill="#fff"/>
                            <ellipse transform="rotate(-148.804 360.25 175.837)" cx="360.252" cy="175.84" rx="28.048" ry="28.08" fill="#3e4347"/>
                            <ellipse transform="scale(-1) rotate(66.227 254.508 -573.138)" cx="373.794" cy="165.987" rx="8.016" ry="5.296" fill="#5a5f63"/>
                            <path d="M370.56 344.4c0 7.696-6.224 13.92-13.92 13.92H155.36c-7.616 0-13.92-6.224-13.92-13.92s6.304-13.92 13.92-13.92h201.296c7.696.016 13.904 6.224 13.904 13.92z" fill="#3e4347"/>
                          </svg>
                            <svg class="rating-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
                            <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534"/>
                            <path d="M328.4 428a92.8 92.8 0 0 0-145-.1 6.8 6.8 0 0 1-12-5.8 86.6 86.6 0 0 1 84.5-69 86.6 86.6 0 0 1 84.7 69.8c1.3 6.9-7.7 10.6-12.2 5.1z" fill="#3e4347"/>
                            <path d="M269.2 222.3c5.3 62.8 52 113.9 104.8 113.9 52.3 0 90.8-51.1 85.6-113.9-2-25-10.8-47.9-23.7-66.7-4.1-6.1-12.2-8-18.5-4.2a111.8 111.8 0 0 1-60.1 16.2c-22.8 0-42.1-5.6-57.8-14.8-6.8-4-15.4-1.5-18.9 5.4-9 18.2-13.2 40.3-11.4 64.1z" fill="#f4c534"/>
                            <path d="M357 189.5c25.8 0 47-7.1 63.7-18.7 10 14.6 17 32.1 18.7 51.6 4 49.6-26.1 89.7-67.5 89.7-41.6 0-78.4-40.1-82.5-89.7A95 95 0 0 1 298 174c16 9.7 35.6 15.5 59 15.5z" fill="#fff"/>
                            <path d="M396.2 246.1a38.5 38.5 0 0 1-38.7 38.6 38.5 38.5 0 0 1-38.6-38.6 38.6 38.6 0 1 1 77.3 0z" fill="#3e4347"/>
                            <path d="M380.4 241.1c-3.2 3.2-9.9 1.7-14.9-3.2-4.8-4.8-6.2-11.5-3-14.7 3.3-3.4 10-2 14.9 2.9 4.9 5 6.4 11.7 3 15z" fill="#fff"/>
                            <path d="M242.8 222.3c-5.3 62.8-52 113.9-104.8 113.9-52.3 0-90.8-51.1-85.6-113.9 2-25 10.8-47.9 23.7-66.7 4.1-6.1 12.2-8 18.5-4.2 16.2 10.1 36.2 16.2 60.1 16.2 22.8 0 42.1-5.6 57.8-14.8 6.8-4 15.4-1.5 18.9 5.4 9 18.2 13.2 40.3 11.4 64.1z" fill="#f4c534"/>
                            <path d="M155 189.5c-25.8 0-47-7.1-63.7-18.7-10 14.6-17 32.1-18.7 51.6-4 49.6 26.1 89.7 67.5 89.7 41.6 0 78.4-40.1 82.5-89.7A95 95 0 0 0 214 174c-16 9.7-35.6 15.5-59 15.5z" fill="#fff"/>
                            <path d="M115.8 246.1a38.5 38.5 0 0 0 38.7 38.6 38.5 38.5 0 0 0 38.6-38.6 38.6 38.6 0 1 0-77.3 0z" fill="#3e4347"/>
                            <path d="M131.6 241.1c3.2 3.2 9.9 1.7 14.9-3.2 4.8-4.8 6.2-11.5 3-14.7-3.3-3.4-10-2-14.9 2.9-4.9 5-6.4 11.7-3 15z" fill="#fff"/>
                          </svg>
                            <svg class="rating-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
                            <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534"/>
                            <path d="M336.6 403.2c-6.5 8-16 10-25.5 5.2a117.6 117.6 0 0 0-110.2 0c-9.4 4.9-19 3.3-25.6-4.6-6.5-7.7-4.7-21.1 8.4-28 45.1-24 99.5-24 144.6 0 13 7 14.8 19.7 8.3 27.4z" fill="#3e4347"/>
                            <path d="M276.6 244.3a79.3 79.3 0 1 1 158.8 0 79.5 79.5 0 1 1-158.8 0z" fill="#fff"/>
                            <circle cx="340" cy="260.4" r="36.2" fill="#3e4347"/>
                            <g fill="#fff">
                              <ellipse transform="rotate(-135 326.4 246.6)" cx="326.4" cy="246.6" rx="6.5" ry="10"/>
                              <path d="M231.9 244.3a79.3 79.3 0 1 0-158.8 0 79.5 79.5 0 1 0 158.8 0z"/>
                            </g>
                            <circle cx="168.5" cy="260.4" r="36.2" fill="#3e4347"/>
                            <ellipse transform="rotate(-135 182.1 246.7)" cx="182.1" cy="246.7" rx="10" ry="6.5" fill="#fff"/>
                          </svg>
                            <svg class="rating-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                      <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
                      <path d="M407.7 352.8a163.9 163.9 0 0 1-303.5 0c-2.3-5.5 1.5-12 7.5-13.2a780.8 780.8 0 0 1 288.4 0c6 1.2 9.9 7.7 7.6 13.2z" fill="#3e4347"/>
                      <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534"/>
                      <g fill="#fff">
                        <path d="M115.3 339c18.2 29.6 75.1 32.8 143.1 32.8 67.1 0 124.2-3.2 143.2-31.6l-1.5-.6a780.6 780.6 0 0 0-284.8-.6z"/>
                        <ellipse cx="356.4" cy="205.3" rx="81.1" ry="81"/>
                      </g>
                      <ellipse cx="356.4" cy="205.3" rx="44.2" ry="44.2" fill="#3e4347"/>
                      <g fill="#fff">
                        <ellipse transform="scale(-1) rotate(45 454 -906)" cx="375.3" cy="188.1" rx="12" ry="8.1"/>
                        <ellipse cx="155.6" cy="205.3" rx="81.1" ry="81"/>
                      </g>
                      <ellipse cx="155.6" cy="205.3" rx="44.2" ry="44.2" fill="#3e4347"/>
                      <ellipse transform="scale(-1) rotate(45 454 -421.3)" cx="174.5" cy="188" rx="12" ry="8.1" fill="#fff"/>
                    </svg>
                            <svg class="rating-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
                            <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534"/>
                            <path d="M232.3 201.3c0 49.2-74.3 94.2-74.3 94.2s-74.4-45-74.4-94.2a38 38 0 0 1 74.4-11.1 38 38 0 0 1 74.3 11.1z" fill="#e24b4b"/>
                            <path d="M96.1 173.3a37.7 37.7 0 0 0-12.4 28c0 49.2 74.3 94.2 74.3 94.2C80.2 229.8 95.6 175.2 96 173.3z" fill="#d03f3f"/>
                            <path d="M215.2 200c-3.6 3-9.8 1-13.8-4.1-4.2-5.2-4.6-11.5-1.2-14.1 3.6-2.8 9.7-.7 13.9 4.4 4 5.2 4.6 11.4 1.1 13.8z" fill="#fff"/>
                            <path d="M428.4 201.3c0 49.2-74.4 94.2-74.4 94.2s-74.3-45-74.3-94.2a38 38 0 0 1 74.4-11.1 38 38 0 0 1 74.3 11.1z" fill="#e24b4b"/>
                            <path d="M292.2 173.3a37.7 37.7 0 0 0-12.4 28c0 49.2 74.3 94.2 74.3 94.2-77.8-65.7-62.4-120.3-61.9-122.2z" fill="#d03f3f"/>
                            <path d="M411.3 200c-3.6 3-9.8 1-13.8-4.1-4.2-5.2-4.6-11.5-1.2-14.1 3.6-2.8 9.7-.7 13.9 4.4 4 5.2 4.6 11.4 1.1 13.8z" fill="#fff"/>
                            <path d="M381.7 374.1c-30.2 35.9-75.3 64.4-125.7 64.4s-95.4-28.5-125.8-64.2a17.6 17.6 0 0 1 16.5-28.7 627.7 627.7 0 0 0 218.7-.1c16.2-2.7 27 16.1 16.3 28.6z" fill="#3e4347"/>
                            <path d="M256 438.5c25.7 0 50-7.5 71.7-19.5-9-33.7-40.7-43.3-62.6-31.7-29.7 15.8-62.8-4.7-75.6 34.3 20.3 10.4 42.8 17 66.5 17z" fill="#e24b4b"/>
                          </svg>
                            <svg class="rating-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <g fill="#ffd93b">
                              <circle cx="256" cy="256" r="256"/>
                              <path d="M512 256A256 256 0 0 1 56.8 416.7a256 256 0 0 0 360-360c58 47 95.2 118.8 95.2 199.3z"/>
                            </g>
                            <path d="M512 99.4v165.1c0 11-8.9 19.9-19.7 19.9h-187c-13 0-23.5-10.5-23.5-23.5v-21.3c0-12.9-8.9-24.8-21.6-26.7-16.2-2.5-30 10-30 25.5V261c0 13-10.5 23.5-23.5 23.5h-187A19.7 19.7 0 0 1 0 264.7V99.4c0-10.9 8.8-19.7 19.7-19.7h472.6c10.8 0 19.7 8.7 19.7 19.7z" fill="#e9eff4"/>
                            <path d="M204.6 138v88.2a23 23 0 0 1-23 23H58.2a23 23 0 0 1-23-23v-88.3a23 23 0 0 1 23-23h123.4a23 23 0 0 1 23 23z" fill="#45cbea"/>
                            <path d="M476.9 138v88.2a23 23 0 0 1-23 23H330.3a23 23 0 0 1-23-23v-88.3a23 23 0 0 1 23-23h123.4a23 23 0 0 1 23 23z" fill="#e84d88"/>
                            <g fill="#38c0dc">
                              <path d="M95.2 114.9l-60 60v15.2l75.2-75.2zM123.3 114.9L35.1 203v23.2c0 1.8.3 3.7.7 5.4l116.8-116.7h-29.3z"/>
                            </g>
                            <g fill="#d23f77">
                              <path d="M373.3 114.9l-66 66V196l81.3-81.2zM401.5 114.9l-94.1 94v17.3c0 3.5.8 6.8 2.2 9.8l121.1-121.1h-29.2z"/>
                            </g>
                            <path d="M329.5 395.2c0 44.7-33 81-73.4 81-40.7 0-73.5-36.3-73.5-81s32.8-81 73.5-81c40.5 0 73.4 36.3 73.4 81z" fill="#3e4347"/>
                            <path d="M256 476.2a70 70 0 0 0 53.3-25.5 34.6 34.6 0 0 0-58-25 34.4 34.4 0 0 0-47.8 26 69.9 69.9 0 0 0 52.6 24.5z" fill="#e24b4b"/>
                            <path d="M290.3 434.8c-1 3.4-5.8 5.2-11 3.9s-8.4-5.1-7.4-8.7c.8-3.3 5.7-5 10.7-3.8 5.1 1.4 8.5 5.3 7.7 8.6z" fill="#fff" opacity=".2"/>
                          </svg>
                          </div>
                        </div>
                      </div>
                    </div>



                    <div id=1 style="padding-left:130px;padding-top:10px" >
                  <button  onclick="direct_elective()" type="submit" class="btn btn-primary" name="feedback">Post</button>
                  <!--<input type='submit' name='feedback' value='Submit'> <br> <br>
                  <p id="demo"><br></p>-->
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


      <section id="df">
        <div class="container">
          <br />
          <br />
          <br />
          <br />

          <div class="panel-group" id="accordion">
          <?php
          $x = 0;

        while($x < count($_SESSION['fq'])) {
          $y=$x+1;
          $id = "co".$y;?>
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <h4 class="panel-title">
                          <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#co1"><?php echo $_SESSION['fq'][$x];?></a>
                      </h4>
                  </div>
                  <div id= <?php $id;?> class="panel-collapse collapse in">
                      <div class="panel-body">
                      <?php echo $_SESSION['fa'][$x];?>
                      </div>
                  </div>
              </div>
              <?php
   $x=$x+1;
     }

?>


          </div>
      </div>
      <br><br><br><br>
      <br><br><br><br><br><br><br>
      <br><br><br><br><br><br><br>
      <br><br><br><br><br><br><br>
      </section>



    <section id="pq">
      <div class="container-fluid">
        <div class="row">
          <div class="col col-lg-12">
            <div class="reg-box" id="reg-box">
              <div class="reg-form" id="reg-form">
                <img style="padding-right:35px;" src="../images/qn.gif" width="300px" height="200px"><br>
                <h3 style="padding-left:10px;">Post your doubts about the course</h3><br>
                <form method="post" action="elective.php" style="padding-right:20px;">
                    <div class="form-group" >

                      <label for="query"></label><br>
                      <textarea rows="20" cols="68" name="query" id="query" value=''></textarea>

                  </div>

                    <div id=1 style="padding-left:130px;" >
                  <button  name="queries" onclick="direct_elective_1()" type="submit" class="btn btn-primary">Post</button>
                  <!--<p id="demo1"><br></p>-->
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br><br>
    </section>

  <!--===============================================================================================-->
	<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
  <!--===============================================================================================-->
    <script src="../vendor/bootstrap/js/popper.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
  <!--===============================================================================================-->
    <script src="../vendor/select2/select2.min.js"></script>
  <!--===============================================================================================-->
    <script src="../vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script>
      $('.js-pscroll').each(function(){
        var ps = new PerfectScrollbar(this);

        $(window).on('resize', function(){
          ps.update();
        })

        $(this).on('ps-x-reach-start', function(){
          $(this).parent().find('.table100-firstcol').removeClass('shadow-table100-firstcol');
        });

        $(this).on('ps-scroll-x', function(){
          $(this).parent().find('.table100-firstcol').addClass('shadow-table100-firstcol');
        });

      });




    </script>
  <!--===============================================================================================-->
    <script src="../js/table_main.js"></script>
  </body>
</html>
