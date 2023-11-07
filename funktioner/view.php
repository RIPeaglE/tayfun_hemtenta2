<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud_app";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = mysqli_query($conn,"SELECT * FROM Products");
$data = $result->fetch_all(MYSQLI_ASSOC);
?>

<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Description</th>
    <th>Price</th>
    <th>Image</th>
  </tr>
  <?php foreach($data as $row): ?>
  <tr>
    
    <td><?= htmlspecialchars($row['id']) ?></td>
    <td><?= htmlspecialchars($row['name']) ?></td>
    <td><?= htmlspecialchars($row['description']) ?></td>
    <td><?= htmlspecialchars($row['price']) ?></td>
    <td>
        <img src="image/<?= htmlspecialchars($row['image']) ?>" alt=<?= htmlspecialchars($row['image'])?> >
    </td>
  </tr>
  <?php endforeach ?>
</table>