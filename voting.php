<?php    
   session_start(); 
   if(!$_SESSION['voters_id']) {
   header('Location: vote.php');
   }
   $voters_id = $_SESSION['voters_id'];
?>
<html>
<head>
<title>VotoCo - E-Voting</title>
<link rel="stylesheet" type="text/css" href="votostyle.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css">

<style type="text/css">
.content-new {
  background-color:black;
  width: 30%;
  height: 50%;
  left: 0%;
  top:25%;
  box-shadow: 5px 3px 10px #665;
  position: fixed;
  border-radius: 10px;
  opacity: 0.7;
  font-family: -apple-system, BlinkMacSystemFont, sans-serif;
}
input[type="button"] {
  background-color: white;
  border-radius: 10px;
  width: 175px;
  height: 40px;
  border:0;
  color: black;
  box-shadow: 1px 3px 5px #000000;
  opacity: 0.9;
  font-family: -apple-system, BlinkMacSystemFont, sans-serif;
}
input[type="button"]:hover {
  background-color: white;
  border-radius: 10px;
  width: 175px;
  height: 40px;
  border:0;
  color: black;
  box-shadow: 1px 3px 5px #000000;
  cursor: pointer;
  font-family: -apple-system, BlinkMacSystemFont, sans-serif;
}
.answer_list {
  display:none;
  width: 700px;
  height: 330px;
  position: fixed;
  top:25%;
  left:30%;
  border-radius: 10px;
  opacity: 0.9;
  font-family: -apple-system, BlinkMacSystemFont, sans-serif;
}
.content {
  background-color:#0000FF;
  width: 20%;
  height: 300px;
  left: 40%;
  top:25%;
  box-shadow: 5px 3px 10px #666;
  position: fixed;
  border-radius: 10px;
  opacity: 0.4;
  font-family: -apple-system, BlinkMacSystemFont, sans-serif;
}
.content_in_voting_page {
  background-color:#091A1B;
  width: 70%;
  height: 700px;
  left: 15%;
  top:15%;
  box-shadow: 5px 3px 10px #666;
  position: fixed;
  border-radius: 10px;
  opacity: 0.8;
  font-family: -apple-system, BlinkMacSystemFont, sans-serif;
}
.dropdown {
    float: left;
    overflow: hidden;
    font-family: -apple-system, BlinkMacSystemFont, sans-serif;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: green;
    font-family: inherit;
    margin: 0;
    font-family: -apple-system, BlinkMacSystemFont, sans-serif;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: red;
    cursor: pointer;
    font-family: -apple-system, BlinkMacSystemFont, sans-serif;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    font-family: -apple-system, BlinkMacSystemFont, sans-serif;

}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
    font-family: -apple-system, BlinkMacSystemFont, sans-serif;
}

.dropdown-content a:hover {
    background-color: #ddd;
    font-family: -apple-system, BlinkMacSystemFont, sans-serif;
  }
.dropdown-content:hover{
  cursor: pointer;
  font-family: -apple-system, BlinkMacSystemFont, sans-serif;
}
.dropdown:hover .dropdown-content {
    display: block;
    cursor: pointer;
    font-family: -apple-system, BlinkMacSystemFont, sans-serif;
}
.btnStyle {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    width: 170px;
    height: 50px;
    padding: 14px 16px;
    background-color: green;
    font-family: inherit;
    margin: 0;
    cursor: pointer;
    font-family: -apple-system, BlinkMacSystemFont, sans-serif;
}
.displayCandidates {
    background-color: #091A1B;
    width: 55%;
    height: 600px;
    left: 30%;
    top:15%;
    box-shadow: 5px 3px 10px #666;
    position: fixed;
    opacity: 0.9;
    font-family: -apple-system, BlinkMacSystemFont, sans-serif;
}
td,th { width: 33%;font-family: -apple-system, BlinkMacSystemFont, sans-serif; }

