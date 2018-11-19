<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "votoco";

$conn = new mysqli($servername,$username,$password,$dbname);
$sql = "UPDATE candidates set votes = '0' ";
mysqli_query($conn,$sql);
$sql = "UPDATE voterslist set voting_status = 'FALSE' where voting_permission = 'GRANTED' ";
mysqli_query($conn,$sql);
$sql = "TRUNCATE `votoco`.`temp_voters`";
mysqli_query($conn,$sql);
$sql = "TRUNCATE `votoco`.`election`";
mysqli_query($conn,$sql);
echo "The system has been resetted!";

?>