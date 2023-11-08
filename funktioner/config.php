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

        // // Create database
        // $sql = "CREATE DATABASE crud_app";
        // if (mysqli_query($conn, $sql)) {
        // echo "Database created successfully";
        // } else {
        // echo "Error creating database: " . mysqli_error($conn);
        // }
        // mysqli_close($conn);

        // Create Table 
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