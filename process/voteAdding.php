<?php 
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "votoco";

    $conn = new mysqli($servername, $username, $password, $dbname);

    		$user_id = $_POST['user_id'];
    		$c_id = $_POST['cid'];
    		$position = $_POST['position'];

		$sql = "UPDATE candidates SET votes = votes + 1 WHERE c_id = '". $c_id ."' ";
		if($conn->query($sql)) {
			echo "VOTING IS DONE";
			$sql = "INSERT into temp_voters (voters_id,position) values ('$user_id','$position')";
			$conn->query($sql);
		} else {
			echo "VOTING ERROR";
		}
	
?>
