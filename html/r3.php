<?php
   include('db.php');

?>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/r33.css">
	<link rel="stylesheet" href="../css/r3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <div class='item1'><a href='r.php' >Dashboard</a></div>
    <div class='item2'><a href='pro.php'>Profile</a></div>
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
   <h1 align=center> Top 5 Viewed Courses </h1>
   <?php
	     $sql="Select Elective_ID, Elective_Name,countviewed from elective ORDER BY countviewed DESC Limit 5;";
		 $result=mysqli_query($con,$sql);
		 $resultcheck=mysqli_num_rows($result);?>
		 <div class="container">
	<table width=1200px>
		<thead>
			<tr>
				<th width=20%>Elective ID</th>
				<th width=30%>Elective</th>
				<th width=20%>View Count</th>

			</tr>
		</thead>
		<?php while($row=mysqli_fetch_assoc($result)):?>
		<tbody>
			<tr>
				<td><?php echo $row['Elective_ID']; ?></td>
				<td><?php echo $row['Elective_Name']; ?></td>
				<td><?php echo $row['countviewed']; ?></td>

			</tr>

		</tbody>
		<?php endwhile;?>
	</table>
</div>

   </main>

</div>
  </body>
</html>
