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
    $member_ID = $_POST['MemberID']; //get input in book title

    $sql = "SELECT MemberID FROM member WHERE MemberID = '$member_ID'";
    $result = $conn->query($sql);

    if ($row = $result->fetch_assoc()){ //if member ID input is found in database
            header("location: DisplayMem.html?Submit=successful");
    }

    else{
        header("location: SearchMem.php?Submit=noMemberFound");
    }
}

if (isset($_GET["Submit"])) {
    if ($_GET["Submit"] == "noMemberFound") {
        echo "<script>alert('No Member Found!!');</script>";
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
            <h1>Search For Member</h1>
            Enter Member ID : <input class="input-fields" type="text" name="MemberID" value="" placeholder="Member ID" required>
            <br><br><br><br>
            <button name="submit_button" type="submit" value="Submit">Submit</button>
            <br><br><br><br>
            <button onclick='location="librarypage.html"'>Back</button>
        </form>
    </div>
</div>

</head>
</html>