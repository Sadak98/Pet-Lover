<?php
include 'config.php';
    $user = "fatin";
    //$total = $_GET['total'];

    if (isset($_GET['action'])){
        if ($_GET['action'] == "ordered"){
            //include 'orderDetails.php';

            $insert = "INSERT INTO `orders`( `i_name`) VALUES ('$user')";
        }
    }



?>