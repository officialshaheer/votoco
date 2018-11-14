<?php 
session_start();  
if(!$_SESSION['system_hash']) {
    header('Location: invalidnode.php');  
}
else {

$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "votoco";

$system_hash = $_SESSION['system_hash'];

$conn = new mysqli($servername,$username,$password,$dbname);
$sql = "SELECT node_status from systemlist WHERE system_hash = '$system_hash' ";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    $status = $row['node_status'];
    
    if($status=='active') {
    $_SESSION['system_hash'] = $system_hash ;
    }
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
<title>VotoCo</title>
<link rel="stylesheet" type="text/css" href="votostyle.css">
<style type="text/css">
    
    .content_in_vote {
    background-color:#0000FF;
    width: 20%;
    height: 300px;
    left: 40%;
    top:25%;
    box-shadow: 5px 3px 10px #666;
    position: fixed;
    border-radius: 10px;
    opacity: 1;
}
</style>
</head>     
   
<body>
    <div class="limiter">
        <a style="padding-left: 1200px;color: black;" href="logout_node.php">Log Out Node!</a>
        <div class="content_in_vote">
            <br>
           <br>
           <br>
           
            <h2 align="center">Voter Login</h2>
            <center>
            <table>
                <tr>
                    <td>
                        <form action="" method="POST">
                        <input type="text" name="voters_id"><br><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" name="pwd" placeholder="DD/MM/YYYY"><br><br>
                    </td>
                </tr>
                <tr>
                    <td>    
                        <input type="submit" class="btn btn-primary" name="login" value="LOGIN">
                </form>
                    </td>
                </tr>
            </table>
            </center>    
        </div>
    </div>

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
</body>
</html>
