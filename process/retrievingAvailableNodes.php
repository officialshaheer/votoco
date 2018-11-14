<?php 
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "votoco";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "SELECT system_hash from systemlist where permission = 'FALSE' ";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);

    echo '<select id="nodesList" style="width:50%;">';
    foreach ($result as $value) {
    	echo '<option value="'.$value['system_hash'].'">'.$value['system_hash'].'</option>';
    }
    echo '</select>';

?>	