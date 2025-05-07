<?php 

$hostname="localhost";
$username="root";
$pass="";
$db="crud";
//$conn=mysqli_connect($hostname,$username,$pass,$db);
$conn = mysqli_connect("localhost","root","","crud")or die("connection failed.");

// if($conn){
// 	//echo "connection done.";
// }else
// {
// 	echo "connection failed.";
// }
?>