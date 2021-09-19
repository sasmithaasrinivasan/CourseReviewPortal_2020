<?php
    session_start();

    $query="SELECT Degree_name FROM `years`";
    $d="SELECT Dept_name FROM `department`";
    $search_dept=queryData($d);
    $search_result= queryData($query);
    $search_Nresult= queryData($query);

    $s="SELECT * FROM `degree`";
    $search_table=queryData($s);


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

    <link rel="stylesheet" href="css/styles1.css">


    <!--Bootstrap-->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- JavaScript Bootstrap -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

  </head>
  <body>



    <div class="degree">
      <h2>Degree</h2>
      <form class="deg_values" action="../selectPHP/deg_univ.php" method="post">

        <div class="inputDeg">

          <select id="select" onchange="getSelectedValue();" name="option">
            <option value="Insert">Insert</option>
            <option value="Update">Update</option>
            <option value="Delete">Delete</option>

          </select>
          <label for="Choice">What do you want to do?</label>
        </div>



        <div class="inputDeg" >
          <select id="DeptName" name="dept" >
            <?php while($row = mysqli_fetch_array($search_dept)){
                echo '<option>'.$row['Dept_name'].'</option>';
              }
            ?>
          </select>
          <label for="Deptname">Department Name</label>
        </div>

        <div class="inputDeg" >
          <select id="DegBM" name="degree" >
            <?php while($row = mysqli_fetch_array($search_result)){
                echo '<option>'.$row['Degree_name'].'</option>';
              }
            ?>

          </select>
          <label for="Degreename">Degree Name</label>
        </div>

        <div class="inputDeg" >
          <select id="deg" name="newDegree" disabled="true">
            <option value=0></option>
            <?php while($row = mysqli_fetch_array($search_Nresult)){
                echo '<option>'.$row['Degree_name'].'</option>';
              }
            ?>

          </select>
          <label for="NewDegreename">New Degree Name</label>
        </div>


        <button type="submit" class="btn btn-light myBtn btn-md" id="db-btn" >Insert</button>

      </form>

      <?php
        $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        if(strpos($fullUrl,"insert=notValid")==true)
        {
          echo "<script> alert('Department already exists,Insertion NOT POSSIBLE!') </script>";
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
          echo "<script> alert('Department does not exist,Update NOT POSSIBLE!') </script>";
        }
        else if(strpos($fullUrl,"delete=valid")==true)
        {
          echo "<script> alert('Delete Successful') </script>";
        }
        else if(strpos($fullUrl,"delete=notValid")==true)
        {
          echo "<script> alert('Department does not exist,Delete NOT POSSIBLE!') </script>";
        }

       ?>

      <div class="degree table" id="dept_table" style="top:900px; color: #fff; margin: 0 0 30px; text-align: center; width: 600px;">
        <h2>Data</h2>
        <form class=" Data-table" >
          <table>
            <tr>
              <th>Department</th>
              <th>Degree Name</th>
            </tr>
            <?php while($row = mysqli_fetch_array($search_table)):?>
              <tr>
                <td>
                  <?php echo $row['Dept_Name'] ; ?>
                </td>
                <td>
                  <?php echo $row['Degree_Name'] ; ?>
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
        var deg=document.getElementById('deg');
        mybtn.value="Insert";
        deg.setAttribute('disabled','disabled');
        deg.value=0;
        deg.removeAttribute('required');
        console.log(selectedValue);
        if(selectedValue=="Insert")
        {
          console.log("Inside insert-if");
          mybtn.value="Insert";
          btnval=mybtn.value;
          mybtn.innerHTML="Insert";
          deg.setAttribute('disabled','disabled');
          deg.removeAttribute('required');

          console.log(btnval);
        }
        else if(selectedValue=="Update")
        {
          console.log("Inside update-if");
          mybtn.value="Update";
          btnval=mybtn.value;
          mybtn.innerHTML="Update";
          console.log(btnval);
          deg.setAttribute('required','');
          deg.removeAttribute('disabled');
        }
        else
        {
          console.log("Inside delete-if");
          mybtn.value="Delete";
          btnval=mybtn.value;
          mybtn.innerHTML="Delete";
          console.log(btnval);
          deg.setAttribute('disabled','disabled');
          deg.removeAttribute('required');
        }
      }
    </script>

  </body>
</html>
