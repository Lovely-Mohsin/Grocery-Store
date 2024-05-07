<?php
require_once "./db-con.php";
require_once "./includes/helpers.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $category = $_POST['category'];
    $category_id = $_POST['id'];

    if(empty($_FILES['new_image']['name'])){
        
        $name = $_POST['old_image'];
  
    }

    else{
        
        $data = uploadImage("categories" , $_FILES['new_image'] , 3 );

        if($data['errors'] == false){

            $name = $data['result'];
        }
    }

    $update_qry = "UPDATE `categories` SET `category` = '$category' , `image` = '$name' WHERE `id`= '$category_id'";
    $result = mysqli_query($con,$update_qry);

    if ($result) {

        $_SESSION['success'] = "Category has been Updated successfully...!";
        header("Location:categories.php");
    } else {
        $_SESSION['error'] = "Category has not been updated...!";
        header("Location:categories.php");
    }
}


?>