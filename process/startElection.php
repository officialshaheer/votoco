<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "votoco";

$conn = new mysqli($servername,$username,$password,$dbname);

	$dt = new DateTime();
	$election_year = $dt->format('Y');	

	$sql = "INSERT into election (election_year,election_status,election_starting_time,election_ending_time) values ($election_year,'started',DATE_FORMAT(CURRENT_TIME(), '%H:%i:%s'),ADDTIME(CURRENT_TIME(), '00:05:00'))";
	mysqli_query($conn,$sql);
	$last_id = mysqli_insert_id($conn);
	session_start();
	$_SESSION['ee_id'] = $last_id;
	
	$sql = "SELECT election_id,election_ending_time from election where election_id= '$last_id' ";
	$r = mysqli_query($conn,$sql);
	$result = mysqli_fetch_array($r);
	// session_start();
	// $_SESSION['election_id'] = $result['election_id'];
	// $_SESSION['election_ending_time'] = $result['election_ending_time']; 

	$session_Election_id = $result['election_id'];
	$session_Election_ending_time = $result['election_ending_time']; 

	$sql = "INSERT into sessions (e_id,ending_time) values ('$session_Election_id','$session_Election_ending_time')";
	mysqli_query($conn,$sql);

	// echo $result['election_ending_time'];

    // session_start();
    // $_SESSION['system_hash'] = $node_id;

?>    