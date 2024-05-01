<?php

include("./db-con.php");

$id = $_GET['id'];

if(!empty($id)){

    $delete_category_qry = "DELETE FROM categories WHERE id = $id";
    $delete_category_qry_run = mysqli_query($con,$delete_category_qry);
    if($delete_category_qry_run){
        $delete_product_qry = "DELETE FROM products WHERE category_id = $id";
        $delete_product_qry_run = mysqli_query($con,$delete_product_qry);
        if($delete_product_qry_run){
        session_start();
        $_SESSION['message'] = "Operation Performed Successfully...!";
        header("Location:categories.php");
        }
    }
}

?>

