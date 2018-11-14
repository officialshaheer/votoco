<?php 
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "votoco";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "SELECT c_id from candidates order by c_id ASC";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);

    echo '<select id="cndList" style="width:100%;">';
    foreach ($result as $value) {
    	echo '<option value="'.$value['c_id'].'">'.$value['c_id'].'</option>';
    }
    echo '</select>';

?>	
