<?php 
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "votoco";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $node_id = $_POST['node_id']; 
    session_start();
    $e_id = $_SESSION['ee_id'];
 	   
	if( isset( $_POST['node_id'] ) ) {
		$sql = "UPDATE systemlist SET permission = 'TRUE' where system_hash = '".$node_id."'";
			if ($conn->query($sql)) {
			// echo "System Allocated!";
			echo "<label style='color:white;'>Allocated URL : </label><input style='width:30%;border-radius:15px;' type='text' value='http://localhost/votoco/nodelogin.php?system_hash=".$node_id."&e_id=".$e_id."'><br><center><label style='color:white;'><br>Send this link to the user for to log in to the node. </label></center>";
			}
			else {
			echo "Allocation error";
			}
		}

	?>