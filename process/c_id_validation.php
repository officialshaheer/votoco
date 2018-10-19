<?php 
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "votoco";

    $conn = new mysqli($servername, $username, $password, $dbname);

    		$c_id = $_POST['c_id'];
	
	if( isset( $_POST['c_id'] ) ) {

		$sql = "SELECT * from `candidates` where c_id = '$c_id' "; 
		if ($conn->query($sql)->num_rows) {
		echo '<img src="tok.png" width="20px" height="10px">Not Available';
		}
		else
		{
		echo '<img src="tik.png" width="20px" height="10px">Available';
		}
	}
		
?>

