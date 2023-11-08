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
<!-- html table to for the style and show the data -->
<table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Product</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Image</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
        <?php foreach($data as $row): ?>
          <tr style="vertical-align: middle;">
            <th scope="row"><?= htmlspecialchars($row['id']) ?></th>
            <td><?= htmlspecialchars($row['name']) ?></td>
            <td><?= htmlspecialchars($row['description']) ?></td>
            <td><?= htmlspecialchars($row['price']) ?></td>
            <td>
              <img src="image/<?= htmlspecialchars($row['image']) ?>" alt=<?= htmlspecialchars($row['image'])?> height="65px" width="65px">
            </td>
            <td> 
              <!-- button for deleting data -->
              <form method="POST">
                <button type="submit" name="delete" value="<?= htmlspecialchars($row['id']) ?>" class="btn btn-danger">Delete</button>
              </form>
            </td>
          </tr>
          <?php endforeach ?>
          <?php
            $id = $_POST['delete'];
              if( isset($_POST['delete'])){
                include 'funktioner/delete.php';
              }
            ?>
        </tbody>
</table>