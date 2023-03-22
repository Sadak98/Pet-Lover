<?php
include 'config.php';
$id = $_REQUEST['id'];
// echo $id;

$updateQuery ="UPDATE `pet_request` SET `approve`='accepted' WHERE id='$id'";


if(!mysqli_query($conn,$updateQuery)){
    echo "<script>alert('Accept Failed!')</script>";
    echo "<script>location.href='request.php'</script>";
}
else{
    echo "<script>alert('Request Accepted')</script>";
    
    echo "<script>location.href='petRequest.php'</script>";
}