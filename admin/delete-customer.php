<?php

include("./db-con.php");

$id = $_GET['id'];

if(!empty($id)){

    $delete_customer_qry = "DELETE FROM customers WHERE id = $id";
    $delete_customer_qry_run = mysqli_query($con,$delete_customer_qry);
    if($delete_customer_qry_run){
        session_start();
        $_SESSION['message'] = "Operation Performed Successfully...!";
        header("Location:view-customers.php");
    }
}

?>

