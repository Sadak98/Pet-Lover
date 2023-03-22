<?php

include 'config.php';

session_start();
if (isset($_SESSION['username']))              
    $abc = $_SESSION['username'];
   
    


  


$id = $_REQUEST['id'];
// pet
$dataFetchQuery = "SELECT * FROM `admin_upload` WHERE id='$id'";
$record = mysqli_query($conn,$dataFetchQuery);
$data = mysqli_fetch_array($record);

$name=$data['pet_name'];
// $age=$data['pet_age'];
// $breed=$data['pet_breed'];
// $loc=$data['p_loc'];
// $gender=$data['p_gender'];
$type=$data['p_type'];
$image=$data['p_image'];



// user
$dataFetchQuery = "SELECT * FROM `register` WHERE username='$abc'";
$recordd = mysqli_query($conn,$dataFetchQuery);
$dataa = mysqli_fetch_array($recordd);

$username=$dataa['username'];
$usermobile=$dataa['mobile'];
$userimage=$dataa['image'];



$insert_query = "INSERT INTO `pet_request`(`username`, `mobile`, `userimage`, `p_name`, `p_type`, `p_image`) VALUES ('$username','$usermobile','$userimage','$name','$type','$image')";

if(!mysqli_query($conn,$insert_query)){
    die("Request not sent!");}
    else{
        echo "<script>alert('Request Sent Successfully!')</script>";
        echo "<script>location.href='cat.php'</script>";
    }




?>

