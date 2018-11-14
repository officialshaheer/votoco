<?php 
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "votoco";

	

    $conn = new mysqli($servername, $username, $password, $dbname);

    	$position = $_POST['position'];

	if( isset( $_POST['position'] ) ) {
		session_start();
		$user_id = $_SESSION['voters_id'];
		
		$temp_count = 0;
		$sql = "select count(voters_id) from temp_voters where voters_id = '$user_id' ";
		$result = mysqli_query($conn, $sql);
		$count = mysqli_fetch_array($result)[0];
		// echo $count;
		
		if($count>=9) {
			
			echo "<br><br><br><h1>THANK YOU!</h1><br>You have voted for all the positions";

			$sql = "UPDATE voterslist set voting_status = 'TRUE' where voters_id = '$user_id' ";
			$result = mysqli_query($conn, $sql);

			// $sql = "DELETE from temp_voters where voters_id = '$user_id'";
			// $result = mysqli_query($conn, $sql);
			return;
		}

 		$sql = "select count(position) from temp_voters where position = '$position' and voters_id = '$user_id'";
 		$temp_query = mysqli_query($conn,$sql);
 		$temp_count = mysqli_fetch_array($temp_query)[0];

		if($temp_count != 0){ 
			echo "You have completed your voting"; return;
		}

		$sql = "select * from candidates where position ='$position'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($result);
 
		foreach ($result as $value) {
			
			echo "<br><table width='90%' style='border-spacing: 3px;border-bottom: 2px solid #ddd;'><tr align='center'><td class='uid' id='".$user_id."'>".$value['c_id']."</td><td>";
            echo $value['c_name'];
            echo "</td><td>";
            echo $value['c_department'];
            echo "</td><td data-position='".$value['position']."'>";
            echo $value['position'];
            echo "</td><td><input type='button' class='votingBtn' value='VOTE' data-cid='".$value['c_id']."' data-position='".$value['position']."' data-userid='".$user_id."'></td></tr></table>";
        }
}
?>
