<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Administrator website</title>
  <!--CSS -->

  <link rel="stylesheet" href="css/styles.css">


  <!--Bootstrap-->

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <!-- JavaScript Bootstrap -->

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>

<body>

  <div class="box">
    <h2>Login</h2>
    <form  method="post" action="validate.php">
      <div class="inputBox">
        <input type="text" name="user" required=""  id="uname"/>
        <label>Username</label>
        <div id="u_error">Please Enter a Valid Username</div>
      </div>
      <div class="inputBox">
        <input type="password" name="pass" required="" id="pass" />
        <label>Password</label>
        <div id="p_error">Please Enter a Valid Password</div>
      </div>
      <button type="submit" class="btn btn-outline-light ">Submit</button>
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

<!--  <script src="loginValidate.js" charset="utf-8"></script> -->
</body>

</html>
