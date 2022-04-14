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
//check username and password
if(isset($_POST['login_button'])){ //when submit button is click
    $username = $_POST['username']; //get input in username
    $password = $_POST['password']; //get input in password

    $sql = "SELECT UserName, Password FROM users WHERE UserName = '$username'";
    $result = $conn->query($sql);

    if ($row = $result->fetch_assoc()){
        if ($password === $row["Password"]){
            header("location: librarypage.html?login=successful");
        }
        else{
            header("location: login_page.php?login=incorrectPassword");
        }
    }

    else{
        header("location: login_page.php?login=noUserFound");
    }
}

if (isset($_GET["login"])) {
    if ($_GET["login"] == "incorrectPassword") {
        echo "<script>alert('Incorrect Password!!');</script>"; 
    }
    else if ($_GET["login"] == "noUserFound") {
        echo "<script>alert('No User Found!!');</script>";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="librarypage.css">

<div class="modal">
    <div class="modal_content">
        <form action="" method="post">
            <h1>Login page</h1>
            Enter Username : <input class="input-fields" type="text" name="username" value="" placeholder="Enter username" required>
            <br><br><br><br>
            Enter password : <input class="input-fields" type="password" name="password" value="" placeholder="Enter password" required>
            <br><br><br><br>
            <button name="login_button" type="submit" value="login">Submit</button>
            <br><br>
        </form>
    </div>
</div>

</head>
</html>