<?php 
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "votoco";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $node_id = $_POST['node_id'];

    // session_start();
    // $_SESSION['system_hash'] = $node_id;
	    
	if( isset( $_POST['node_id'] ) ) {
		$sql = "UPDATE systemlist SET permission = 'TRUE' where system_hash = '".$node_id."'";
			if ($conn->query($sql)) {
			echo "System Allocated!";
			echo "<input type='text' value='http://localhost/votoco/nodelogin.php?system_hash=".$node_id."'>";
			}
			else {
			echo "Allocation error";
			}
		}

	?>