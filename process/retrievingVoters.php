<?php 
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "votoco";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "SELECT voters_id from voterslist order by voters_id ASC";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);

    echo '<select id="votersList" style="width:50%;">';
    foreach ($result as $value) {
    	echo '<option value="'.$value['voters_id'].'">'.$value['voters_id'].'</option>';
    }
    echo '</select>';

?>	
