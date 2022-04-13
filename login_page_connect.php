<?php
    function message($message){
        echo "<script type='text/javascipt'>alert($message)</script>";
    }
    $username_entered = $_GET["username_entered"];
    $password_entered = $_GET["password_entered"];
    $conn = new mysqli("localhost","root","","piñoylibrary");
    if($conn->connect_error){
        echo "Failed to Connect to Database";
        exit();
    }
    $sql = "SELECT * FROM users";
    $users_table = $conn -> query($sql);
    $password = "";
    $username = "";
    $login = false;
    while($row = $users_table -> fetch_assoc()){
        if($row["UserName"] == $username_entered && $row["Password"] == $password_entered){
            $login = true;
        }

    }
    if(!$login){
        message("Incorrect Username or Password!");

    }
    else {
        include "mainpage.html";
    }

?>