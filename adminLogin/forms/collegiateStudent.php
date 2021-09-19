<?php
    session_start();


    $query="SELECT * FROM student";
    $search_result= queryData($query);



  function queryData($query)
  {
    $connect= new mysqli("localhost","root","","coursereviewportal");
    $result= mysqli_query($connect,$query);
    return $result;
  }

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>University_Department</title>

    <link rel="stylesheet" href="css/styles3.css">


    <!--Bootstrap-->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- JavaScript Bootstrap -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

  </head>
  <body>



    <div class="stud">
      <h2>Student</h2>
      <form class="stud_values" action="../selectPHP/stud_clg.php" method="post">

        <div class="inputStud">

          <select id="select" onchange="getSelectedValue();" name="option">
            <option value="Insert">Insert</option>
            <option value="Update">Update</option>
            <option value="Delete">Delete</option>


          </select>
          <label for="Choice">What do you want to do?</label>
        </div>



        <div class="inputStud">
          <input type="text" name="studId" required=""  id="StudId" />
          <label for="stud_id">Student ID</label>
        </div>



        <div class="inputStud">
          <input type="text" name="name" required="" id="StudName"/>
          <label for="StudName">Name</label>
        </div>

        <div class="inputStud">
          <input type="text" name="email" required="" id="StudEmail"/>
          <label for="StudEmail">Email</label>
        </div>

        <div class="inputStud">
          <input type="text" name="sem" required="" id="StudSem"/>
          <label for="StudSem">Semester</label>
        </div>

        <div class="inputStud">
          <input type="text" name="pass" required="" id="StudPass"/>
          <label for="StudPass">Password</label>
        </div>

        <div class="inputStud">
          <input type="text" name="dept" required="" id="StudDept"/>
          <label for="StudDept">Department</label>
        </div>

        <div class="inputStud">
          <input type="text" name="deg" required="" id="StudDeg" />
          <label for="StudDeg">Degree</label>
        </div>



        <button type="submit" class="btn btn-light myBtn btn-md" id="db-btn" >Insert</button>

      </form>



      <?php
        $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        if(strpos($fullUrl,"insert=notValid")==true)
        {
          echo "<script> alert('Data already exists,Insertion NOT POSSIBLE!') </script>";
        }
        else if(strpos($fullUrl,"insert=valid")==true)
        {
          echo "<script> alert('Insertion Successful') </script>";
        }
        else if(strpos($fullUrl,"update=valid")==true)
        {
          echo "<script> alert('Update Successful') </script>";
        }
        else if(strpos($fullUrl,"update=notValid")==true)
        {
          echo "<script> alert('Data does not exist,Update NOT POSSIBLE!') </script>";
        }
        else if(strpos($fullUrl,"delete=valid")==true)
        {
          echo "<script> alert('Delete Successful') </script>";
        }
        else if(strpos($fullUrl,"delete=notValid")==true)
        {
          echo "<script> alert('Data does not exist,Delete NOT POSSIBLE!') </script>";
        }

       ?>

      <div class="stud table" id="stud_table" style="top:1500px; color: #fff; margin: 0 0 30px; text-align: center; width: 1200px;">
        <h2>Data</h2>
        <form class=" Data-table" >
          <table>
            <tr>
              <th>Student ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Semester</th>
              <th>Password</th>
              <th>Department</th>
              <th>Degree</th>
            </tr>

            <?php while($row = mysqli_fetch_array($search_result)):?>
              <tr>
                <td>
                  <?php echo $row['student_id'] ; ?>
                </td>
                <td>
                  <?php echo $row['stud_Name'] ; ?>
                </td>
                <td>
                  <?php echo $row['stud_Email'] ; ?>
                </td>
                <td>
                  <?php echo $row['stud_sem'] ; ?>
                </td>
                <td>
                  <?php echo $row['stud_pwd'] ; ?>
                </td>
                <td>
                  <?php echo $row['stud_Dept_Name'] ; ?>
                </td>
                <td>
                  <?php echo $row['stud_Degree_Name'] ; ?>
                </td>
              </tr>
            <?php endwhile; ?>


          </table>

        </form>


      </div>

    </div>
    <script type="text/javascript">
      function getSelectedValue()
      {
        var selectedValue=document.getElementById("select").value;
        var mybtn=document.getElementById("db-btn");
        var btnval=document.getElementById("db-btn").value;
        var sid=document.getElementById("StudId");

        var sname=document.getElementById("StudName");
        var semail=document.getElementById("StudEmail");
        var ssem=document.getElementById("StudSem");
        var spass=document.getElementById("StudPass");
        var sdept=document.getElementById("StudDept");
        var sdeg=document.getElementById("StudDeg");
        console.log(sid.value);
        mybtn.value="Insert";
        console.log(selectedValue);
        if(selectedValue=="Insert")
        {
          console.log("Inside insert-if");
          mybtn.value="Insert";
          btnval=mybtn.value;
          mybtn.innerHTML="Insert";
          console.log(btnval);
          sname.setAttribute('required','');
          semail.setAttribute('required','');
          ssem.setAttribute('required','');
          spass.setAttribute('required','');
          sdept.setAttribute('required','');
          sdeg.setAttribute('required','');
        }
        else if(selectedValue=="Update")
        {
          console.log("Inside update-if");
          mybtn.value="Update";
          btnval=mybtn.value;
          mybtn.innerHTML="Update";
          console.log(btnval);
          console.log(sid.value);
          sname.setAttribute('required','');
          semail.setAttribute('required','');
          ssem.setAttribute('required','');
          spass.setAttribute('required','');
          sdept.setAttribute('required','');
          sdeg.setAttribute('required','');


        }
        else if(selectedValue=="Delete")
        {
          console.log("Inside delete-if");
          mybtn.value="Delete";
          btnval=mybtn.value;
          mybtn.innerHTML="Delete";
          console.log(btnval);
          sname.removeAttribute('required');
          semail.removeAttribute('required');
          ssem.removeAttribute('required');
          spass.removeAttribute('required');
          sdept.removeAttribute('required');
          sdeg.removeAttribute('required');
        }



      }


    </script>

  </body>
</html>
