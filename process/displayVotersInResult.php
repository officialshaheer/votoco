<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "votoco";

$conn = new mysqli($servername,$username,$password,$dbname);

$sql = "select voters_id,voting_status from voterslist where voting_permission = 'GRANTED' ";
$result = mysqli_query($conn,$sql);
	echo "<table style='color:white;'><tr align='left'><th>Voter's ID </th><th>Voting Status </th></tr></table>";
	foreach ($result as $value) {										
	echo "<table style='border-spacing: 5px;color:white;border-bottom: 1px solid #ddd;'><colgroup><col style='width: 30%'><col style='width: 30%'><col style='width: 30%'></colgroup><tr align='left'><td>".$value['voters_id']."</td><td>".$value['voting_status']."</td></tr>";
	}
?>     