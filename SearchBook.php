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

if(isset($_POST['submit_button'])){ //when submit button is click
    $book_title = $_POST['book_title']; //get input in book title

    $sql = "SELECT Title FROM Book WHERE Title = '$book_title'";
    $result = $conn->query($sql);

    if ($row = $result->fetch_assoc()){ //if book title input is found in database
            header("location: DisplayBook.html?Submit=successful");
    }

    else{
        header("location: SearchBook.php?Submit=noBookFound");
    }
}

if (isset($_GET["Submit"])) {
    if ($_GET["Submit"] == "noBookFound") {
        echo "<script>alert('No Book Found!!');</script>";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="librarypage.css">

<div class="modal">
    <div class="modal_content2">
        <form action="" method="post">
            <h1>Search For Book</h1>
            Enter Book Title : <input class="input-fields" type="text" name="book_title" value="" placeholder="Book Title" required>
            <br><br><br><br>
            <button name="submit_button" type="submit" value="Submit">Submit</button>
            <br><br><br><br>
            <button onclick='location="librarypage.html"'>Back</button>
        </form>
    </div>
</div>

</head>
</html>