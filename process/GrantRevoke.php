<?php 
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "votoco";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $voters_id = $_POST['voters_id'];
    $btnId = $_POST['btnId'];

    if($btnId=='GRANT'){
    	$sql = "UPDATE voterslist SET voting_permission = 'GRANTED' where voters_id = '".$voters_id."'";
			if ($conn->query($sql)) {
			echo "VOTING FOR ".$voters_id." is GRANTED!";
			}
			else {
			echo "ERROR GRANTING PERMISSION!";
			}
		}
	else {
		$sql = "UPDATE voterslist SET voting_permission = 'REVOKED' where voters_id = '".$voters_id."'";
			if ($conn->query($sql)) {
			echo "VOTING FOR ".$voters_id." is REVOKED!";
			}
			else {
			echo "ERROR REVOKING THE USER!";
			}
	}		

	?>