<?php
require_once "./db-con.php";
require_once "./includes/helpers.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $product = $_POST['name'];
    $unit_price = $_POST['unit_price'];
    $quantity = $_POST['quantity'];
    $despriction = $_POST['description'];
    $product_id = $_POST['id'];

    if(empty($_FILES['new_image']['name'])){
        
        $name = $_POST['old_image'];
  
    }

    else{
        
        $data = uploadImage("product" , $_FILES['new_image'] , 3 );

        if($data['errors'] == false){

            $name = $data['result'];
        }
    }

    $update_qry = "UPDATE `products` SET `name` = '$product' , `unit_price` = '$unit_price' , `quantity` = '$quantity', `description` = '$description' , `image` = '$name' WHERE `id`= '$product_id'";
    $result = mysqli_query($con,$update_qry);

    if ($result) {

        $_SESSION['success'] = "Product has been Updated successfully...!";
        header("Location:products.php");
    } else {
        $_SESSION['error'] = "Product has not been updated...!";
        header("Location:products.php");
    }
}


?>