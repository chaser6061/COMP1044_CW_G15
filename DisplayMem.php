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

if(isset($_POST['submit_search_mem'])){ //when submit button is click
    $member_ID = $_POST['MemberID']; //get input in book title

    $sql = "SELECT * FROM member WHERE MemberID = '$member_ID'";
    $result = $conn->query($sql);

    if ($row = $result->fetch_assoc()){ //if member ID input is found in database
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="librarypage.css">
<!--
    In this page, we can fulfill 3 of the function requirement at once, search for member, update member and delete member
    When user input the correct data in SearchMem.html, it will bring the user to this page. We can use php to display the member's 
    value here. For example if user type 52 in member ID in SearchMem.html, When we reach this page, we can use php to display the info of
    member whose ID is 52. So in the Update First Name section, it will display Mark. same goes for the others. If user wanna update the member
    details like changing member ID 52's first name from "Mark" to "Joe", just simply rename it from "Mark" to "Joe" in the input. Hit submit
    and it will run php to update it on sql. The delete button is simple, just hit it, run the php, remove it from sql, then bring the user back
    to main page and that's it
-->

<div class="modal">
    <div class="modal_content2">
        <form action="" method="post">
            <h1>Display Member Details</h1>
            <h2>Change the values if you want to update member, else click back to return</h2>
            Choose which one to Update : <br><br><br><br>
            Update First Name : <input class="input-fields" type="text" name="FirtsName" value="<?php echo $row['FirstName'] ?>" required>
            <br><br><br><br>
            Update Last Name : <input class="input-fields" type="text" name="LastName" value="<?php echo $row['LastName'] ?>" required>
            <br><br><br><br>
            Update Gender :
            <input type="radio" name="Gender" value="Male" <?php if ($row['Gender'] == "Male") {echo "checked";} ?> required>Male
            <input type="radio" name="Gender" value="Female" <?php if ($row['Gender'] == "Female") {echo "checked";} ?> required>Female
            <br><br><br><br>
            Update Address : <input class="input-fields" type="text" name="address" value="<?php echo $row['Address'] ?>" required>
            <br><br><br><br>
            Update Contact Number : <input class="input-fields" type="tel" name="contact" value="<?php echo $row['Contact'] ?>" required>
            <br><br><br><br>
            Update Type :
            <input type="radio" name="Type" value="Student" <?php if ($row['Type'] == "Student") {echo "checked";} ?> required>Student
            <input type="radio" name="Type" value="Teacher" <?php if ($row['Type'] == "Teacher") {echo "checked";} ?> required>Teacher
            <br><br><br><br>
            Update Year Level :
            <input type="radio" name="yearlevel" value="First Year" <?php if ($row['YearLevel'] == "First Year") {echo "checked";} ?> required>First Year
            <input type="radio" name="yearlevel" value="Second Year" <?php if ($row['YearLevel'] == "Second Year") {echo "checked";} ?> required>Second Year
            <input type="radio" name="yearlevel" value="Third Year" <?php if ($row['YearLevel'] == "Third Year") {echo "checked";} ?> required>Third Year
            <input type="radio" name="yearlevel" value="Forth Year" <?php if ($row['YearLevel'] == "Forth Year") {echo "checked";} ?> required>Forth Year
            <input type="radio" name="yearlevel" value="Faculty" <?php if ($row['YearLevel'] == "Faculty") {echo "checked";} ?> required>Faculty
            <br><br><br><br>
            Update Status : 
            <input type="radio" name="status" value="Active" <?php if ($row['Status'] == "Active") {echo "checked";} ?> required>Active
            <input type="radio" name="status" value="Banned" <?php if ($row['Status'] == "Banned") {echo "checked";} ?> required>Banned
            <br><br><br><br>
            <button name="submit_button" type="submit" value="Submit">Submit</button> <!--to update-->
            <br><br>
            <button name="delete_button" type="submit" value="Delete">Delete</button> <!--to delete-->
            <br><br>
        </form>
        <button onclick='location="SearchMem.php"'>Back</button>
    </div>
</div>
<?php 
    }//closing bracket for line 21

    else{
        header("location: SearchMem.php?Submit=noMemberFound");
    }
}//closing bracket for line 15
?>
</head>
</html>