<?php
include 'config.php';

// if (isset($_SESSION['username'])) 
// $l_username = $_SESSION['username'];

if(isset($_POST['submit'])){
    $gp_name = $_POST['gp_name'];
    // $b_type = $_POST['v_type'];
    $b_date = $_POST['b_date'];

    $insert_query = "INSERT INTO `grooming`(`gp_name`, `b_date`) VALUES (' $gp_name',' $b_date')";

    if(!mysqli_query($conn,$insert_query)){
        die("Not Inserted to DB!");}
        else{
            echo "<script>alert('Uploaded Succcessfully !')</script>";
            echo "<script>location.href='petService.php'</script>";
        }
    }


?>