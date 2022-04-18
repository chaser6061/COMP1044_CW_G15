<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="librarypage.css">

<div class="modal">
    <div class="modal_content2">
        <form action="DisplayBook.php" method="post">
            <h1>Search For Book</h1>
            Enter Book Title : <input class="input-fields" type="text" name="book_title" value="" placeholder="Book Title" required>
            <br><br><br><br>
            <button name="submit_search_book" type="submit" value="Submit">Submit</button>
            <br><br><br><br>
            <button onclick='location="librarypage.php"'>Back</button>
        </form>
    </div>
</div>

</head>
</html>

<?php 
if (isset($_GET["Submit"])) {
    if ($_GET["Submit"] == "noBookFound") {
        echo "<script>alert('No Book Found!!');</script>";
    }
}

if (isset($_GET["delete"])) {
    if ($_GET["delete"] == "deleteComplete") {
        echo "<script>alert('Record deleted successfully!');</script>";
    }
}

if (isset($_GET["error"])) {
    if ($_GET["error"] == "sqlfailed") {
        echo "<script>alert('Error deleting record: ');</script>";
    }
}
?>