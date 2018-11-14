<?php 

$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "votoco";

$conn = new mysqli($servername, $username, $password, $dbname);

if(isset($_POST['voters_id'])){

    $voters_id = $_POST['voters_id'];
    $voters_pass = $_POST['pwd'];
    
    $sql   = "SELECT * from voterslist where voters_id = '$voters_id' and dob = '$voters_pass' ";
    if ($conn->query($sql)->num_rows) {
        session_start();
        $_SESSION['voters_id'] = $voters_id ;
        header('Location: voting.php');
    }
    else {
        // echo "User Not Found!";
        $name = 'Enter your correct Voters ID';
        echo $name;    
        }
}
?>