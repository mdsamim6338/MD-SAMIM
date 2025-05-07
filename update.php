<?php
include "config.php";

 $sid =$_GET['sid'];

 $sql="SELECT * FROM student WHERE sid='$sid'";
 
 // echo $sql;
 //die();
  $query= mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($query);

?>
<div>
		<h1>Simple Crud Operation in PHP</h1>
	<form action="" method="POST">
		<input type="text" name="sname" value="<?php echo $row['sname']; ?>"  ><br><br>
		
		<input type="text" name="saddress" value="<?php echo $row['saddress']; ?>" ><br><br>
		
		<input type="varchar" name="sphone" value="<?php echo $row['sphone']; ?>" ><br><br>
		
		<input type="submit" name="update" value="update">
		<button><a href="view.php">Back</button>
		
	</form>
	</div>
	<?php 
		if(isset($_POST['update'])){
			$sname=$_POST['sname'];
			$saddress=$_POST['saddress'];
			$sphone=$_POST['sphone'];

			 $update= "update student SET sname='$sname',saddress='$saddress',sphone='$sphone' WHERE sid='$sid' ";
			// die();
			 $result= mysqli_query($conn,$update);
			
			if($result){
				?>
				<script type="text/javascript">
					alert("Data updated successfully.");
					window.open("http://localhost/crud2/view.php","_self");
					
				</script>
				<?php
				//echo "Data Inserted successfully.";
			}else
			{
				?>
				<script type="text/javascript">
					alert("Data not updated.");
				</script>
				<?php
			}

		}


	?>