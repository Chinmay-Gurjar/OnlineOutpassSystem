<?php


$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "outpass";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if(isset($_GET['jdpermit']))
{
$id=$_GET['id'];
$sql2 = "update outpassDB set warden=1 WHERE id=$id";
mysqli_query($conn, $sql2);    
$sql1 = "update outpassDB set jdstatus=1 WHERE id=$id";
mysqli_query($conn, $sql1);
sleep(0.5);
    header("location:../dashboard/hod-leave.php");
}


if(isset($_GET['jddeny']))
{
$id=$_GET['id'];
$sql1 = "update outpassDB set jdstatus=0 WHERE id=$id";
mysqli_query($conn, $sql1);
sleep(0.5);
    header("location:../dashboard/hod-leave.php");
}

 ?>