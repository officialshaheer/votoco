<!DOCTYPE html>
<html lang="en">
<head>
<title>VotoCo</title>
<link rel="stylesheet" type="text/css" href="votostyle.css">
</head>     
   
<body>
    <div class="limiter">
        <div class="content">
            <br>
           <br>
           <br>
           
            <h2 align="center">Admin Login</h2>
            <center>
            <table>
                <tr>
                    <td>
                        <form action="" method="POST">
                        <input type="text" name="a_name" required="required"><br><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" name="pwd" required="required"><br><br>
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
<!-- DATABASE CREATION -->
<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$conn = new mysqli($servername, $username, $password);
$conn->query("CREATE DATABASE IF NOT EXISTS `votoco`");
?>

<?php
 $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "votoco";

    $conn = new mysqli($servername, $username, $password, $dbname);   
 $sql =  "CREATE TABLE admin (
a_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
a_name VARCHAR(20) NOT NULL,
a_pwd VARCHAR(8) NOT NULL)";
 if($conn->query($sql)=== TRUE)
        {
            echo 'table is created succssfully';
            $sql2 = "INSERT into admin (a_name,a_pwd) values ('admin','12345678')";
            if($conn->query($sql2)=== TRUE){ echo "data added succesfully";}
            else { echo "data adding error";}
        }
        else
        {
            echo 'Table creation error';
        }
?>


<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "votoco";

$conn = new mysqli($servername, $username, $password, $dbname);

if (isset($_POST['login'])) {
    $aname = $_POST['a_name'];
    $pass  = $_POST['pwd'];
    $sql   = "SELECT * from admin where a_name = '$aname' and a_pwd = '$pass' ";
    if ($conn->query($sql)->num_rows) {
        header('Location: votoco.php');
    } else {
        // echo "User Not Found!";
        print($aname);
    }
}
?>
</body>
</html>
