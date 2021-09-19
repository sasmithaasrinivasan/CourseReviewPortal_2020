<?php
session_start();
if(!isset($_SESSION['username']))
{
  header('location:login.php');
}
$_SESSION['user']=$_SESSION['username'];
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="css/styles1.css">


  <!--Bootstrap-->

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <!-- JavaScript Bootstrap -->

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>

<body>

  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">Admin Portal</h5>
    <nav class="my-2 my-md-0 mr-md-3">
      <a class="p-2 text-dark" href="#University">University</a>
      <a class="p-2 text-dark" href="#Collegiates">Collegiates</a>
      <a class="p-2 text-dark" href="#Electives">Electives</a>
      <a class="p-2 text-dark" href="#Details">Details</a>
      <a class="p-2 text-dark" href="#Admin">Admin</a>
    </nav>
    <a class="btn btn-outline-primary" href="logout.php">Log out</a>
  </div>

  <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Data</h1>
    <p class="lead">The tire-some work of writing lines and lines of code to enter data in database is over. You can Insert, Update, Delete, Verify data easily through this UX friendly webpage.</p>
  </div>

  <!-- University -->

  <div class="container" id="University">
    <div class="card-deck mb-3 text-center">
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">University</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">Department </h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>Add new departments</li>
            <li>Update Existing Departments</li>
          </ul>
          <a href="..\adminLogin\forms\University_Department.php"><button type="button" class="btn btn-lg btn-block btn-primary">Modify Department</button></a>
        </div>
      </div>
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">University</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">Degree </h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>Add new Degree</li>
            <li>Modify existing Degree</li>
          </ul>
          <a href="..\adminLogin\forms\University_Degree.php">
            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Modify Degree</button></a>
        </div>
      </div>
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">University</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">Years</h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>Add years for a Degree</li>
            <li>Modify years for a Degree</li>
          </ul>

          <a href="..\adminLogin\forms\University_years.php">
            <button type="button" class="btn btn-lg btn-block btn-primary">Modify years</button>
          </a>
        </div>
      </div>
    </div>
    <footer class="pt-4 my-md-5 pt-md-5 border-top">
  </div>


  <!--Collegiates -->

  <div class="container" id="Collegiates">
    <div class="card-deck mb-3 text-center">
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Collegiates</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">Student</h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>Add new Student</li>
            <li>Update Existing Student records</li>
          </ul>
          <a href="..\adminLogin\forms\collegiateStudent.php">
            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Modify Student Records</button>
          </a>

        </div>
      </div>
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Collegiates</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">Faculty</h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>Add new faculty</li>
            <li>Modify existing faculty records</li>
          </ul>
          <a href="..\adminLogin\forms\collegiateFaculty.php">
            <button type="button" class="btn btn-lg btn-block btn-primary">Modify Faculty Records</button>
          </a>
        </div>
      </div>
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Collegiates</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">Alumni</h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>Add Alumni details</li>
            <li>Update Existing Alumni records</li>
          </ul>
          <a href="..\adminLogin\forms\collegiateAlumni.php">
            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Modify Alumni Records</button>
          </a>

        </div>
      </div>
    </div>
    <footer class="pt-4 my-md-5 pt-md-5 border-top">
  </div>


  <!-- Electives -->

  <div class="container" id="Electives">
    <div class="card-deck mb-3 text-center">
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Electives</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">Elective</h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>Add new elctive</li>
            <li>Update Existing electives</li>
          </ul>

          <a href="..\adminLogin\forms\electivesElective.php">
            <button type="button" class="btn btn-lg btn-block btn-primary">Modify Electives</button>
          </a>

        </div>
      </div>
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Electives</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">Faculty</h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>Add new handling Faculty</li>
            <li>Modify handling faculties</li>
          </ul>
          <a href="..\adminLogin\forms\electiveFaculty.php">
            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Modify Faculties</button>
          </a>

        </div>
      </div>
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Electives</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">Pre-Reqs</h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>Add pre-req for a elective</li>
            <li>Modify pre-requisites</li>
          </ul>

          <a href="..\adminLogin\forms\electivePrereq.php">
            <button type="button" class="btn btn-lg btn-block btn-primary">Modify pre-reqs</button>
          </a>

        </div>
      </div>
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Electives</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">Text-Books</h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>Add new Textbooks</li>
            <li>Update existing Textbooks</li>
          </ul>

          <a href="..\adminLogin\forms\electiveTextbook.php">
            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Modify TextBooks</button>
          </a>

        </div>
      </div>
    </div>
    <footer class="pt-4 my-md-5 pt-md-5 border-top">
  </div>

  <!-- Details -->

  <div class="container" id="Details">
    <div class="card-deck mb-3 text-center">
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Details</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">Assessments</h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>Add how elective is accessed</li>
            <li>Update Existing Assessment records</li>
          </ul>

          <a href="..\adminLogin\forms\detailsAssessment.php">
            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Modify Assessment Records</button>
          </a>

        </div>
      </div>
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Details</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">Units</h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>Add unit description for an elective</li>
            <li>Modify existing unit records</li>
          </ul>

          <a href="..\adminLogin\forms\detailsUnitRecords.php">
            <button type="button" class="btn btn-lg btn-block btn-primary">Modify unit Records</button>
          </a>

        </div>
      </div>
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Details</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">Outcomes</h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>Add course outcomes for an elective</li>
            <li>Update course outcome records</li>
          </ul>

          <a href="..\adminLogin\forms\detailsOutcomes.php">
            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Modify Course Records</button>
          </a>

        </div>
      </div>
    </div>
    <footer class="pt-4 my-md-5 pt-md-5 border-top">
  </div>

  <!-- Admin -->

  <div class="container" id="Admin">
    <div class="card-deck mb-3 text-center">
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Admin</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">Review</h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>Add Alumni Review</li>
            <li>Update Existing Reviews</li>
          </ul>

          <a href="..\adminLogin\forms\adminReview.php">
            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Modify Alumni Reviews</button>
          </a>

        </div>
      </div>
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Admin</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">Administrator</h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>Add new Admin</li>
            <li>Modify existing Admin records</li>
          </ul>

          <a href="..\adminLogin\forms\adminAdministrator.php">
            <button type="button" class="btn btn-lg btn-block btn-primary">Modify Admin Records</button>
          </a>

        </div>
      </div>
    </div>
    <footer class="pt-4 my-md-5 pt-md-5 border-top">
  </div>


</body>

</html>
