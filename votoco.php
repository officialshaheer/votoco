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
  box-shadow: 5px 3px 10px #666;
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
</style>
</head>
<body>

<?php

$servername = "localhost";
$username   = "root";
$password   = "";

$conn = new mysqli($servername, $username, $password);
$sql = 'CREATE DATABASE votoco1';
if ($conn->query($sql)) {
    echo "Database my_db created successfully\n";
    $sql2 = "CREATE table votoco1.users(id varchar(2))";
    if ($conn->query($sql2)) {
        echo "doneee";
    } else {
        echo "error ";
    }
} else {
    echo 'Error creating database: ' . mysql_error() . "\n";
}
?>


<div class="limiter">
   <div class="content-new">
      <center>
         <br>
         <br>
         <br>
         <form>
            <div id="sysAllocation"  style="background-color:black;" class="answer_list" >
               <br>
               <h2> List of Nodes!</h2>
            </div>
            <div id="AddCandidate"  style="background-color:green;" class="answer_list">
               <br>
               <h2> Add Candidate</h2>
               <form id="myForm">
                 <table>
                  <tr>
                    <td>
                 <label>Candidate ID :</label></td><td><input type="text" id="c_id"><div style="color: white;" class="tikholder"></div>
                    </td>
                  </tr>
                  
                  <tr>
                    <td>
                 <label>Candidate Name :</label></td><td><input type="text" id="candidatename"><br>
                    </td>
                  </tr>
                  <tr>
                    <td>
                 <label>Candidate Department :</label></td><td><input type="text" id="can_department"><br>
                    </td>
                  </tr>
                  <tr>
                    <td>  
                 <label>Position :</label></td><td><input type="text" id="can_position"><br>
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
            </div>
            <div id="GrantRevoke"  style="background-color:green;" class="answer_list" >
               <br>
               <h2> Voters - Grant Revoke</h2>
            </div>
            <input id="myButton" type="button" name="login" value="System Allocation" onclick="showBox('sysAllocation')"><br><br>
            <input type="button" name="login" value="Adding Candidate" onclick="showBox('AddCandidate')"><br><br>
            <input type="button" name="login" value="Candidate Profile Update" onclick="showBox('ProfileUpdate')"><br><br>
            <input type="button" name="login" value="Voter - Grant & Revoke" onclick="showBox('GrantRevoke')">
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
      $('#addCandidateBtn').click(function(event){

                // event.preventDefault();
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

   });
  </script>


  


</body>
</html>

