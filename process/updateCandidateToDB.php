<?php 
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "votoco";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $c_id = $_POST['c_id'];
	$c_name = $_POST['candidatename'];
	$c_department = $_POST['c_department'];
	$c_position = $_POST['c_position'];
    
	if( isset( $_POST['c_id'] ) ) {
		$sql = "UPDATE candidates SET c_name = '".$c_name."' , c_department = '".$c_department."' , position = '".$c_position."' where c_id = '".$c_id."'";
			if ($conn->query($sql)) {
			echo "Updated candidate details!";
			}
			else {
			echo "Update error!";
			}
		}

	?>