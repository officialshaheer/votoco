<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "votoco";

$conn = new mysqli($servername,$username,$password,$dbname);
            
    $voters_id = $_POST['voters_id'];
    $sql   = "SELECT voting_status from voterslist where voters_id = '$voters_id' ";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
        if ($row['voting_status']=='TRUE') {   
        echo "TRUE";
        }
        else {
        echo "FALSE";    
                 }

?> 