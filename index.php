<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>SQL</title>
</head>
<body>
    <!--
      TODO: 
      1. Make a form with this layout ["PRODUCT" - "DESCRIPTION" - "PRICE" - "ADD IMAGE"] and a sumbit button
      2. When the sumbit button is pressed the data that have been filed will be added to the mysql table and will be shown under the input form in this format ["PRODUCT IMG" - "PRODUCT NAME" - "PRICE" - "DESCRIPTION"], next to the products there will be a edit button.
      3. Delete button. You will be able to checkbox the items you want to delete (if im to late i will just add the delete button next to the edit button in the table)
    -->
    <h2>Form</h2>
    <form action="" method="POST">
        <input type="text" name="product" placeholder="name"> 
        <input type="number" name="price" placeholder="price"> 
        <input type="text" name="desc" placeholder="description">
        <input type="file" name="images" accept="image/*" />
        <input type="submit" name="submit" value="submit">
    </form>
    </body>
    </html>

    <?php
        include "config.php";
    ?>
    <?php
        $product = $_POST['product'];
        $desc = $_POST['desc'];
        $price = $_POST['price'];
        $images = $_POST['images']; 
        if (isset($_POST['submit'])){
            include 'funktioner/insert.php';
        }
    ?> 

    
</body>
</html>