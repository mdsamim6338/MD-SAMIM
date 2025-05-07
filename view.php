<?php
	include "config.php";
 ?>
 <body>
 	<h1>Simple Crud Operation in PHP</h1>
 	<a href="index.php">Add Data</a>

 <table border="2px" cellpadding="10px" cellspacing="10px">
 	<tr>
 		<th>ID</th>
 		<th>Name</th>
 		<th>Address</th>
 		<th>Phone</th>
 		<th colspan="2">Action</th>

 	</tr>

 	<?php 

 	$sql ="SELECT * FROM student";

 	$result= mysqli_query($conn,$sql);
 	$data= mysqli_num_rows($result);

 	if($data){
 		while ($row=mysqli_fetch_assoc($result)) {
 			?>
 			<tr>
 				<td><?php echo $row['sid']; ?></td>
 				<td><?php echo $row['sname']; ?></td>
 				<td><?php echo $row['saddress']; ?></td>
 				<td><?php echo $row['sphone']; ?></td>
 				<td><a  href="update.php?sid=<?php echo $row['sid']; ?>">Edit</a></td>
 				<td> <a onclick="return confirm('Are you sure want to delete?')" href="delete.php?sid=<?php echo $row['sid']; ?>">Delete</a></td>
 				
 			</tr>
 		<?php }
 		

 	}else
 	{
 		echo "something error.";
 	}
 			

 	?>
 </table>
 </body>
 </html>