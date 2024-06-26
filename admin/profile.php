<?php require_once("./auth.php");
require_once "./includes/helpers.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Profile - Ogani</title>

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
            if($_SESSION['user_role'] === 'admin'){
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
                                    <img class="mx-auto mb-3 rounded rounded-circle" src="./images/user/<?= $_SESSION['user_image']?>" width="100" height="100" alt="">
                                    </div>
                                    <div class="media-body">
                                        <input type="hidden" name="id" value="<?= $row['id'] ?>" id="">
                                        <h3 class="mb-0"><?= $_SESSION['user_name']?></h3>
                                    </div>
                                </div>
                           
                                <h4>About Me</h4>
                                <p class="text-muted"><?= $_SESSION['user_description']?></p>
                                <ul class="card-profile__info">
                                    <li class="mb-2"><strong class="text-dark mr-4">Mobile</strong> <?= $_SESSION['user_mobile']?></li>
                                    <li><strong class="text-dark mr-4">Email</strong> <?= $_SESSION['user_email']?></li>
                                </ul>
                                <div class="row my-2">
                                <div class="col-12 text-center">
                                    <a href="./edit-profile.php<?php $_SESSION['user_id']?>"><button class="btn btn-danger mt-2 px-5">Edit Profile <i class="fa fa-edit"></i></button></a>
                                </div>
                            </div>
                            </div>
                        </div>  
                    </div>
                    <div class="col-lg-7 col-xl-8">
                        <div class="card">
                            <div class="card-body">
                                <form action="#" class="form-profile">
                                    <div class="form-group">
                                        <textarea class="form-control" name="textarea" id="textarea" cols="30" rows="2" placeholder="Post a new message"></textarea>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <ul class="mb-0 form-profile__icons">
                                            <li class="d-inline-block">
                                                <button class="btn btn-transparent p-0 mr-3"><i class="fa fa-user"></i></button>
                                            </li>
                                            <li class="d-inline-block">
                                                <button class="btn btn-transparent p-0 mr-3"><i class="fa fa-paper-plane"></i></button>
                                            </li>
                                            <li class="d-inline-block">
                                                <button class="btn btn-transparent p-0 mr-3"><i class="fa fa-camera"></i></button>
                                            </li>
                                            <li class="d-inline-block">
                                                <button class="btn btn-transparent p-0 mr-3"><i class="fa fa-smile"></i></button>
                                            </li>
                                        </ul>
                                        <button class="btn btn-success px-3 ml-4">Send</button>
                                    </div>
                                </form>
                            </div>
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