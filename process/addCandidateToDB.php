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

	// if($c_id==" "||$c_name==""||$c_department=""||$c_position=="") {
	// 	echo "Null!"
	// }

	if( isset( $_POST['c_id'] ) ) {

		$sql1 = "SELECT * from `candidates` where c_id = '$c_id' ";
			if ($conn->query($sql1)->num_rows) {
			echo "Already Entered!";
			}
			else {
			$sql = "INSERT into `candidates` (c_id,c_name,c_department,position) VALUES ('$c_id','$c_name','$c_department','$c_position')"; 
				if(mysqli_query($conn,$sql)) {
				echo "entered the candidate!";
				}
				else {
				echo "Not Entered in Database";
				}
			}
		}
?>	
