<!DOCTYPE html> 
<html lang="en">
<head>
<title>Results - 2018</title>
<link rel="stylesheet" type="text/css" href="votostyle.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css">
<script src="jquery.fireworks.js"></script>

<style type="text/css">
     
.result {
    background-color: #000000;
    width:70%;
    height:80%;
    opacity: 0;
    left:15%;
    top:15%;
    position: absolute;
    border-radius: 15px;
    box-shadow: 6px 4px 10px;
    padding-left: 14px;
    padding-right: 14px;
}
h2 {
    color: white;
    text-shadow: 2px 2px 8px black;
    opacity: 0;
}
table {
    width: 100%;
    height: 1%;
}
.electionStatus {
  width: 100%;
  color:black;
  height: 10%;
  top:90%;
  left: 0%;
  padding-left:15px; 
  opacity: 1;
}
.graph {
  position: fixed;
  padding-left:20px;
  width: 50vw;
  height:auto;
  top:85%;
  text-align: center;
}

</style>




</head>     
   
<body>
    <div class="limiter">
        <div class="result">
            <br>
           
            <h2 class="heading" align="center" style="font-size:20px">College Union Election Results - 2018</h2><br>
            <center>
            </center>
            <div class="electionStatus"><div class="barGraphcount"></div></div>   
        </div>
    
    </div>

<div class="demo"></div>

<script type="text/javascript">
$(document).ready(function() {
   $("div.result").animate({opacity:'0.9',width:'55%',position:'fixed'}, 2000 );
   $("h2").animate({opacity:'1'}, 2000 );
    $.ajax({
      url: 'process/reportGeneration.php',
      type: 'GET',
                   
      success: function(data){
      // alert(data);
      // console.log(data);
      // console.log(data);
        if(data == "false"){
          checkStatusProgress();
          $('.result').append("<center><p style='color:white;font-size:18px'><b>Voting in progress. Please wait!</b></p></center>"); 
        } else {
          $('.demo').fireworks({sound: true,opacity: 0.3,width: '100%',height: '100%'});
          $('.result').append(data);
        } 
      } 
    })

    function checkStatusProgress(){
    $.ajax({
        url: 'process/pollingStatus.php',
        type: 'GET',
        success: function(data){
            $('.electionStatus').html(data);     
            var progressWidth = $('div.barGraphcount').data("width");
            $('div.barGraphcount').animate({width: progressWidth + 'px', opacity: '0.8'}, 200, function(){
              setTimeout(function(){
                checkStatusProgress();
              }, 1000);
            });
        }
    });  
  }
  






  
});

</script>


</body>
</html>
