<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <!--
      TODO: 
      1. Make a form with this layout ["PRODUCT" - "DESCRIPTION" - "PRICE" - "ADD IMAGE"] and a sumbit button
      2. When the sumbit button is pressed the data that have been filed will be added to the mysql table and will be shown under the input form in this format ["PRODUCT IMG" - "PRODUCT NAME" - "PRICE" - "DESCRIPTION"], next to the products there will be a edit button.
      3. Delete button. You will be able to checkbox the items you want to delete (if im to late i will just add the delete button next to the edit button in the table)
    -->

    </div>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "crud_app";

        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }else{
            echo("Connection Successful");
        }

        // // Create database
        // $sql = "CREATE DATABASE crud_app";
        // if (mysqli_query($conn, $sql)) {
        // echo "Database created successfully";
        // } else {
        // echo "Error creating database: " . mysqli_error($conn);
        // }
        // mysqli_close($conn);

        // $sql = "CREATE TABLE Products (
        //     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        //     `name` VARCHAR(30) NOT NULL,
        //     `description` VARCHAR(30) NOT NULL,
        //     price VARCHAR(50),
        //     `image` VARCHAR(100)
        //     )";
        //     if ($conn->query($sql) === TRUE) {
        //       echo "Table Products created successfully";
        //     } else {
        //       echo "Error creating table: " . $conn->error;
        //     }
        
    ?>
</body>
</html>