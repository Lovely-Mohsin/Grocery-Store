<?php require_once("./auth.php");
require_once "./includes/helpers.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Orders - Ogani</title>

    <!-- css-links include -->
    <?php require_once("./includes/css-links.php") ?>

</head>

<body>

    <!-- navbar include -->
    <?php require_once("./includes/navbar.php") ?>

    <!-- sidebar include -->
    <?php require_once("./includes/sidebar.php") ?>
    <!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body">
        <?php
        if ($_SESSION['user_role'] === 'admin') {
            echo "<div class='row page-titles mx-0'>
                <div class='col p-md-0'>
                    <ol class='breadcrumb'>
                        <a href='./add-user.php'><button type='button' class='btn mb-1 btn-success mr-2'>Add Admin</button></a>
                        <a href='./view-user.php'><button type='button' class='btn mb-1 btn-success'>View Admin</button></a>
                    </ol>
                </div>
            </div>";
        }
        ?>
        <!-- row -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center d-flex flex-column mb-4">
                                <div class="">
                                    <img class="mx-auto mb-3 rounded rounded-circle" src="./images/user/<?= $_SESSION['user_image'] ?>" width="100" height="100" alt="">
                                </div>
                                <div class="media-body">
                                    <h3 class="mb-0"><?= $_SESSION['user_name'] ?></h3>
                                </div>
                            </div>

                            <h4>About Me</h4>
                            <p class="text-muted"><?= $_SESSION['user_description'] ?></p>
                            <ul class="card-profile__info">
                                <li class="mb-2"><strong class="text-dark mr-4">Mobile</strong> <?= $_SESSION['user_mobile'] ?></li>
                                <li><strong class="text-dark mr-4">Email</strong> <?= $_SESSION['user_email'] ?></li>
                            </ul>
                            <div class="row my-2">
                                <div class="col-12 text-center">
                                    <button class="btn btn-danger mt-2 px-5">Edit Profile <i class="fa fa-edit"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <!-- Show Data in table -->
                    <div class="card-body">
                        <h3>View All Orders</h3>
                        <div class="table-responsive">
                            <table class="table table-striped table-success table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Customer_Id</th>
                                        <th>Grand Total</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>300</td>
                                        <td>Pending</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>

        <!-- footer include -->
        <?php require_once("./includes/footer.php")  ?>

        <!-- javascript links include -->
        <?php require_once("./includes/javascript-links.php")  ?>
</body>

</html>