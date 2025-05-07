<?php

include "config.php";
$sid =$_GET['sid'];

$sql= "DELETE FROM student WHERE sid='$sid'";

$result=mysqli_query($conn,$sql);
if($result){
	?>
	<script type="text/javascript">
		alert("Data Deleted successfully");
		window.open("http://localhost/crud2/view.php","_self");
	</script>
	<?php 
}else{
	?>
	<script type="text/javascript">
		alert("Please try again");
	</script>
	<?php
}

