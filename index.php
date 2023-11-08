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
            <!-- Left Column (Form) -->
            <div class="col-md-6">
                <div class="p-3 border border-primary">
                    <form method="POST" enctype="multipart/form-data" class="row gx-3 gy-2 align-items-center">
                        <div class="col-auto">
                            <input type="text" class="form-control" name="product" placeholder="Product name">
                        </div>
                        <div class="col-auto">
                            <input type="text" class="form-control" name="description" placeholder="Description">
                        </div>
                        <div class="col-auto">
                            <input type="number" class="form-control" name="price" placeholder="Price">
                        </div>
                        <div class="col-auto">
                            <input type="file" class="form-control" name="image" accept="image/*">
                        </div>
                        <div class="col-auto">
                            <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Right Column (Content) -->
            <div class="col-md-6">
            <form action="" class="d-flex flex-column mb-3" method="POST" enctype="multipart/form-data">
                    <input type="number" placeholder="Product ID" class="form-control" name="updateID" required>
                    <input type="number" placeholder="Price" class="form-control" name="newPrice">
                    <input type="file" placeholder="Image Link" class="form-control" name="newImage">
                    <button class="btn btn-danger" name="uppButton">
                        Uppdate information
                    </button>
                </form>
                    <!-- php code to get variable of the form and include the uppdate file-->
                <?php
                    $id = $_POST['updateID'];
                    $newPrice = $_POST['newPrice'];
                    $newImage = $_FILES['newImage']['name'];
                        // Check for a post from the button and then include the file
                    if ( isset($_POST['uppButton'])){
                        include 'funktioner/uppdate.php';
                    } 
                ?>
            </div>
        </div>

        <!-- Update Button Row -->
        <div class="row mt-3">
            <div class="col-12">
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
