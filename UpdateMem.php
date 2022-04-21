<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// check connection
if ($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}

if(isset($_POST['update_mem_button'])){
    $mid = $_GET['mid']; //member ID entered in SearchMem.php

    $FirtsName = $_POST['FirtsName'];
    $LastName = $_POST['LastName'];
    $Gender = $_POST['Gender'];
    $Address = $_POST['address'];
    $contact = $_POST['contact'];
    $Type = $_POST['Type'];
    $YearLevel = $_POST['yearlevel'];
    $status = $_POST['status'];

    $sql = "UPDATE member SET 
            FirstName = '$FirtsName',
            LastName = '$LastName',
            Gender = '$Gender',
            Address = '$Address',
            Contact = '$contact',
            Type = '$Type',
            YearLevel = '$YearLevel',
            Status = '$status'
            WHERE MemberID = '$mid'";
    $result = $conn->query($sql);

    if ($result === TRUE){
        header("location: SearchMem.php?updated=updateComplete");
        exit();
    }
    else {
        header("location: SearchMem.php?error=UpdateSqlFailed");
        exit();
    } 
}
?>