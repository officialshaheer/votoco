<?php 
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "votoco";

session_start();
$_SESSION['e_id'];
$election_id = $_SESSION['e_id'];

$conn = new mysqli($servername,$username,$password,$dbname);
	
    $sql = "UPDATE election set election_status = 'ended' where election_id = '$election_id' ";
    mysqli_query($conn,$sql);

    $sql = "TRUNCATE `votoco`.`election`";
    mysqli_query($conn,$sql);

    $sql = "TRUNCATE `votoco`.`sessions`";
    mysqli_query($conn,$sql);

    $sql = "UPDATE systemlist set permission = 'FALSE' , node_status = 'not_active'  ";
    mysqli_query($conn,$sql);

	session_destroy();
	// $_SESSION['system_hash'] = "";
	// $_SESSION['voters_id'] = "";
	// $_SESSION['election_id'] = "";
	// $_SESSION['election_ending_time'] = "";

	header('Location: result.php');
 ?> 