<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "votoco";

$conn = new mysqli($servername,$username,$password,$dbname);

if (isset($_POST['login'])) {
            
    $voters_id = $_POST['voters_id'];
    $pass  = $_POST['pwd'];

    $sql   = "SELECT * from voterslist where voters_id = '$voters_id' and dob = '$pass' ";
        if ($conn->query($sql)->num_rows) {
        session_start();
        $_SESSION['voters_id'] = $_POST['voters_id'];
        header('Location: voting.php');
        }
        else {
        // echo "User Not Found!";
        echo "Error";
        }
}
?>