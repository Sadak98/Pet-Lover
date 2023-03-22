<?php
include 'config.php';

// if (isset($_SESSION['username'])) 
// $l_username = $_SESSION['username'];

if(isset($_POST['submit'])){
    $v_before = $_POST['v_before'];
    $v_type = $_POST['v_type'];
    $v_date = $_POST['v_date'];

    $insert_query = "INSERT INTO `vaccine`(`v_before`, `v_type`, `v_date`) VALUES ('$v_before','$v_type','$v_date')";

    if(!mysqli_query($conn,$insert_query)){
        die("Not Inserted to DB!");}
        else{
            echo "<script>alert('Uploaded Succcessfully !')</script>";
            echo "<script>location.href='petService.php'</script>";
        }
    }


?>