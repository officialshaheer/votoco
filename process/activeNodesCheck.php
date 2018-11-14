<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "votoco";

$conn = new mysqli($servername,$username,$password,$dbname);

		$sql = "SELECT * from systemlist where node_status = 'active' ";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($result);
 		
		foreach ($result as $value) {
			
			echo "<br><table width='60%' style='border-spacing: 3px;border-bottom: 2px solid #ddd;color:white;'><tr align='center'><td>".$value['system_id']."</td><td>";
            echo $value['system_hash'];
            echo "</td><td>".$value['node_status']."</td><td><div style='background-color:green;width:12px;height:12px;border-radius:6px;'></td></tr></table>";
            
        }
?>        