<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "votoco";

$conn = new mysqli($servername,$username,$password,$dbname);
$sql = "UPDATE candidates set votes = '0' ";
mysqli_query($conn,$sql);
echo "The system has been resetted!";

?>