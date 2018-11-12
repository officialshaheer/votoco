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
                        <input type="text" name="voters_id" required="required"><br><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" name="pwd" required="required" placeholder="DD/MM/YYYY"><br><br>
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

$conn = new mysqli($servername, $username, $password, $dbname);

if (isset($_POST['login'])) {
    $voters_id = $_POST['voters_id'];
    $voters_pass = $_POST['pwd'];
    $sql   = "SELECT * from voterslist where voters_id = '$voters_id' and dob = '$voters_pass' ";
    if ($conn->query($sql)->num_rows) {
        session_start();
        $_SESSION['voters_id'] = $voters_id ;
        header('Location: voting.php');
    } else {
        // echo "User Not Found!";
        $name = 'Enter your correct Voters ID';
        print($name);
    }
}
?>



</body>
</html>
