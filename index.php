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
    <div class="container">
        <div class="row">
            <!-- Left Column (Product Form) -->
            <div class="col-md-6">
                <form action="" class="d-flex flex-column mb-3" method="POST" enctype="multipart/form-data">
                <input type="text" class="form-control" name="product" placeholder="Product name" required>
                <input type="text" class="form-control" name="description" placeholder="Description" required>
                <input type="number" class="form-control" name="price" placeholder="Price" required>
                <input type="file" class="form-control" name="image" accept="image/*" required>
                <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

            <!-- Right Column (Update Form) -->
            <div class="col-md-6">
                <form method="POST" enctype="multipart/form-data" class="d-flex flex-column mb-3" >
                    <input type="number" placeholder="Product ID" class="form-control" name="id" required>
                    <input type="number" placeholder="Price" class="form-control" name="newPrice">
                    <input type="file" placeholder="Image Link" class="form-control" name="newImage">
                    <button class="btn btn-danger" name="uppButton">
                        Update information
                    </button>
                </form>
                    <!-- php code to get variable of the form and include the uppdate file-->
                <?php
                   if (isset($_POST['uppButton'])){
                    $newPrice = $_POST['newPrice'];
                    $newImage = $_FILES['newImage']['name'];
                    $id = $_POST['id'];
                    include 'funktioner/edit.php';
                    } 
                ?>
                    
            </div>
        </div>

        <!-- Update Button Row -->
        <div class="row mt-3">
            <div class="col-12">
                <!-- Button for update without doing (CTRL + R), so it doesnt create a empty/same product -->
                <form method="post">
                    <button class="btn btn-primary w-100">
                        Update
                    </button>
                </form>    
            </div>
        </div>
    </div>

    <div>
        <?php
        // include the form so i we can see all the products in the tabell
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
<body>
</html>
