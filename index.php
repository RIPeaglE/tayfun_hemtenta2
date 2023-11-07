<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>SQL</title>
</head>
<body>
    <h2>Form</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="text" name="product" placeholder="name"> 
        <input type="number" name="price" placeholder="price"> 
        <input type="text" name="description" placeholder="description">
        <input type="file" name="image" accept="image/*" />
        <input type="submit" name="submit" value="submit">
    </form>
        <div>
            <h1>Produkter</h1>
            <?php
                include 'funktioner/view.php';
            ?>
    </div>
    <?php
        include "config.php";
    ?>
    <?php
        $product = $_POST['product'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $image = $_FILES['image']['name']; 
        if (isset($_POST['submit'])){
            include 'funktioner/insert.php';
        }
    ?> 

  



    
</body>
</html>