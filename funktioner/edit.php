<?php 
  // include the config.php file to get connected to the Database
include 'funktioner/config.php';
// Makes the price change
$sql = "UPDATE Products SET price = $newPrice WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo "Price updated successfully <br>";
} else {
  echo "<br> Error updating price: " . $conn->error;
}
// Makes so the img does changes
if(isset($_FILES['newImage'])){
  if ($_FILES['newImage']['error'] === UPLOAD_ERR_OK) {
    $newImage = $_FILES['newImage']['name'];
    move_uploaded_file($_FILES['newImage']['tmp_name'], "image/" . $newImage);
    $sqlImageUpdate = "UPDATE Products SET image = '$newImage' WHERE id=$id";

        // Checking if it worked or not
    if ($conn->query($sqlImageUpdate) === TRUE) {
      echo "Image updated successfully";
    } else {
      echo "Error updating image: " . $conn->error;
    }
  } else {
    echo "Error uploading image: " . $_FILES['newImage']['error'];
  }
}

$conn->close();
?>