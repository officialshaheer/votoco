
<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "votoco";

$conn = new mysqli($servername,$username,$password,$dbname);

if(isset($_POST['system_hash'])){            
    $system_hash = $_POST['system_hash'];
    $pass  = $_POST['pwd'];

    $sql = "SELECT node_status,permission from systemlist WHERE system_hash = '$system_hash' ";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    $status = $row['node_status'];
    $permission = $row['permission'];

    if($status=='not_active'&&$permission=='TRUE') {
        $sql   = "SELECT * from systemlist where system_hash = '$system_hash' and pwd = '$pass' ";
        if ($conn->query($sql)->num_rows) {
            echo json_encode(array('success' => true, "message"=>"login to node is success"));
            $sql = "UPDATE systemlist set node_status = 'active' where system_hash = '$system_hash' ";
            mysqli_query($conn,$sql);
        }
        else {
            echo json_encode(array('success' => false, "message"=>"Invalid credentials"));    
        }
    }
    elseif($status=='active'&&$permission=='TRUE') {
        echo json_encode(array('success' => false, "message"=>"This system is already logged in"));
    }else{
        echo json_encode(array('success' => false, "message"=>"Your system is not allocated to vote"));
    }

}
?>