<?php 
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "votoco";

	

    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "select count(id) from voterslist where voting_permission = 'GRANTED' having count(id) = (select count(id) from voterslist where voting_status = 'TRUE' )";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

	if($row) {

		$sql = "select c_name,position,votes from candidates";
		// $sql = "SELECT c_name as c_name, position as position, votes as newvote from candidates where c_id in (select c_id from candidates group by position having max(newvote))"; 
		//$sql = "select * from candidates where c_id in (select c_id from candidates group by position ) having max(votes)";

		// $sql = "select * from candidates as candidate  group by candidate.position having max(votes)";
		$result = mysqli_query($conn, $sql);
	//	$row = mysqli_fetch_array($result);

		// print_r($result);
 
		foreach ($result as $value) {										
			 
			echo "<table style='border-spacing: 5px;color:white;border-bottom: 1px solid #ddd;'><colgroup><col style='width: 30%'><col style='width: 30%'><col style='width: 30%'></colgroup><tr align='left'><td>".$value['c_name']."</td><td>".$value['position']."</td>";
            echo "<td>".$value['votes']."</td></tr>"; 
        }
     }
     else
     {
     	echo "false";
     }
?>
