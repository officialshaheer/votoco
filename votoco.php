<html>
<head>
<title>VotoCo - E-Voting</title>
<link rel="stylesheet" type="text/css" href="votostyle.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css">
<script type="text/javascript" src="date_time.js"></script>
<style type="text/css">
.content-new {
  background-color:black;
  width: 30%;
  height: 70%;
  left: 0%;
  top:25%;
  box-shadow: 5px 3px 10px #665;
  position: fixed;
  border-radius: 10px;
  opacity: 0.7;
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
.answer_list {
  display:none;
  width: 700px;
  height: 70%;
  position: fixed;
  top:25%;
  left:30%;
  border-radius: 10px;
  opacity: 0.9;
  font-family: -apple-system, BlinkMacSystemFont, sans-serif;
}
.limitervotoco {
  /*background-image: url(bg2.jpg);*/
  background-color: #E0F4F5;
  /*background-color: #D5E1F1;*/
  background-repeat: none;
  background-size: 100% 100%;
  width: 100%;
  height:100%;
  position: fixed;
  font-family: -apple-system, BlinkMacSystemFont, sans-serif;
}
 .TimeContainer {
      background-color: black;
      opacity: .7;
      width: auto;
      border-radius: 15px; 
      color: white;
      font-size: 40px;
      font-family: -apple-system, BlinkMacSystemFont, sans-serif;
    }
.timerwindow {
  background-color: #131E39;
  border-radius: 15px;
  width: 15%;
  height: 10%;
  position: fixed;
  left:85%;
  top:0%;
  opacity: 1;
}
</style>
</head>
<body>
 <!-- <?php

// $servername = "localhost";
// $username   = "root";
// $password   = "";

// $conn = new mysqli($servername, $username, $password);
// $sql = 'CREATE DATABASE votoco1';
// if ($conn->query($sql)) {
    // echo "Database my_db created successfully\n";
   // $sql2 = "CREATE table votoco1.users(id varchar(2))";
    // if ($conn->query($sql2)) {
        // echo "doneee";
    // } else {
        // echo "error ";
    // }
// } else {
    // echo 'Error creating database: ' . mysql_error() . "\n";
// }
?> -->


<div class="limitervotoco">
  <div class="header" style="background-color: black;opacity:0.6;width: 100%;height: 7%;top: 0%;left: 0%;position: fixed;font-size: 28px;color:white;font-family: -apple-system, BlinkMacSystemFont, sans-serif;padding-top: 20px;">&nbsp&nbsp&nbsp&nbspVotoCo - ADMIN PANEL </div><div class="timerwindow"><center><span id="date_time" style="text-shadow: 2px 2px 4px #000000;font-size:50px;font-family: -apple-system, BlinkMacSystemFont, sans-serif;color: white;"></span>
  <script type="text/javascript">window.onload = date_time('date_time');</script></center>
  </div><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <p align="right"><img src="logo.png"  width="300px" height="300px" /></p>
  
   <div class="content-new">
      <center>
         <br>
         <br>
         <br>
         <form>
            <div id="sysAllocation"  style="background-color:black;" class="answer_list" >
               <br>
               <h2> List of Nodes!</h2>

                <label style="color:white;font-family: -apple-system, BlinkMacSystemFont, sans-serif;">Nodes Available :</label>
                 <div class="retrieveNodes"></div><br>
                 <input id="allocateSystemBtn" type="button" name="AddCandidate" value="Allocate System"><br>
                 <div class="giveUrl" style="position: fixed;left: 5%;top: 80%;width: 100%;"></div><br>
                <label style="color:white;">Active Nodes :</label>
                <div class="activeNodes"></div>
                <a style="color: white;font-family: -apple-system, BlinkMacSystemFont, sans-serif;" href="resetNodes.php">DESTROY SESSION</a>
        



            </div>
            <div id="AddCandidate"  style="background-color:green;" class="answer_list">
               <br>
               <h2> Add Candidate</h2>
               <form id="myForm">
                 <table>
                  <tr>
                    <td>
                 <label style="color:white;font-family: -apple-system, BlinkMacSystemFont, sans-serif;">Candidate ID :</label></td><td><input type="text" id="c_id"><div style="color: white;" class="tikholder"></div>
                    </td>
                  </tr>
                  
                  <tr>
                    <td>
                 <label style="color:white;font-family: -apple-system, BlinkMacSystemFont, sans-serif;">Candidate Name :</label></td><td><input type="text" id="candidatename"><br>
                    </td>
                  </tr>
                  <tr>
                    <td>
                 <label style="color:white;font-family: -apple-system, BlinkMacSystemFont, sans-serif;">Candidate Department :</label></td><td><input type="text" id="can_department"><br>
                    </td>
                  </tr>
                  <tr>
                    <td>  
                 <label style="color:white;font-family: -apple-system, BlinkMacSystemFont, sans-serif;">Position :</label></td><td><input type="text" id="can_position"><br>
                    </td>
                  </tr>
                  <tr>
                    <td>  </td><td>
                      <input id="addCandidateBtn" type="button" name="AddCandidate" value="Add Candidate">
                    </td>
                  </tr> 
                </table>   
               </form>





            </div>
            <div id="ProfileUpdate"  style="background-color:blue;" class="answer_list" >
               <br>
               <h2> Update Candidate Profile</h2>

               <form id="updateForm">
                 <table>
                  <tr>
                    <td>
                 <label style="color:white;">Candidate ID :</label></td><td>
                    
                    <div class="retrieveCandidates"></div>
                    
                    <div style="color: white;" class="tikholder"></div>
                    </td>
                  </tr>
                  
                  <tr>
                    <td>
                 <label style="color:white;">Candidate Name :</label></td><td><input type="text" id="UPcandidatename"><br>
                    </td>
                  </tr>
                  <tr>
                    <td>
                 <label style="color:white;">Candidate Department :</label></td><td><input type="text" id="UPcan_department"><br>
                    </td>
                  </tr>
                  <tr>
                    <td>  
                 <label style="color:white;">Position :</label></td><td><input type="text" id="UPcan_position"><br>
                    </td>
                  </tr>
                  <tr>
                    <td>  </td><td>
                      <input id="updateBtn" type="button" name="AddCandidate" value="Update Candidate">
                    </td>
                  </tr> 
                </table>   
               </form>

            </div>
            <div id="GrantRevoke"  style="background-color:green;" class="answer_list" >
               <br>
               <h2> Voters - Grant Revoke</h2>
               <div class="retrieveVoters"></div>
               <br>
               <input id="GrantBtn" type="button" name="" value="GRANT">
               <input id="RevokeBtn" type="button" name="" value="REVOKE">
            </div>

            <input id="startElectionBtn" type="button" name="login" value="Start Election"><br><br>
            <input id="myButton" type="button" name="login" value="System Allocation" onclick="showBox('sysAllocation')"><br><br>
            <input type="button" name="login" value="Adding Candidate" onclick="showBox('AddCandidate')"><br><br>
            <input type="button" name="login" value="Candidate Profile Update" onclick="showBox('ProfileUpdate')"><br><br>
            <input type="button" name="login" value="Voter - Grant & Revoke" onclick="showBox('GrantRevoke')"><br><br>
            <input id="ResetSystem" type="button" name="login" value="RESET SYSTEM">


            <script type="text/javascript">
               $(function(){

                  // Adding Candidate fn1
                  $('#ResetSystem').click(function(event){
                            
                            $.ajax({
                                url: 'process/resetSystem.php',
                                type: 'GET',
                                success: function(data){
                                  alert(data);
                                  //console.log(data);
                                    //$('.result').html(data);                    
                                }
                              })
                        });
                });
            </script> 

         </form>
      </center>
   </div>
</div>

<script type="text/javascript">
  function showBox(name) {
    $('.answer_list').css('display', 'none');
    $('#' + name).css("display", "block");
    $('#' + name).addClass('animated zoomInUp')
  }
</script>

<script type="text/javascript">
  $(function(){
   $( "#c_id" ).keyup(function() {
    //alert('KeyUp is Working!');
  var c_id = $('#c_id').val();     
 
  $.ajax({
                    url: 'process/c_id_validation.php',
                    type: 'POST',
                    data: {
                        c_id: c_id
                        },
                success: function(data){
                      $('.tikholder').html(data);
                      //console.log(data);
                        //$('.result').html(data);                    
                    }
                  })
            });
   });
</script>

<script type="text/javascript">
   $(function(){

      // Adding Candidate fn1
      $('#addCandidateBtn').click(function(event){

                var c_id = $('#c_id').val();
                var c_name = $('#candidatename').val();     
                var c_department = $('#can_department').val();
                var c_position = $('#can_position').val();

                $.ajax({
                    url: 'process/addCandidateToDB.php',
                    type: 'POST',
                    data: {
                        c_id: c_id,
                        candidatename: c_name,
                        c_department: c_department,
                        c_position:c_position
                      },
                success: function(data){
                      alert(data);
                      //console.log(data);
                        //$('.result').html(data);                    
                    }
                  })
            });
      // fn1 ends

      //Retrieving Candidate list 

      $(document).ready(function() {

                var c_id = $('#c_id').val();
                var c_name = $('#candidatename').val();     
                var c_department = $('#can_department').val();
                var c_position = $('#can_position').val();

                $.ajax({
                    url: 'process/retrievingCandidate.php',
                    type: 'POST',
                    data: {
                        c_id: c_id,
                        candidatename: c_name,
                        c_department: c_department,
                        c_position:c_position
                      },
                success: function(data){
                      // alert(data);
                      // console.log(data);
                      $('.retrieveCandidates').append(data);                    
                    }
                  })
            });

      //Updating Candidate List
      $('#updateBtn').click(function(event){

                var c_id = $('#cndList').val();
                var c_name = $('#UPcandidatename').val();     
                var c_department = $('#UPcan_department').val();
                var c_position = $('#UPcan_position').val();
                
                $.ajax({
                    url: 'process/updateCandidateToDB.php',
                    type: 'POST',
                    data: {
                        c_id: c_id,
                        candidatename: c_name,
                        c_department: c_department,
                        c_position:c_position
                      },
                success: function(data){
                      alert(data);
                      // console.log(data);
                      // $('.updateCandidate').append(data);                    
                    }
                  })
            });

      //Retrieving VotersList for Granting Permission
            $(document).ready(function() {

               $.ajax({
                    url: 'process/retrievingVoters.php',
                    type: 'GET',
                    
                success: function(data){
                      // alert(data);
                      // console.log(data);
                      $('.retrieveVoters').html(data);                    
                    }
                  })
            });

      //GRANTING & REVOKING A USER 

      $('#GrantBtn').click(function(event){

                var voters_id = $('#votersList').val();
                var btnId = $(this).val();

                $.ajax({
                    url: 'process/GrantRevoke.php',
                    type: 'POST',
                    data: {
                        voters_id: voters_id,
                        btnId: btnId
                      },
                success: function(data){
                      alert(data);
                      // console.log(data);
                      // $('.updateCandidate').append(data);                    
                    }
                  })
            });

      $('#RevokeBtn').click(function(event){

                var voters_id = $('#votersList').val();
                var btnId = $(this).val();
                
                $.ajax({
                    url: 'process/GrantRevoke.php',
                    type: 'POST',
                    data: {
                        voters_id: voters_id,
                        btnId: btnId
                      },
                success: function(data){
                      alert(data);
                      // console.log(data);
                      // $('.updateCandidate').append(data);                    
                    }
                  })
            });

      //Retrieving Nodes list for Granting Permission
            $(document).ready(function() {

               $.ajax({
                    url: 'process/retrievingAvailableNodes.php',
                    type: 'GET',
                    
                success: function(data){
                      // alert(data);
                      // console.log(data);
                      $('.retrieveNodes').html(data);                    
                    }
                  })
            });

      $('#allocateSystemBtn').click(function(event){

                var node_id = $('#nodesList').val();
                
                $.ajax({
                    url: 'process/allocateSystem.php',
                    type: 'POST',
                    data: {
                        node_id: node_id,
                       },
                success: function(data){
                      // alert(data);
                      // console.log(data);
                      $('.giveUrl').html(data);                    
                    }
                  })
            });


   });
  </script>

  <script type="text/javascript">

    $(document).ready(function() {
          $.ajax({
              url: 'process/activeNodesCheck.php',
              type: 'GET',
              success: function(data){
                $('.activeNodes').html(data);     
                }
          });  
        });
        

  </script>

<script type="text/javascript">
 $(function(){  
   $('#startElectionBtn').click(function(event){

                $.ajax({
                    url: 'process/startElection.php',
                    type: 'GET',
                success: function(data){
                      alert('Election has started!');
                      // console.log(data);
                      // $('.giveUrl').html(data);                    
                    }
                  })
            });
});
</script>
  


</body>
</html>

