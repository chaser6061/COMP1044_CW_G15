<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="librarypage.css">

<div class="modal">
    <div class="modal_content2">
        <form action="DisplayMem.php" method="post">
            <h1>Search For Member</h1>
            Enter Member ID : <input class="input-fields" type="text" name="MemberID" value="" placeholder="Member ID" required>
            <br><br><br><br>
            <button name="submit_search_mem" type="submit" value="Submit">Submit</button>
            <br><br><br><br>
            <button onclick='location="librarypage.html"'>Back</button>
        </form>
    </div>
</div>

</head>
</html>

<?php
if (isset($_GET["Submit"])) {
    if ($_GET["Submit"] == "noMemberFound") {
        echo "<script>alert('No Member Found!!');</script>";
    }
}

?>