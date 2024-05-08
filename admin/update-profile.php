<?php
require_once "./db-con.php";
require_once "./includes/helpers.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $user_name = $_POST['name'];
    $user_email = $_POST['email'];
    $user_mobile = $_POST['mobile'];
    $user_password = $_POST['password'];
    $user_address = $_POST['address'];
    $user_description = $_POST['description'];
    $user_id = $_POST['id'];

    if(empty($_FILES['new_image']['name'])){
        
        $name = $_POST['old_image'];
  
    }

    else{
        
        $data = uploadImage("user" , $_FILES['new_image'] , 3 );

        if($data['errors'] == false){

            $name = $data['result'];
        }
    }

    $update_qry = "UPDATE `users` SET `name` = '$user_name' , `email` = '$user_email',`mobile` = '$user_mobile',`password` = '$user_password',`address` = '$user_address' , `description` = '$user_description',`image` = '$name' WHERE `id`= '$user_id'";
    $result = mysqli_query($con,$update_qry);

    if ($result) {

        $_SESSION['success'] = "Profile has been Updated successfully...!";
        header("Location:profile.php");
    } else {
        $_SESSION['error'] = "Profile has not been updated...!";
        header("Location:profile.php");
    }
}


?>