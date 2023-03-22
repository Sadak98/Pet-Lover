<?php
include 'config.php';
$id = $_REQUEST['id'];
// echo $id;

$updateQuery ="UPDATE `pet_request` SET `approve`='accepted' WHERE id='$id'";

if(!mysqli_query($conn,$updateQuery)){
    echo "<script>alert('Not updated!')</script>";
    echo "<script>location.href='adminProfile.php'</script>";
}
else{
    // echo "<script>alert('Provider is updated!')</script>";
    
    echo "<script>location.href='adminprofile.php'</script>";
}