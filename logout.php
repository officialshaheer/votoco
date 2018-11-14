<?php 

	session_start();
	$_SESSION['voters_id'] = "";

	header('Location: vote.php');
 ?>