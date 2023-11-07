<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous" defer></script>
    <title>SQL</title>
</head>
<body>
    
    <h2>Fill the form</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="text" name="product" placeholder="name" required> 
        <input type="number" name="price" placeholder="price" required> 
        <input type="text" name="description" placeholder="description" required>
        <input type="file" name="image" accept="image/*" required/>
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
