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
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="date_time.js"></script>
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
.time {
  background-color: black;
  width: 165px;
  height:50px;
  position: fixed;
  left:73.3%;
  top:9.5%;
  opacity: 1;
  border-radius: 16px; 
  box-shadow: 2px 1px 6px;
} 
</style>
</head>     
   
<body>
    <div class="limiter">Election id : <b><?php echo $_SESSION['election_id']; ?></b><br>Election ending time :<b><?php echo $_SESSION['election_ending_time']; ?></b>
            <div class="time">
            <span id="date_time" style="color:white;text-shadow: 2px 2px 4px #000000;font-family: 'Gill Sans';font-size: 40px;"></span>
            <script type="text/javascript">window.onload = date_time('date_time');</script></div>

        <a style="padding-left: 1000px;color: black;" href="logout_node.php">Log Out Node!</a>
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
            $sql = "SELECT voting_permission from voterslist where voters_id = '$voters_id' ";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($result);
                
                if($row['voting_permission']=='GRANTED') {
                session_start();
                $_SESSION['voters_id'] = $_POST['voters_id'];
                header('Location: voting.php');
                }
                else {
                echo "<script>alert('Voting Permission is REVOKED for this user! Contact election authority.');</script>";
                session_start();
                $_SESSION['voters_id'] = "";
                }
        }        
        else{
            echo "<script>alert('Voter id or password is invalid!');</script>";
        }        
}
else {
echo "<script>alert('Enter your voter id and password?');</script>";
}
?>

<script type="text/javascript">
    
 function explode(){
  alert("Boom!");
}
setTimeout(explode, 2000);



</script>



</body>
</html>
