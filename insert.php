<?php
include 'config.php';


$r_name = $_POST['r_name'];
$r_email = $_POST['r_email'];
$r_mobile = $_POST['r_mobile'];
$r_pass = $_POST['r_pass'];
$r_con_pass = $_POST['r_con_pass'];
$p_image = $_FILES['r_image'];




$imageLocation = $p_image['tmp_name'];
$imageName = $p_image['name'];

//dynamically image name change howar jonno
$image_des = "image/".$imageName;

//method

move_uploaded_file($imageLocation,$image_des);


    $emailPattern = "/[a-z]+[0-9]+(@gmail.com/)";
    $mobilePattern = "/(\+88-|\+88)?01[3-9]\d{8}/";
    $passPattern = "/((?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[!@#$%&])).{8,20}/ ";

    $duplicate_username = mysqli_query($conn,"SELECT * FROM `register` WHERE username='$r_name'");


 if(strlen($r_name)<3 || strlen($r_name)>20){
     echo "<script>alert('3-20 char username is allowed!')</script>";
     echo "<script>location.href='reg.php'</script>";
 }
 else if(!preg_match($emailPattern,$r_email)){
     echo "<script>alert('Invalid email!')</script>";
     echo "<script>location.href='reg.php'</script>";
 }

 if(!preg_match($mobilePattern,$r_mobile)){
    echo "<script>alert('Invalid mobile number!')</script>";
    echo "<script>location.href='reg.php'</script>";
}

else if(!preg_match($passPattern,$r_pass)){
    echo "<script>alert('Invalid Password!')</script>";
    echo "<script>location.href='reg.php'</script>";
}

else if($r_pass!==$r_con_pass){
    echo "<script>alert('Password not matched!')</script>";
    echo "<script>location.href='reg.php'</script>";
}

else if(mysqli_num_rows($duplicate_username)>0){
    echo "<script>alert('Username already taken!')</script>";
    echo "<script>location.href='reg.php'</script>";
}
else{
    $insert_query = "INSERT INTO `register`(`username`, `email`, `pass`,`mobile`,`image`) VALUES ('$r_name','$r_email','$r_pass','$r_mobile','$image_des')";

    if(!mysqli_query($conn,$insert_query)){
        die("Process Unseccusful!Try again");}
        else{
            
            echo "<script>location.href='login.php'</script>";
        }
    
}