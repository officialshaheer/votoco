<<<<<<< HEAD
<?php 
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "votoco";

    $conn = new mysqli($servername, $username, $password, $dbname);

    		$position = $_POST['position'];
	
	if( isset( $_POST['position'] ) ) {

		$sql = "SELECT * from `candidates` where position = '$position' "; 
		if ($conn->query($sql)->num_rows) {
		echo '<input type="text" value="POSITION IS DISPLAYED">';
		}
		else
		{
		echo 'Not executed';
		}
	}
		
?>
=======
<?php 
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "votoco";

    $conn = new mysqli($servername, $username, $password, $dbname);

    		$position = $_POST['position'];
	
	if( isset( $_POST['position'] ) ) {

		$sql = "SELECT * from `candidates` where position = '$position' "; 
		if ($conn->query($sql)->num_rows) {
		echo '<input type="text" value="POSITION IS DISPLAYED">';
		}
		else
		{
		echo 'Not executed';
		}
	}
		
?>
>>>>>>> 50712c5a151373f2f775ad87eabddb8355052a3b
