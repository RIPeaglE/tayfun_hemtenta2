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
    <div class="p-3 m-0 border-0 bd-example m-0 border-0">
    <form method="POST" enctype="multipart/form-data" class="row gx-3 gy-2 align-items-center" >
      <div class="col-auto">
        <input type="text" class="form-control" name="product" placeholder="Product name">
      </div>
      <div class="col-auto">
        <input type="text" class="form-control" name="description" placeholder="Description">
      </div>
      <div class="col-auto">
        <input type="number" class="form-control" name="price" placeholder="price">
      </div>

      <div class="col-auto">
        <input type="file" class="form-control" name="image" accept="image/*">
      </div>
      <div class="col-auto">
        <button type="submit" name="submit" value="submit" class="btn btn-primary">submit</button>
      </div>
      <button class="btn btn-primary">
            Uppdate
        </button>
    </form>
        

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
</body>
</html>
