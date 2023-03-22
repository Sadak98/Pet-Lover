<?php


$admin_name = "admin";
$admin_pass = "1234";

session_start();
if(isset($_SESSION['a_name'] ,$_SESSION['a_pass'])){
   
}

else{
    
    if($_POST['a_name']==$admin_name && $_POST['a_pass']==$admin_pass){
        $_SESSION['a_name']=$admin_name;
        echo "<script>location.href='adminProfile.php'</script>";
    }
    else{
        echo "<script>alert('Invalid user')</script>";
        echo "<script>location.href='adminLogin.php'</script>";

    }
 }
