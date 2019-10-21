<?php session_start();


$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "outpass";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if(isset($_POST['outpassSubmit'])){
    $date = $_POST['date'];
    $contact = $_POST['contact'];
    $whereto = $_POST['whereto'];
    $reason = $_POST['reason'];
    
    $regno = $_SESSION['regno'];
    $firstname = $_SESSION['firstname'];
    $lastname = $_SESSION['lastname'];
    $branch = $_SESSION['branch'];
    $year = $_SESSION['year'];
    $rollno = $_SESSION['rollno'];
    
    $sql = "Insert into outpassDB(regno, firstname, lastname, branch, year, rollno, contact, date, reason, whereto, hod, type) values ( $regno, '$firstname', '$lastname', '$branch', '$year', $rollno, $contact, '$date', '$reason', '$whereto', 0, 'outpass')";
    
    mysqli_query($conn, $sql);
    sleep(2);
    
    header("location:../dashboard/studentDashboard.php");

}



?>