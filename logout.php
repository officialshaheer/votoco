<?php 
	
	session_start();
	$_SESSION['voters_id'] = "";
	session_destroy();

	header('Location: vote.php');
 ?>