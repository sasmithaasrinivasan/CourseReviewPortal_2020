<?php include('includes/db.php');?>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="r1.css">
	<link rel="stylesheet" href="r22.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  
  <body>
  <main>
   <?php 
   $sql="Select * from review where Elective_id='15CSE375' ;  ";
		 $result=mysqli_query($conn,$sql);
		  $row=mysqli_fetch_assoc($result);
		  $resultcheck=mysqli_num_rows($result);
		?> 
   <header> Review on <?php echo $row['Elective_id']; ?>
   <div class="container">
	<table width=1200px>
		<thead>
			<tr>
				<th width=20%>Alumni ID</th>
				<th width=60%>Review</th>
				
				</tr>
		</thead>
		<?php while($row=mysqli_fetch_assoc($result)):?>
		<tbody>
			<tr>
				<td><?php echo $row['Alumni_id']; ?></td>
				<td><?php echo $row['Review_data']; ?></td>
				
				
			
			</tr>
			
		</tbody>
		<?php endwhile;?>
	</table>
	</div>
  </body>
</html>