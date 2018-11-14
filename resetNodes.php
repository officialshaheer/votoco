<?php 
	
	$servername = "localhost";
	$username   = "root";
	$password   = "";
	$dbname     = "votoco";

	session_start();
	$system_hash = $_SESSION['system_hash'];

	$conn = new mysqli($servername,$username,$password,$dbname);
	$sql = "UPDATE systemlist set permission = 'FALSE' , node_status = 'not_active' ";
	mysqli_query($conn,$sql);

	session_start();
	$_SESSION['system_hash'] = "";
	session_destroy();
	

	header('Location: votoco.php');
 ?>