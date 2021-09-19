<?php include('db.php');?>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="r1.css">
	<link rel="stylesheet" href="r11.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="js.js"></script>

    <script type="text/javascript" src="jquery.min.js"></script>
  </head>
  
  <body>
 <div class="container">
     
   <header>Course Review
     
     <div class="topnav">CB.EN.U4CSE18457
       
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
    <div class='item1'><a href=# >Dashboard</a></div>
    <div class='item2'><a href='profile.php'>Profile</a></div>
    <div class='item3' ><a href=#>Courses</a></div>
    <div class='item4'><a href=#>Forum</a></div>
    <div class='item5'><a href='about.html'>About</a></div>
    <div class='item6'><a href=#>Help</a></div>
    <div class='item7'><a href=#>Logout</a></div>
    </div>
  </aside>
   <nav>
     <div class='container3'>
       <div class='i1'><a href='r.php' >Home</a></div>
          <div class='i2'><a href='r1.php'>Your reviews</a></div>
        <div class='i3'><a href='r2.php'>Query Status</a></div>
      <div class='i4'><a href='r3.php'>Viewed Courses</a></div>
         
   </nav>
   <main>


   
		
		<select name="semester" id="semester" class="dropbtn" onchange="myFunction()">
			<option value=''>Select</option>
			<?php 
			$sql = "select distinct `Elective_ID` from `feedback` where `Student_ID`='CB.EN.U4CSE18455'";
			$res = mysqli_query($con, $sql);
			if(mysqli_num_rows($res) > 0) {
				while($row = mysqli_fetch_object($res)) {
					echo "<option value='".$row->Elective_ID."'>".$row->Elective_ID."</option>";
				}
			}
			?>
		</select> 
   
   <div class="container">
	<table width=1200px>
		<thead>
			<tr>
				<th width=20%>Elective ID</th>
				<th width=60%>My feedback</th>
				
				</tr>
		</thead>
	
		<tbody name="eid" id="eid">
		
			
		</tbody>
	
	</table>
  
	</div>
  
</div>
  </body>
</html>