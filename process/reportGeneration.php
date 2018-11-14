<?php 
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "votoco";

	

    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "select count(id) from voterslist having count(id) = (select count(id) from voterslist where voting_status = 'TRUE')";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

	if($row) {
		$sql = "SELECT c_name, position, max(votes), votes from candidates group by position";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($result);
 
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
