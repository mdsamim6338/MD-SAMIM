<?php
	include "config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Simple Crud</title>
</head>
<body>
	<div>
		<h1>Simple Crud Operation in PHP</h1>
	<form action="" method="POST">
		<input type="text" name="sname" placeholder="Enter your Name." required="Please Enter your Name"><br><br>
		
		<input type="text" name="saddress" placeholder="Enter your Address." required="Please Enter your Address"><br><br>
		
		<input type="varchar" name="sphone" placeholder="Enter your Phone." required="Please Enter your Phone"><br><br>
		
		<input type="submit" name="save" value="save">
		<button><a href="view.php">View</button>
		
	</form>
	</div>

	<?php 
		if(isset($_POST['save'])){
			$sname=$_POST['sname'];
			$saddress=$_POST['saddress'];
			$sphone=$_POST['sphone'];

			$sql= "INSERT into student (sname,saddress,sphone) VALUES('{$sname}','{$saddress}','{$sphone}')";
			//die();
			$result= mysqli_query($conn,$sql);
			if($result){
				?>
				<script type="text/javascript">
					alert("Data save successfully.");
				</script>
				<?php
				//echo "Data Inserted successfully.";
			}else
			{
				?>
				<script type="text/javascript">
					alert("Data not save.");
				</script>
				<?php
			}

		}


	?>

</body>
</html>
