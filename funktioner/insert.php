<?php  
// include the config.php file to get connected to the Database
include "funktioner/config.php";
// inserts new products to the db
$sql = "INSERT INTO Products (`name`,`description`, `price`, `image`)
VALUES ('$product', '$description', '$price', '$image')";

if ($conn->query($sql) === TRUE) {
// echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
// moves the images to the local "image folder"
if(isset($_FILES['image'])){
    move_uploaded_file($_FILES['image']['tmp_name'], "image/". $_FILES['image']['name']);
}
?>