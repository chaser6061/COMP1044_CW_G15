<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="librarypage.css">
<h1>
    Library Webpage
</h1>

<div class="container">
    <button onclick='location="login_page.php"'>Logout</button><br>
    <button onclick='location="AddBook.html"'>Click Here to Add Book</button><br>
    <button onclick='location="AddMem.html"'>Click Here to Add Member</button><br>
    <button onclick='location="SearchBook.php"'>Click Here to Search Book</button><br> <!--contain DisplayBook, which can do delete book function-->
    <button onclick='location="SearchMem.php"'>Click Here to Search Member</button><br> <!--contain DisplayMem, which can do delete and update-->
    <button onclick='location="SearchBorrowDetails.php"'>Click Here to Search Borrow Details</button> <!--contain UpdateBorrowDetails, which can do delete-->
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