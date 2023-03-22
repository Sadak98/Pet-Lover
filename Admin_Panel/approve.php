<?php
include 'config.php';
$id = $_REQUEST['id'];
// echo $id;

$updateQuery ="UPDATE `petdetails` SET `approved`='approved' WHERE id='$id'";

if(!mysqli_query($conn,$updateQuery)){
    echo "<script>alert('Not updated!')</script>";
    echo "<script>location.href='adminPanel.php'</script>";
}
else{
    // echo "<script>alert('Updated Succsfully!')</script>";
    
    echo "<script>location.href='adminPanel.php'</script>";
}