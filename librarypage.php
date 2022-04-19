<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="librarypage.css">


<div class="modal">
    <div class = "modal_list">
        <h1 class = "space">
            Library Webpage
        </h1>

        <div class="space">
        <button class="block" onclick='location="AddBook.html"'>Add Book</button><br>
        </div>

        <div class="space">
        <button class="block" onclick='location="AddMem.html"'>Add Member</button><br>
        </div>

        <div class="space">
        <button class="block" onclick='location="SearchBook.php"'>Search Book</button><br> <!--contain DisplayBook, which can do delete book function-->
        </div>

        <div class="space">
        <button class="block" onclick='location="SearchMem.php"'>Search Member</button><br> <!--contain DisplayMem, which can do delete and update-->
        </div>

        <div class="space">
        <button class="block" onclick='location="SearchBorrowDetails.php"'>Search Borrow Details</button><br> <!--contain UpdateBorrowDetails, which can do delete-->
        </div>

        <div class="space">
        <button class="block" onclick='location="login_page.php"'>Logout</button><br>
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