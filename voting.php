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
}
.content_in_voting_page {
  background-color:white;
  width: 70%;
  height: 600px;
  left: 15%;
  top:15%;
  box-shadow: 5px 3px 10px #666;
  position: fixed;
  border-radius: 10px;
  opacity: 0.8;
}
.dropdown {
    float: left;
    overflow: hidden;
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
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}
.btnStyle {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    width: 170px;
    height: 60px;
    padding: 14px 16px;
    background-color: green;
    font-family: inherit;
    margin: 0;
}
.displayCandidates {
    background-color: white;
    width: 55%;
    height: 600px;
    left: 30%;
    top:15%;
    box-shadow: 5px 3px 10px #666;
    position: fixed;
    opacity: 0.7;
}

</style>
</head>
<body>
<div class="limiter">

  <a href="logout.php">Logout</a>
  <div class="content_in_voting_page">
    <p>
    <div class="dropdown">
      <button class="dropbtn">CANDIDATES LIST</button>
      <div class="dropdown-content">
      <button class="btnStyle" value="CHAIRMAN" id="CHAIRMAN">CHAIRMAN</button><br>
      <button class="btnStyle" value="VICE-CHAIRPERSON">VICE-CHAIRPERSON</button><br>
      <button class="btnStyle" value="ARTS SECRETARY">ARTS SECRETARY</button><br>
      <button class="btnStyle" value="SPORTS SECRETARY">SPORTS SECRETARY</button><br>
      <button class="btnStyle" value="MAGAZINE EDITOR">MAGAZINE EDITOR</button><br>
      <button class="btnStyle" value="1stYEARREP">1<sup>st</sup> Year REP</button><br>
      <button class="btnStyle" value="2ndYEARREP">2<sup>nd</sup> Year REP</button><br>
      <button class="btnStyle" value="3rdYEARREP">3<sup>rd</sup> Year REP</button><br>  
      <button class="btnStyle" value="4thYEARREP">4<sup>th</sup> Year REP</button>    
      </div>
    </div>
   </p>
    </div>

    <div class="displayCandidates"><p align="center"><b> Hello, <?php $voters_id = $_SESSION['voters_id']; echo $voters_id; ?></b>
    <div align="center" class="displayCandidatesContentfromDB">
      
      <table border="2">
        <tr>
          <td>
            CANDIDATE DEPARTMENT :
          </td>
        </tr>
      </table>

    </div>
  </p></div>

</div>
</body>
</html>

<script type="text/javascript">
   $(function(){
      $('#CHAIRMAN').click(function(event){

                // event.preventDefault();
                var position = $('#CHAIRMAN').val();
                
                $.ajax({
                    url: 'process/getCandidates.php',
                    type: 'POST',
                    data: {
                        position: position
                      },
                success: function(data){
                      // alert(data);
                      //console.log(data);
                        $('.displayCandidatesContentfromDB').html(data);                    
                    }
                  })
            });

   });
  </script>