.checkifVoted {
  color: red;
  height:100%;
  position: fixed;
  top:0%;
  left:0%;
  font-size: 40px;
  opacity: 0.6;
  font-family: -apple-system, BlinkMacSystemFont, sans-serif;
}
.electionStatus {
  background-color: black;
  position: fixed;
  width: 12%;
  border-radius: 16px;
  color:white;
  padding-left: 16px;
  height: 12%;
  left: 42%;
  top:2%;
  opacity: 0.6;
  font-family: -apple-system, BlinkMacSystemFont, sans-serif;
}
.graph {
  position: fixed;
 /* padding-left:20px;*/
  width: 100%;
  height:auto;
  top:85%;
  text-align: center;
  font-family: -apple-system, BlinkMacSystemFont, sans-serif;
}
body {
  color:white;
}
</style>
</head>
<body>
<div class="limiter">
 
  <img src="votoCologo.png"  width="120px" height="120px" />

  <div class="content_in_voting_page">
    <p>
    <div class="dropdown">
      <button class="dropbtn">CANDIDATES LIST</button>
      <div class="dropdown-content position-menu">
      <button class="btnStyle menu-item" value="CHAIRMAN" id="CHAIRMAN">CHAIRMAN</button><br>
      <button class="btnStyle menu-item" value="VICE-CHAIRPERSON" id="VICECHAIRPERSON">VICE-CHAIRPERSON</button><br>
      <button class="btnStyle menu-item" value="ARTS-SECRETARY" id="ARTSSECRETARY">ARTS SECRETARY</button><br>
      <button class="btnStyle menu-item" value="SPORTS-SECRETARY" id="SPORTSSECRETARY">SPORTS SECRETARY</button><br>
      <button class="btnStyle menu-item" value="MAGAZINE-EDITOR" id="MAGAZINEEDITOR">MAGAZINE EDITOR</button><br>
      <button class="btnStyle menu-item" value="1stYEARREP" id="1stYEARREP">1<sup>st</sup> Year REP</button><br>
      <button class="btnStyle menu-item" value="2ndYEARREP" id="2ndYEARREP">2<sup>nd</sup> Year REP</button><br>
      <button class="btnStyle menu-item" value="3rdYEARREP" id="3rdYEARREP">3<sup>rd</sup> Year REP</button><br>  
      <button class="btnStyle menu-item" value="4thYEARREP" id="4thYEARREP">4<sup>th</sup> Year REP</button>    
      </div>

    </div>
     </p>
  

    </div>
    <div class="electionStatus"></div>
    <div class="displayCandidates"><p align="center"><b> Hello, <?php $voters_id = $_SESSION['voters_id']; echo $voters_id; ?></b>&nbsp&nbsp&nbsp&nbsp<a  style='text-decoration: none;color: white' href="logout.php"><b>Logout</b></a><br><br>
      <table style='border-spacing: 5px;border-bottom: 2px solid #000;' width='90%'><tr align="left"><th>Candidate ID</th><th>Candidate Name</th><th>Department</th><th>Position</th><th>  Vote  </th></tr></table>
    <div align="center" class="displayCandidatesContentfromDB">

    </div>
    <div class="checkifVoted"></div>  

    
  </p></div>


</div>

<script type="text/javascript">
  
$(function(){
      $('.displayCandidatesContentfromDB').on('click', '.votingBtn', function(){  
                var userId = $(this).attr('data-userid');
                var position = $(this).attr('data-position');
                var cId = $(this).attr('data-cid');
                $(this).attr('disabled', 'disabled');


                $.ajax({
                    url: 'process/voteAdding.php',
                    type: 'POST',
                    data: {
                        user_id: userId,
                        position: position,
                        cid: cId
                      },
                success: function(data){
                      //alert('Done Voting!');
                      //console.log(data);
                      $('.displayCandidatesContentfromDB').html(data);                    
                    }
                  })
            });

   });
</script>

<script type="text/javascript">

   $(function(){

    $('.position-menu .menu-item').click(function(){
      var position = $(this).attr('value');
      $.ajax({
          url: 'process/getCandidates.php',
          type: 'POST',
          data: {
              position: position
          },
          success: function(data){
              $('.displayCandidatesContentfromDB').html(data);                    
          }
      });
    });
   });

 </script>


<script type="text/javascript">
$(document).ready(function() {
 
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
  checkStatusProgress();


    
});
</script>

<script type="text/javascript">
  $(document).ready(function(){
    
    var voters_id = "<?php echo $_SESSION['voters_id'] ?>";
    
      
      $.ajax({
        url: 'process/voterStatusCheck.php',
        type: 'POST',
        data: {
          voters_id: voters_id,
          election_id: election_id
        },
        success: function(data){  
          var val =  new String(data);
          if(val=="TRUE "){
            alert("You cant vote again");
            window.location.replace("logout.php");
          }
          else{
            alert("You can vote now");          
          }
        }
      
  

  });
});      
</script>

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
           window.location = "http://192.168.43.111/votoco/electionInvalidate.php";
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