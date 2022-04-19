<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="librarypage.css">



<div class="modal">
    <div class="center">
        <h1>
            Library Webpage
        </h1>
        <div class="btn-1">
            <a href="AddBook.html"><span>Add Book</span></a>
        </div>
        <br><br><br><br>
        <div class="btn-1">
            <a href="AddMem.html"><span>Add Member</span></a>
        </div>
        <br><br><br><br>
        <div class="btn-1">
            <a href="SearchBook.php"><span>Search Book</span></a>
        </div>
        <br><br><br><br>
        <div class="btn-1">
            <a href="SearchMem.php"><span>Search Member</span></a>
        </div>
        <br><br><br><br>
        <div class="btn-1">
            <a href="SearchBorrowDetails.php"><span>Search Details</span></a>
        </div>
        <br><br><br><br>
        <div class="btn-1">
            <a href="login_page.php"><span>Logout</span></a>
        </div>
    </div> 
</div>


<?php 
if (isset($_GET["addbook"])) {
    if ($_GET["addbook"] == "InsertComplete") {
        echo "<script>alert('Item Succesfully added 😊');</script>";
    }
}

if (isset($_GET["addmem"])) {
    if ($_GET["addmem"] == "InsertComplete") {
        echo "<script>alert('Item Succesfully added 😊');</script>";
    }
}
?>
</head>
</html>