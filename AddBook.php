<?php
    $book_title = $_POST["book_title"];
    $category_id = $_POST["category_id"];
    $author = $_POST["author"];
    $book_copies = $_POST["book_copies"];
    $publisher = $_POST["publisher"];
    $publisher_name = $_POST["publisher_name"];
    $isbn = $_POST["isbn"];
    $copyright_year = $_POST["copyright_year"];
    $date_receive = $_POST["date_receive"];
    $date_added = $_POST["date_added"];
    $status = $_POST["status"];
    $conn = new mysqli("localhost","root","","piñoylibrary");
    if($conn->connect_error){
        echo "Failed to connect";
        exit();
    }
    $sql = "SELECT MAX(Book_ID) as max_id FROM book";
    $MaxID_query = $conn->query($sql);
    while($row = $MaxID_query->fetch_array()){
    $NewID = (int)$row[0] + 1;
    }
    $stmt = $conn->prepare("INSERT INTO book(Book_id,Title,Category_ID,Author,Copies,Publisher,Publisher_Name,ISBN ,Copyright_Year,Date_Receive,Date_Added,Status) Values(?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("isisisssisss",$NewID,$book_title,$category_id,$author,$book_copies,$publisher,$publisher_name,$isbn,$copyright_year,$date_receive,$date_added,$status);
    $stmt->execute();
    header("location: librarypage.php?addbook=InsertComplete");
?>