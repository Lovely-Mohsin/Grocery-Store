<?php

// db connection

require_once "./db-con.php";



if($_SERVER['REQUEST_METHOD'] == 'POST'){

    // echo "<pre>"; print_r($_POST); echo "</pre>";
    // echo "<pre>"; print_r($_FILES); echo "</pre>";
    // exit;

        // // upload image
        // $data = uploadImage("customer", $_FILES['image']);

            // save info into 
            $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

            // echo $name;
            // exit;

            $query = "INSERT INTO `customers`(`name`, `email`, `password`, `address`, `mobile`) 
            VALUES ('$_POST[name]','$_POST[email]' ,'$password','$_POST[address]','$_POST[mobile]') ";
    
            if (mysqli_query($con, $query)) {
                header("Location:login.php");
            }

        

}


?>