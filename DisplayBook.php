<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// check connection
if ($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}

if(isset($_POST['submit_search_book'])){ //when submit button is click
    $book_title = $_POST['book_title']; //get input in book title

    $sql = "SELECT * FROM Book WHERE Title = '$book_title'";
    $result = $conn->query($sql);

    if ($row = $result->fetch_assoc()){ //if book title input is found in database
    
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="librarypage.css">

<div class="modal">
    <div class="modal_content2">
        <form action="DeleteBook.php?bid=<?php echo $row['Book_ID'];?>" method="post">
            <h1>Display Book</h1>
            <p>Book ID : <?php echo $row['Book_ID']; ?></p>
            <p>Book title : <?php echo $row['Title']; ?></p>
            <p>Category ID : <?php echo $row['Category_ID'];?></p>
            <p>Author Names : <?php echo $row['Author'];?></p>
            <p>Amount of copies : <?php echo $row['Copies'];?></p>
            <p>Publisher : <?php echo $row['Publisher'];?></p>
            <p>Publisher Name : <?php echo $row['Publisher_Name'];?></p>
            <p>ISBN : <?php echo $row['ISBN']; ?></p>
            <p>Copyright Year : <?php echo $row['Copyright_Year']; ?></p>
            <p>Date Receive : <?php echo $row['Date_Receive']; ?></p>
            <p>Date Added : <?php echo $row['Date_Added']; ?></p>
            <p>Status : <?php echo $row['Status']; ?></p>
            <button name="delete_button" type="submit" value="Delete">Delete</button>
            <br><br>
        </form>
        <button onclick='location="SearchBook.php"'>Back</button>
    </div>
</div>
<?php 
    } //closing bracket for if statement in line 21

    else{
        header("location: SearchBook.php?Submit=noBookFound");
    }
} ?> <!--Closing bracket for if statement in line 15-->

</head>  
</html>