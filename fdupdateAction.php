<?php
include 'config.php';
$id = $_REQUEST['id'];
// echo $id;

$Updatename = $_POST['f_name'];
$Updateprice = $_POST['f_price'];

$updateQuery ="UPDATE `fooddetails` SET `f_name`='$Updatename',`f_price`='$Updateprice' WHERE id='$id'";

if(!mysqli_query($conn,$updateQuery)){
    echo "<script>alert('Food Updated!')</script>";
    echo "<script>location.href='Admin_Panel/request.php'</script>";
}
else{
    // echo "<script>alert('Provider is updated!')</script>";
    echo "<script>location.href='Admin_Panel/request.php'</script>";
}