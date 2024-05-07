<?php
require_once("./db-con.php");
require_once("./auth.php");

$product_id = $_GET['id'];
if (!empty($product_id)) {
    $query = "SELECT * FROM products WHERE id = '$product_id'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    }
}

//exit;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Edit Product</title>

    <!-- css-links include -->
    <?php require_once("./includes/css-links.php") ?>

</head>

<body>

    <!-- navbar include -->
    <?php require_once("./includes/navbar.php") ?>

    <!-- sidebar include -->
    <?php require_once("./includes/sidebar.php") ?>

    <div class="content-body p-3">




        <!-- view categories container -->
        <div class="container mt-3 bg-white p-4">
            <h3> <i class="fa fa-edit text-success"></i> Edit Products</h3>
            <hr>

            <div class="d-flex justify-content-end">
                <a href="products.php" class="btn btn-success text-white"><i class="fa fa-eye"></i> View Proudcts</a>
            </div>

            <div class="form-container">
                <form action="./update-product.php" method="POST" enctype="multipart/form-data" class="row">
                    <input type="hidden" value="<?= $row['id'] ?>" name="id">
                    <div class="col-lg-4 mb-2">
                        <label class="form-label" for="name">Name <span class="text-danger">*</span>
                        </label>
                        <input type="text" class="form-control" id="name" name="name" value="<?= $row['name'] ?>" placeholder="Enter here..." required>
                    </div>


                    <div class="col-lg-4 mb-2">
                        <label class="form-label" for="unit_price">Unit Price <span class="text-danger">*</span>
                        </label>
                        <input type="number" class="form-control" id="unit_price" name="unit_price" value="<?= $row['unit_price'] ?>" placeholder="Enter here..." required>
                    </div>


                    <div class="col-lg-4 ">
                        <label class="form-label" for="quantity">Quantity <span class="text-danger">*</span>
                        </label>
                        <input type="number" class="form-control" id="quantity" name="quantity" value="<?= $row['quantity'] ?>" placeholder="Enter here..." required>
                    </div>


                    <div class="col-lg-6 mb-2">
                        <label class="form-label" for="image">Image <span class="text-danger">*</span>
                        </label>
                        <input type="file" class="form-control" id="userimage" name="new_image" accept="image/*">
                    <input type="hidden" class="form-control" value="<?= $row['image'] ?>" id="userimage" name="old_image" accept="image/*" required>                    </div>

                    <div class="col-lg-6 mb-2">
                        <label class="form-label" for="val-username">Description <span class="text-danger">*</span>
                        </label>
                        <input type="text" name="description" class="form-control" value="<?= $row['description'] ?>" rows="5"></input>
                    </div>

                    <div class="offset-8 col-lg-4 mb-2">
                        <label for=""></label>
                        <button class="btn btn-success text-white btn-lg mt-2 w-100"> <i class="fa fa-edit"></i> Update Product</button>
                    </div>

                </form>
            </div>

        </div>

    </div> <!--*** Main wrapper end *****-->

    <!-- footer include -->
    <?php require_once("./includes/footer.php")  ?>

    <!-- javascript links include -->
    <?php require_once("./includes/javascript-links.php")  ?>




</body>

</html>