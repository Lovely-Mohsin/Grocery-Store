<!DOCTYPE html>
<html lang="zxx">

<head>

    <title>Customer | Profile</title>

    <!-- css links include -->
    <?php require_once("./includes/css-links.php") ?>

</head>

<body>
   
    <!-- header-section include -->
    <?php require_once("./includes/header.php") ?>

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Customer Profile</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Customer Profile</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center d-flex flex-column mb-4">
                                    <div class="">
                                    <img class="mx-auto mb-3 rounded rounded-circle" src="./images/fast-food.png" width="100" height="100" alt="">
                                    </div>
                                    <div class="media-body">
                                        <input type="hidden" name="id" value="<?= $row['id'] ?>" id="">
                                        <h3 class="mb-4">Muhammad Mohsin</h3>
                                    </div>
                                </div>

                                <p class="text-muted"></p>
                                <ul class="card-profile__info">
                                    <li class="mb-4 list-unstyled"><strong class="text-dark mr-4">Mobile</strong>03033333961 </li>
                                    <li class="mb-4 list-unstyled"><strong class="text-dark mr-4">Email</strong>pakistanmohsin969@gmail.com </li>
                                </ul>
                                <div class="row my-2">
                                <div class="col-12 text-center">
                                    <a href="./edit-profile.php<?php $_SESSION['user_id']?>"><button class="btn btn-danger mt-2 px-5">Edit Profile <i class="fa fa-edit"></i></button></a>
                                </div>
                            </div>
                            </div>
                        </div> 
                </div>
                <div class="col-md-8">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th >Products</th>
                                    <th>Order</th>
                                    <th>Status</th>
                                    <th>Total Price</th>
                                    <th>Total Items</th>
                                    <th>Order Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="">
                                        5666
                                    </td>
                                    <td class="">
                                        $55.00
                                    </td>
                                    <td class="">
                                        y878
                                    </td>
                                    <td class="">
                                        $110.00
                                    </td>
                                    <td class="">
                                        687
                                    </td>
                                    <td>12-2-2024</td>
                                </tr>
                           
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="index.php" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                    </div>
                </div>
              
               
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->

   
    <!-- footer include -->
    <?php require_once("./includes/footer.php") ?>

    <!-- javascript links include -->
    <?php require_once("./includes/javascript-links.php") ?>


</body>

</html>