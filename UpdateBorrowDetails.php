<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "piñoylibrary";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// check connection
if ($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}

if(isset($_POST['update_borrow_details_button'])){
    $bookid = $_GET['bookid']; //book ID entered in SearchBorrowDetails.php
    $borrowid = $_GET['borrowid']; //borrow ID entered in SearchBorrowDetails.php

    $borrow_status = $_POST['borrow_status'];
    $date_return = $_POST['date_return'];

    $sql = "UPDATE borrowdetails SET 
            Borrow_Status = '$borrow_status',
            Date_Return = '$date_return'
            WHERE Book_ID = '$bookid' AND Borrow_ID = $borrowid";
    $result = $conn->query($sql);

    if ($result === TRUE){
        header("location: SearchBorrowDetails.php?updated=updateComplete");
        exit();
    }
    else {
        header("location: SearchBorrowDetails.php?error=sqlfailed");
        exit();
    } 
}
?>