<?php

require_once("./db-con.php");
require_once("./auth.php");

$user_id = $_GET['id'];
echo "$user_id";
exit;
if (!empty($user_id)) {
    $query = "SELECT * FROM users WHERE id = '$user_id'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Edit User</title>

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
        <div class="row">
            <div class="col-md-4">
            <h3> <i class="fa fa-edit text-success"></i> Edit User</h3>
            </div>
            <div class="col-md-8">
            <?php
        if(!empty($_SESSION['send'])){
        $msg = $_SESSION['send'];
        echo "<div class='alert alert-success alert-dismissible fade show CredErr'>
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span>
        </button> <strong>Congratulations!</strong> $msg</div>";
        unset($_SESSION['send']);
        }
        ?>
            </div>
            </div>
            <hr>

            <div class="d-flex justify-content-end">
                <a href="./view-user.php" class="btn btn-success text-white"><i class="fa fa-eye"></i> View User</a>
            </div>

            <div class="form-container">
                <form action="./update-profile.php" method="POST" enctype="multipart/form-data" class="row">
                <input type="hidden" value="<?= $row['id'] ?>" name="id">
                    <div class="col-lg-4 mb-2">
                        <label class="form-label" for="name">Name <span class="text-danger">*</span>
                        </label>
                        <input type="text" class="form-control" id="name" value="<?= $row['name'] ?>" name="name" placeholder="Enter here..." required>
                    </div>


                    <div class="col-lg-4 mb-2">
                        <label class="form-label" for="email">Email <span class="text-danger">*</span>
                        </label>
                        <input type="email" class="form-control" value="<?= $row['email'] ?>" name="email" placeholder="Enter here..." required>
                    </div>



                    <div class="col-lg-4 ">
                        <label class="form-label" >Mobile No <span class="text-danger">*</span>
                        </label>
                        <input type="text" class="form-control" value="<?= $row['mobile'] ?>" name="mobile" placeholder="Enter here..." required>
                    </div>


                    <div class="col-lg-4 mb-2">
                        <label class="form-label" for="image">Image <span class="text-danger">*</span>
                        </label>
                        <input type="file" class="form-control" id="image" name="image" placeholder="Enter here..." required>
                    </div>
                    <div class="col-lg-4 mb-2">
                        <label class="form-label" for="val-username">Password <span class="text-danger">*</span>
                        </label>
                        <input type="password" class="form-control" name="password" placeholder="Enter here..." required>
                    </div>
                    <div class="col-lg-4 mb-2">
                        <label class="form-label" for="val-username">Address <span class="text-danger">*</span>
                        </label>
                        <input type="text" class="form-control" name="address" placeholder="Enter here..." required>
                    </div>
                    <div class="col-lg-12 mb-2">
                        <label class="form-label" for="val-username">Description <span class="text-danger">*</span>
                        </label>
                        <input type="text" class="form-control" name="description" placeholder="Enter here..." required>
                    </div>


                    <div class="offset-8 col-lg-4 mb-2">
                        <label for=""></label>

                        <button class="btn btn-success text-white btn-lg mt-2 w-100"> <i class="fa fa-edit"></i> Update User</button>
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

<script>
        $(document).ready(function() {
            setTimeout(function() {
                $(".CredErr").hide();
            }, 3000);

        })
    </script>