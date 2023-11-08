<?php
include "funktioner/config.php";
// deletes the product from the db
$sql = "DELETE FROM Products WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();

?>