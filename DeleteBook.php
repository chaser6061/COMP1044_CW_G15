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

if(isset($_POST['delete_button'])){
    $bid = $_GET['bid']; //book ID entered in SearchBook.php

    $sql = " DELETE FROM book WHERE Book_ID = '$bid'";
    $result = $conn->query($sql);

    if ($result === TRUE){
        header("location: SearchBook.php?delete=deleteComplete");
        exit();
    }
    else {
        header("location: SearchBook.php?error=sqlfailed");
        exit();
    } 
}
?>