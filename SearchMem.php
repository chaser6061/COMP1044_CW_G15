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
            <button onclick='location="librarypage.php"'>Back</button>
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

if (isset($_GET["updated"])) {
    if ($_GET["updated"] == "updateComplete") {
        echo "<script>alert('Profile Updated!');</script>";
    }
}

if (isset($_GET["error"])) {
    if ($_GET["error"] == "UpdateSqlFailed") {
        echo "<script>alert('update sql failed!');</script>";
    }
    else if ($_GET["error"] == "DeleteSqlFailed"){
        echo "<script>alert('delete sql failed!');</script>";
    }
}

if (isset($_GET["delete"])) {
    if ($_GET["delete"] == "deleteComplete") {
        echo "<script>alert('Record deleted successfully!');</script>";
    }
}

?>