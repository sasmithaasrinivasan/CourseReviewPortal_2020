
<?php
    session_start();


    $query="SELECT * FROM faculty";
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

    <link rel="stylesheet" href="css/styles4.css">


    <!--Bootstrap-->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- JavaScript Bootstrap -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

  </head>
  <body>



    <div class="fac">
      <h2>Faculty</h2>
      <form class="fac_values" action="../selectPHP/fac_clg.php" method="post">

        <div class="inputFac">

          <select id="select" onchange="getSelectedValue();" name="option">
            <option value="Insert">Insert</option>
            <option value="Update">Update</option>
            <option value="Delete">Delete</option>

          </select>
          <label for="Choice">What do you want to do?</label>
        </div>



        <div class="inputFac">
          <input type="text" name="facid" required=""  />
          <label for="fac_id">Faculty ID</label>
        </div>

        <div class="inputFac">
          <input type="text" name="name" required="" id="FacName"/>
          <label for="FacName">Name</label>
        </div>

        <div class="inputFac">
          <input type="text" name="email" required="" id="FacEmail"/>
          <label for="FacEmail">Email</label>
        </div>

        <div class="inputFac">
          <input type="text" name="exp" required="" id="FacExp"/>
          <label for="FacExp">Experience</label>
        </div>

        <div class="inputFac">
          <input type="text" name="Position" required="" id="FacPos"/>
          <label for="FacPos">Position</label>
        </div>

        <div class="inputFac">
          <input type="text" name="pass" required="" id="FacPass"/>
          <label for="FacPass">Password</label>
        </div>

        <div class="inputFac">
          <input type="text" name="dept" required="" id="FacDept"/>
          <label for="FacDept">Department</label>
        </div>

        <div class="inputFac">
          <input type="text" name="deg" required="" id="FacDeg"/>
          <label for="FacDeg">Degree</label>
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

      <div class="fac table" id="fac_table" style="top:1500px; color: #fff; margin: 0 0 30px; text-align: center; width: 1200px;">
        <h2>Data</h2>
        <form class=" Data-table" >
          <table>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Experience</th>
              <th>Position</th>
              <th>Password</th>
              <th>Department</th>
              <th>Degree</th>
            </tr>

            <?php while($row = mysqli_fetch_array($search_result)):?>
              <tr>
                <td>
                  <?php echo $row['Fac_id'] ; ?>
                </td>
                <td>
                  <?php echo $row['Fac_Name'] ; ?>
                </td>
                <td>
                  <?php echo $row['Fac_Email'] ; ?>
                </td>
                <td>
                  <?php echo $row['Fac_Exp'] ; ?>
                </td>
                <td>
                  <?php echo $row['Fac_Pos'] ; ?>
                </td>
                <td>
                  <?php echo $row['Fac_PWD'] ; ?>
                </td>
                <td>
                  <?php echo $row['Fac_Dept_name'] ; ?>
                </td>
                <td>
                  <?php echo $row['Fac_Degree_name'] ; ?>
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
        var fname=document.getElementById("FacName");
        var fEmail=document.getElementById("FacEmail");
        var fExp=document.getElementById("FacExp");
        var fpos=document.getElementById("FacPos");
        var fpass=document.getElementById("FacPass");
        var fdept=document.getElementById("FacDept");
        var fdeg=document.getElementById("FacDeg");
        mybtn.value="Insert";
        console.log(selectedValue);
        fname.setAttribute('required','');
        fEmail.setAttribute('required','');
        fExp.setAttribute('required','');
        fpos.setAttribute('required','');
        fpass.setAttribute('required','');
        fdept.setAttribute('required','');
        fdeg.setAttribute('required','');
        if(selectedValue=="Insert")
        {
          console.log("Inside insert-if");
          mybtn.value="Insert";
          btnval=mybtn.value;
          mybtn.innerHTML="Insert";
          console.log(btnval);
          fname.setAttribute('required','');
          fEmail.setAttribute('required','');
          fExp.setAttribute('required','');
          fpos.setAttribute('required','');
          fpass.setAttribute('required','');
          fdept.setAttribute('required','');
          fdeg.setAttribute('required','');

        }
        else if(selectedValue=="Update")
        {
          console.log("Inside update-if");
          mybtn.value="Update";
          btnval=mybtn.value;
          mybtn.innerHTML="Update";
          console.log(btnval);
          fname.setAttribute('required','');
          fEmail.setAttribute('required','');
          fExp.setAttribute('required','');
          fpos.setAttribute('required','');
          fpass.setAttribute('required','');
          fdept.setAttribute('required','');
          fdeg.setAttribute('required','');
        }
        else
        {
          console.log("Inside delete-if");
          mybtn.value="Delete";
          btnval=mybtn.value;
          mybtn.innerHTML="Delete";
          console.log(btnval);
          fname.removeAttribute('required');
          fEmail.removeAttribute('required');
          fExp.removeAttribute('required');
          fpos.removeAttribute('required');
          fpass.removeAttribute('required');
          fdept.removeAttribute('required');
          fdeg.removeAttribute('required');
        }

      }
    </script>

  </body>
</html>
