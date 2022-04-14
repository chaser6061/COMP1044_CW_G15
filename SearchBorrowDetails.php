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
    $book_ID = $_POST['book_ID']; //get input in book ID
    $borrow_ID = $_POST['borrow_id']; //get input in borrow ID

    $sql = "SELECT Book_ID, Borrow_ID FROM borrowdetails WHERE Book_ID = '$book_ID' AND Borrow_ID = '$borrow_ID' ";
    $result = $conn->query($sql);

    if ($row = $result->fetch_assoc()){ //if book title input is found in database
            header("location: UpdateBorrowDetails.html?Submit=successful");
    }

    else{
        header("location: SearchBorrowDetails.php?Submit=noBorrowDetailsFound");
    }
}

if (isset($_GET["Submit"])) {
    if ($_GET["Submit"] == "noBorrowDetailsFound") {
        echo "<script>alert('No Borrow Details Found!!');</script>";
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
            <h1>Search Borrow Details</h1>
            Enter Book ID : <input class="input-fields" type="number" name="book_ID" value="" placeholder="Book ID" min="1" required>
            <br><br><br><br>
            Enter Borrow ID : <input class="input-fields" type="number" name="borrow_id" value="" placeholder="Category ID" min="1" required>
            <br><br><br><br>
            <button name="submit_button" type="submit" value="Submit">Submit</button>
            <br><br><br><br>
            <button onclick='location="librarypage.html"'>Back</button>
        </form>
    </div>
</div>

</head>
</html>