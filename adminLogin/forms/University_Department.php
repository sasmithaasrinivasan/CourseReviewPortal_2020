<?php
    session_start();
    
    $query="SELECT * FROM `department`";
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

    <link rel="stylesheet" href="css/styles.css">


    <!--Bootstrap-->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- JavaScript Bootstrap -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

  </head>
  <body>



    <div class="dept">
      <h2 style="color: #fff;">Department</h2>
      <form class="dept_values" action="../selectPHP/dept_univ.php" method="post">

        <div class="inputDept">

          <select id="select" onchange="getSelectedValue();" name="option">
            <option value="Insert">Insert</option>
            <option value="Update">Update</option>
            <option value="Delete">Delete</option>

          </select>
          <label for="Choice">What do you want to do?</label>
        </div>



        <div class="inputDept">
          <input type="text" name="dept" required="" id="Dept"  />
          <label for="Dept_name">Department Name</label>
        </div>

        <div class="inputDept">
          <input type="text" name="bld" required="" id="Building"/>
          <label for="building">Building</label>
        </div>

        <button type="submit" class="btn btn-light myBtn btn-md" id="db-btn" >Insert</button>
  <!--      <button type="button" class="btn btn-dark myBtn" id="update">Update</button>
        <button type="button" class="btn btn-light myBtn" id="delete">Delete</button> -->

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

      <div class="dept table" id="dept_table" style="top:700px; color: #fff; margin: 0 0 30px; text-align: center; width: 600px;">
        <h2>Data</h2>
        <form class=" Data-table" >
          <table>
            <tr>
              <th>Department</th>
              <th>Building</th>
            </tr>
            <?php while($row = mysqli_fetch_array($search_result)):?>
              <tr>
                <td>
                  <?php echo $row['Dept_name'] ; ?>
                </td>
                <td>
                  <?php echo $row['Building'] ; ?>
                </td>
              </tr>
            <?php endwhile; ?>
          </table>

        </form>

      </div>

    </div>


<!--    <script>
      document.getElementById('insert').setAttribute('disabled','disabled');
      document.getElementById('update').setAttribute('disabled','disabled');
      document.getElementById('delete').setAttribute('disabled','disabled');
      document.getElementById('Building').setAttribute('disabled','disabled');

    </script>-->
    <script type="text/javascript">
      function getSelectedValue()
      {
        var dept=document.getElementById('Dept');
        var bld=document.getElementById('Building');
        var selectedValue=document.getElementById("select").value;
        var mybtn=document.getElementById("db-btn");
        var btnval=document.getElementById("db-btn").value;
        mybtn.value="Insert";
        console.log(selectedValue);
        if(selectedValue=="Insert")
        {
          console.log("Inside insert-if");
          mybtn.value="Insert";
          btnval=mybtn.value;
          mybtn.innerHTML="Insert";
          bld.setAttribute('required','');
          bld.removeAttribute('disabled');

          console.log(btnval);
        }
        else if(selectedValue=="Update")
        {
          console.log("Inside update-if");
          mybtn.value="Update";
          btnval=mybtn.value;
          mybtn.innerHTML="Update";
          bld.setAttribute('required','');
          bld.removeAttribute('disabled');
          console.log(btnval);
        }
        else
        {
          console.log("Inside delete-if");
          mybtn.value="Delete";
          btnval=mybtn.value;
          mybtn.innerHTML="Delete";
          bld.removeAttribute('required');
          bld.setAttribute('disabled','disabled');
          console.log(btnval);
        }

      }
    </script>



  </body>
</html>
