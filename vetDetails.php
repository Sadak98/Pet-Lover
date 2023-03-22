<?php
include 'config.php';

// if (isset($_SESSION['username'])) 
// $l_username = $_SESSION['username'];

if(isset($_POST['submit'])){
    $v_name = $_POST['v_name'];
    $v_issue = $_POST['v_issue'];
    $v_date = $_POST['v_date'];

    $insert_query = "INSERT INTO `vet`(`v_name`, `v_issue`, `v_date`) VALUES (' $v_name',' $v_issue', '$v_date')";

    if(!mysqli_query($conn,$insert_query)){
        die("Unsuccesful! Try again");}
        else{
            echo "<script>alert('Request sent successfully! Wait for admin to contact you')</script>";
            echo "<script>location.href='petService.php'</script>";
        }
    }


else{
    echo "<script>alert('You are not logged in! Please login first')</script>";
    echo "<script>location.href='login.php'</script>";
}

?>