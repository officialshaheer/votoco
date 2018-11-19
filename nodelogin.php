<?php 
  if(!$_GET['system_hash']){
    header('Location: err.php');
  }
  $system_hash = $_GET['system_hash'];
  session_start();
  $_SESSION['system_hash'] = $system_hash; 
?> 
<!DOCTYPE html>
<html>
<head>
    <title>Node Login - VotoCo</title>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="date_time.js"></script>

<style type="text/css">
  
body {
  background-image: url(bg1.jpg);
  background-repeat: none;
  background-size: 100%;
  }
.time {
  background-color: black;
  width: 150px;
  height:50px;
  position: fixed;
  left:80%;
  top:30px;
  opacity: 1;
  border-radius: 16px; 
  box-shadow: 2px 1px 6px;
}  

</style>

</head>
<body>
  <div class="time">
  <span id="date_time" style="color:white;text-shadow: 2px 2px 4px #000000;font-family: 'Gill Sans';font-size: 40px;"></span>
  <script type="text/javascript">window.onload = date_time('date_time');</script></div>
  <br>
  <br>
  <br>
  <br> 
<center>
<p style="font-size: 40px;color: black;"> Node Login!</p>
<form action="" method="POST">
<label>Your Account :</label><br>
<input type="text" id="system_hash" readonly="readonly" style="border: none;width: 350px;padding-left: 180px;" value="<?php echo $_GET['system_hash']; ?>"><br><br>
<input type="password" id="pwd" placeholder="password" value="" /><br><br>
<input id="nodeLoginBtn" type="button" value="login">
</form>

</center>

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


