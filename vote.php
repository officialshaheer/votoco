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
<script type="text/javascript" src="date_time.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style type="text/css">

.content_in_vote {
  background-color:green;
  width: 20%;
  height: 300px;
  left: 40%;
  top:25%;
  box-shadow: 5px 3px 10px #666;
  position: fixed;
  border-radius: 10px;
  opacity: 0.6;
}
.time {
  background-color: #D1E5F0;
  width: 9%;
  height:40px;
  position: fixed;
  left:73.5%;
  top:10%;
  opacity: 1;
  border-radius: 16px;
  padding-top: 3px; 
  
}  
input[type="submit"] {
  background-color: #900c3f;
  border-radius: 10px;
  width: 175px;
  height: 40px;
  border:0;
  color: white;
  box-shadow: 1px 3px 5px #000000;
  opacity: 1;
}
input[type="submit"]:hover {
  background-color: #581845;
  border-radius: 10px;
  width: 175px;
  height: 40px;
  border:0;
  color: white;
  box-shadow: 1px 3px 5px #000000;
  cursor: pointer;
}
input {
    text-align: center;
}
</style>
</head>     
   
<body>
    <div class="limiter">Election id : <b><?php echo $_SESSION['e_id']; ?></b><br>Election ending time :<b><?php echo $_SESSION['election_ending_time']; ?></b>
            <div class="time"><center>
            <span id="date_time" style="color:#1B0914;font-family: -apple-system, BlinkMacSystemFont, sans-serif;font-size: 30px;"></span>
            <script type="text/javascript">window.onload = date_time('date_time');</script></center></div>

        <a style="padding-left: 1000px;color: black;" href="logout_node.php">Log Out Node!</a>
        <div class="content_in_vote">
            <br>
           <br>
           <br>
           
            <h2 align="center" style="color:white;font-family: -apple-system, BlinkMacSystemFont, sans-serif;">Voter Login</h2>
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

$(document).ready(function() {
        
   var repeater;

function doWork() {
    var election_id = "<?php echo $_SESSION['e_id'] ?>";
    var election_ending_time = "<?php echo $_SESSION['election_ending_time'] ?>";
    // alert(election_id);
    
    $.ajax({
        url: 'process/ElectionStatusCheck.php',
        type: 'POST',
        data: {
          election_id: election_id,
          election_ending_time: election_ending_time
        },
        success: function(data){
        //alert(data);  
           var val =  new String(data);
           if(val=="TRUE"){
           alert("Election Time Out!");
           window.location = "http://localhost/votoco/electionInvalidate.php";
           }
           else{
           // alert("Election in progress");

          }
        }
    });       





 // alert('Election timeout!\nYou are going to get redirected to results page.');
 repeater = setTimeout(doWork, 4000);
}

doWork();   
    
});
</script>



</body>
</html>
