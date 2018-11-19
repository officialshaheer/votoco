<?php 
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "votoco";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $node_id = $_POST['node_id']; 
 
	$dt = new DateTime();
	$election_year = $dt->format('Y');	

	$sql = "INSERT into election (election_year,election_status,election_starting_time,election_ending_time) values ($election_year,'started',CURRENT_TIME(),ADDTIME(CURRENT_TIME(), '2:00:00'))";
	mysqli_query($conn,$sql);

	$sql = "SELECT election_id,election_ending_time from election where election_id='4' ";
	$r = mysqli_query($conn,$sql);
	$result = mysqli_fetch_array($r);
	session_start();
	$_SESSION['election_id'] = $result['election_id'];
	$_SESSION['election_ending_time'] = $result['election_ending_time']; 

	// echo $result['election_ending_time'];

    // session_start();
    // $_SESSION['system_hash'] = $node_id;
	   
	if( isset( $_POST['node_id'] ) ) {
		$sql = "UPDATE systemlist SET permission = 'TRUE' where system_hash = '".$node_id."'";
			if ($conn->query($sql)) {
			// echo "System Allocated!";
			echo "<label style='color:white;'>Allocated URL : </label><input style='width:30%;border-radius:15px;' type='text' value='http://localhost/votoco/nodelogin.php?system_hash=".$node_id."'><br><center><label style='color:white;'>Send this link to the user for to log in to the node. </label></center>";
			}
			else {
			echo "Allocation error";
			}
		}

	?>