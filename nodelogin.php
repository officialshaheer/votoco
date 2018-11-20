<?php 
  if(!$_GET['system_hash']){
    header('Location: err.php');
  }
  $system_hash = $_GET['system_hash'];
  session_start();
  $_SESSION['system_hash'] = $system_hash; 
?> 

<?php

$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "votoco";

$e_id = $_GET['e_id'];

$conn = new mysqli($servername,$username,$password,$dbname);
$sql = "SELECT e_id,ending_time from sessions where e_id = $e_id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);

$_SESSION['e_id'] = $row['e_id'];
$_SESSION['election_ending_time'] = $row['ending_time'];


 ?>




<!DOCTYPE html>
<html>
<head>
    <title>Node Login - VotoCo</title>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="date_time.js"></script>

<style type="text/css">
  
body {
  /*background-image: url(bg1.jpg);
  background-repeat: none;*/
  background-color: #000A0A;
  background-size: 100%;
  font-family: -apple-system, BlinkMacSystemFont, sans-serif;
  }
.nodelogin {
  background-color: white;
  width: 50%;
  height:50%;
  position: fixed;
  left:25%;
  top:25%;
  opacity: 0.9;
  border-radius: 16px; 
  box-shadow: 2px 1px 6px;
  font-family: -apple-system, BlinkMacSystemFont, sans-serif;
}

.time {
  background-color: #D1E5F0;
  width: 160px;
  height:50px;
  position: fixed;
  left:80%;
  top:30px;
  opacity: 1;
  border-radius: 16px; 
  box-shadow: 2px 1px 6px;
  font-family: -apple-system, BlinkMacSystemFont, sans-serif;
}  
input[type="button"] {
  background-color: #900c3f;
  border-radius: 10px;
  width: 175px;
  height: 40px;
  border:0;
  color: white;
  box-shadow: 1px 3px 5px #000000;
  opacity: 1;
  font-family: -apple-system, BlinkMacSystemFont, sans-serif;
}
input[type="button"]:hover {
  background-color: #581845;
  border-radius: 10px;
  width: 175px;
  height: 40px;
  border:0;
  color: white;
  box-shadow: 1px 3px 5px #000000;
  cursor: pointer;
  font-family: -apple-system, BlinkMacSystemFont, sans-serif;
}
input {
    text-align: center;
    font-family: -apple-system, BlinkMacSystemFont, sans-serif;
}

</style>

</head>
<body>


  <div class="nodelogin">
  <div class="time">
  <span id="date_time" style="color:#000A0A;font-family: -apple-system, BlinkMacSystemFont, sans-serif;font-size: 40px;"></span>
  <script type="text/javascript">window.onload = date_time('date_time');</script></div>
  <br>
 <center>
<p style="font-size: 40px;color: black;font-family: -apple-system, BlinkMacSystemFont, sans-serif;"> Node Login!</p>
<form action="" method="POST">
<label>Your Account :</label><br>
<input type="text" id="system_hash" readonly="readonly" style="border: none;width: 100%;" value="<?php echo $_GET['system_hash']; ?>"><br><br>
<input type="password" id="pwd" placeholder="password" value="" /><br><br>
<input id="nodeLoginBtn" type="button" value="login">
</form>

</center>
</div>
<script type="text/javascript">
    $(function(){

     $('#nodeLoginBtn').click(function(event){

                var system_hash = $('#system_hash').val();
                var pwd = $('#pwd').val();     
               
                $.ajax({
                    url: 'process/node_LoginServerPage.php',
                    type: 'POST',
                    data: {
                        system_hash: system_hash,
                        pwd: pwd
                      },
                success: function(data){                       
                      var data = JSON.parse(data);
                      console.log(data);
                      if(data.success){
                        alert("Authenticated node");
                        window.location.replace("vote.php");
                        }
                        else {
                        alert(data.message); 

                        // window.location.replace("nodelogin.php");  
                        }                                   
                    }
                })
      });


});
</script>

</body>
</html>


