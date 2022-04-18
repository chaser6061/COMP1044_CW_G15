<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="librarypage.css">

<div class="modal">
    <div class="modal_content2">
        <form action="DisplayBorrowDetails.php" method="post">
            <h1>Search Borrow Details</h1>
            Enter Book ID : <input class="input-fields" type="number" name="book_ID" value="" placeholder="Book ID" min="1" required>
            <br><br><br><br>
            Enter Borrow ID : <input class="input-fields" type="number" name="borrow_id" value="" placeholder="Category ID" min="1" required>
            <br><br><br><br>
            <button name="submit_search_borrowdetails" type="submit" value="Submit">Submit</button>
            <br><br><br><br>
            <button onclick='location="librarypage.php"'>Back</button>
        </form>
    </div>
</div>

</head>
</html>

<?php
if (isset($_GET["Submit"])) {
    if ($_GET["Submit"] == "noBorrowDetailsFound") {
        echo "<script>alert('No Borrow Details Found!!');</script>";
    }
}

if (isset($_GET["updated"])) {
    if ($_GET["updated"] == "updateComplete") {
        echo "<script>alert('Borrow Details Updated!');</script>";
    }
}

if (isset($_GET["error"])) {
    if ($_GET["error"] == "sqlfailed") {
        echo "<script>alert('sql failed!');</script>";
    }
}
?>