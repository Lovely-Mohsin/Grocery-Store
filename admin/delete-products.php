<?php

include("./db-con.php");

$id = $_GET['id'];

if(!empty($id)){

    $delete_product_qry = "DELETE FROM products WHERE id = $id";
    $delete_product_qry_run = mysqli_query($con,$delete_product_qry);
    if($delete_product_qry_run){
        session_start();
        $_SESSION['delete-msg'] = "Operation Performed Successfully...!";
        header("Location:products.php");
    }
}

?>

