<?php
include 'config.php';


$p_name = $_POST['p_name'];
$p_age = $_POST['p_age'];
$p_breed = $_POST['p_breed'];
$p_sex = $_POST['p_sex'];
$p_image = $_FILES['p_image'];
$u_fb = $_POST['u_fb'];
$u_mobile = $_POST['u_mobile'];
$u_loc = $_POST['u_loc'];
$user = $_POST['user'];

session_start();
if (isset($_SESSION['username']))
$r_usernames = $_SESSION['username'];
else {
    echo "<script>alert('Login to your account first!')</script>";
                  echo "<script>location.href='login.php'</script>";
}



$imageLocation = $p_image['tmp_name'];
$imageName = $p_image['name'];

//dynamically image name change howar jonno
$image_des = "image/".$imageName;

//method

move_uploaded_file($imageLocation,$image_des);
// echo $r_name.$r_email.$r_mobile.$r_pass.$r_con_pass.$image;
// echo $r_username.$r_pass.$_con_pass.$r_email.$r_mobile;

    // $emailPattern = "/[a-z]+[0-9]+@gmail\.com/";
    $mobilePattern = "/(\+88-|\+88)?01[3-9]\d{8}/";
    // $agePattern = "/[0-9]\d{2}/";
    $passPattern = "/((?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[!@#$%&])).{8,20}/ ";
// //same name user
//  $duplicate_username = mysqli_query($conn,"SELECT * FROM `register` WHERE username='$r_name'");


if(strlen($p_name)<3 || strlen($p_name)>20){
    echo "<script>alert('3-20 char username is allowed!')</script>";
    echo "<script>location.href='uploadPet.php'</script>";
}
// else if(!preg_match($emailPattern,$r_email)){
//     echo "<script>alert('Invalid email!')</script>";
//     echo "<script>location.href='providerReg.php'</script>";
// }
// else if(!preg_match($agePattern,$r_age)){
//     echo "<script>alert('Invalid Age!')</script>";
//     echo "<script>location.href='providerReg.php'</script>";
// }
//  if(!preg_match($mobilePattern,$r_mobile)){
//     echo "<script>alert('Invalid mobile number!')</script>";
//     echo "<script>location.href='providerReg.php'</script>";
// }
// else if(!preg_match($passPattern,$r_pass)){
//     echo "<script>alert('Invalid Password!')</script>";
//     echo "<script>location.href='providerReg.php'</script>";
// }
 else if($r_usernames!==$user){
     echo "<script>alert('username not matched!')</script>";
     echo "<script>location.href='uploadPet.php'</script>";
}


//duplicate name check
// else if(mysqli_num_rows($duplicate_username)>0){
//     echo "<script>alert('Username already taken!')</script>";
//     echo "<script>location.href='reg.php'</script>";
// }
else{
    $insert_query = "INSERT INTO `petdetails`(`Pet_Name`, `Pet_Age`, `Pet_Breed`, `Pet_Sex`, `Pet_Image`, `facebook`, `mobile`, `location`,`user`) VALUES ('$p_name','$p_age','$p_breed','$p_sex','$image_des','$u_fb','$u_mobile','$u_loc','$user')";

    if(!mysqli_query($conn,$insert_query)){
        die("Not Inserted to DB!");}
        else{
            // echo "<script>alert('Inserted to DB!')</script>";
            echo "<script>location.href='profile.php'</script>";
        }
    
}

?>