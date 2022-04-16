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

if(isset($_POST['submit_search_borrowdetails'])){ //when submit button is click
    $book_ID = $_POST['book_ID']; //get input in book ID
    $borrow_ID = $_POST['borrow_id']; //get input in borrow ID

    $sql = "SELECT * FROM borrowdetails WHERE Book_ID = '$book_ID' AND Borrow_ID = '$borrow_ID' ";
    $result = $conn->query($sql);

    if ($row = $result->fetch_assoc()){ //if book title input is found in database
        $datestr = date('Y-m-d\TH:i:s', strtotime($row['Date_Return'])); //by default, if null element, datetime will show 1970-01-01T01:00:00
        //to let webpage show empty datetime, we show the output in a variable $datestr, in line 43, if the datetime in database is empty, nothing 
        //will run, resulting in dd/mm/yyyy --:-- -- showing on webpage
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="librarypage.css">

<div class="modal">
    <div class="modal_content2">
        <form action="UpdateBorrowDetails.php?bookid=<?php echo $row['Book_ID'];?>&borrowid=<?php echo $row['Borrow_ID'];?>" method="post">
            <h1>Update Borrow Details</h1>
            <h2>Change the values if you want to update borrow details, else click back to return</h2>
            Choose which one to Update : <br><br><br><br>
            Update Borrow Status :
            <input type="radio" name="borrow_status" value="pending" <?php if ($row['Borrow_Status'] == "pending"){ echo "checked";} ?> required>pending
            <input type="radio" name="borrow_status" value="returned" <?php if ($row['Borrow_Status'] == "returned"){ echo "checked";} ?> required>returned
            <br><br><br><br>
            Update Date Return : <input class="input-fields" type="datetime-local" name="date_return" value="<?php 
                                  if ($datestr != "1970-01-01T01:00:00"){echo date('Y-m-d\TH:i:s', strtotime($row['Date_Return']));}  ?>" > 
                                  <!-- made date return input not required so that null value is accepted(when the book is pending, 
                                  date return should be null cause library haven't receive book yet) -->
            <br><br><br><br>
            <button name="update_borrow_details_button" type="submit" value="Submit">Submit</button>
            <br><br>
        </form>
        <button onclick='location="SearchBorrowDetails.php"'>Back</button>
    </div>
</div>
<?php
    }//end bracket for line 21

    else{
        header("location: SearchBorrowDetails.php?Submit=noBorrowDetailsFound"); 
    }
}//end bracket for line 15
?>
</head>
</html>