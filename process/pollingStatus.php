<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "votoco";

$conn = new mysqli($servername,$username,$password,$dbname);

    $sql1 = "SELECT count(id) from voterslist where voting_permission = 'GRANTED' ";
    $count = mysqli_query($conn,$sql1);
    $oldrow = mysqli_fetch_array($count)[0];
    $product = $oldrow * 50;
    $p_product = $oldrow * 10;

    $sql   = "SELECT count(id) from voterslist where voting_status = 'TRUE' ";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result)[0];
    $newprod = $row * 50;
    $p_newprod = $row * 10;

    $progress = ( $row / $oldrow ) * 100 ;

    echo "<b><p><center>POLLING STATUS</center></p>";
    echo "<div class='barGraphvalues' style='width:".$product."px;height:3%;color:white;color:black;position:fixed;background-color:#f5f5f5;border-radius:30px;text-align: right;box-shadow:inset 0 1px 2px rgba(0,0,0,0.1);'>100%</div>";
    echo "<div class='barGraphcount' data-width='".$newprod."' style='height:3%;color:white;position:fixed;background-color:green;border-radius:30px;text-align: left;box-shadow:inset 0 1px 2px rgba(0,0,0,0.1)'>".$progress."%</div>";
?>
