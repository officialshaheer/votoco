<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "votoco";

$conn = new mysqli($servername,$username,$password,$dbname);

    $election_id = $_POST['election_id'];
    $election_ending_time = $_POST['election_ending_time']; 
   // SELECT DATE_FORMAT(CURRENT_TIME(), '%H:%i') as time
    // DATE_FORMAT(colName, '%Y-%m-%d') DATEONLY, 
    $sql   = "SELECT DATE_FORMAT(CURRENT_TIME(), '%H:%i') as currenttime,TIME_FORMAT(election_ending_time, '%H:%i') endingTime from election where election_id = '$election_id' ";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
   // echo $row['currenttime'];
   // echo $row['endingTime'];

        if ($row['currenttime']==$row['endingTime']) 
        {   
        echo "TRUE";
         }
        else {
        echo "FALSE";    
        }

    
?>
