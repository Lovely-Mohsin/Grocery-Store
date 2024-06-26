<?php
require_once("./db-con.php");
require_once("./auth.php");

$category_id = $_GET['id'];
if (!empty($category_id)) {
    $query = "SELECT * FROM categories WHERE id = '$category_id'";
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
    <title>Category - Edit</title>

    <!-- css-links include -->
    <?php require_once "./includes/css-links.php" ?>

</head>

<body>

    <!-- navbar include -->
    <?php require_once("./includes/navbar.php") ?>

    <!-- sidebar include -->
    <?php require_once("./includes/sidebar.php") ?>

    <div class="content-body p-3">


        <!-- add category container -->
        <div class="container mt-3 bg-white p-4">
            <div class="row">
                <div class="col-md-6">
                    <h3> <i class="fa fa-edit text-success"></i> Edit Category</h3>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <img src="./images/categories/<?= $row['image'] ?>" class="" height="50px">
                </div>
            </div>
            <hr>

            <form action="./update-category.php" method="POST" enctype="multipart/form-data" class="row">

                <div class="col-lg-4">
                    <input type="hidden" value="<?= $row['id'] ?>" name="id">
                    <label class="form-label" for="val-username">Category <span class="text-danger">*</span>
                    </label>
                    <input type="text" class="form-control" value="<?= $row['category'] ?>" name="category">
                </div>


                <div class="col-lg-4">
                    <label class="form-label" for="userimage">Category Image <span class="text-danger">*</span>
                    </label>
                    <input type="file" class="form-control" id="userimage" name="new_image" accept="image/*">
                    <input type="hidden" class="form-control" value="<?= $row['image'] ?>" id="userimage" name="old_image" accept="image/*" required>
                </div>


                <div class="col-lg-4">
                    <label for=""></label>

                    <button class="btn btn-success text-white btn-lg mt-2 w-100"><i class="fa fa-edit"></i> Update Category</button>
                </div>

            </form>
        </div>







    </div> <!--*** Main wrapper end *****-->

    <!-- footer include -->
    <?php require_once("./includes/footer.php")  ?>

    <!-- javascript links include -->
    <?php require_once("./includes/javascript-links.php")  ?>




    <script>
        $(document).ready(function() {
            setTimeout(function() {
                $(".uploadingErr").hide();
            }, 3000);

        })

        $(document).ready(function() {
            setTimeout(function() {
                $(".credErr").hide();
            }, 3000);

        })
    </script>


</body>

</html>