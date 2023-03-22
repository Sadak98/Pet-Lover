<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="profile.css">


    <!-- <meta charset="utf-8">
    <title>Pet Lover - Adopt Your Favourite Pet</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description"> -->

    <!-- Favicon -->
    <!-- <link href="img/favicon.ico" rel="icon"> -->

    <!-- Font Awesome -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet"> -->

    <!-- Flaticon Font -->
    <!-- <link href="lib/flaticon/font/flaticon.css" rel="stylesheet"> -->

    <!-- Libraries Stylesheet -->
    <!-- <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet"> -->

    <!-- Customized Bootstrap Stylesheet -->
    <!-- <link href="css/style.css" rel="stylesheet"> -->


     



   
</head>


<body bg-dark>




    <!-- Topbar Start -->


    <!-- <div class="container-fluid">
        <div class="row py-2 px-lg-4">
            <div class="col-lg-4">
                <a href="" class="d-none d-lg-block">
                    <h1 class="m-0 text-capitalize"><span class="text-dark"></span><span class="text-primary">Pet</span><span class="font-italic">Lover</span></h1>
                </a>
            </div>
            <div class="col-lg-8 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <div class="d-inline-flex flex-column text-center px-3 border-right">
                        <h6>Email Us</h6>
                        <p class="m-0" style="color:red ;">petlover@gmail.com</p>
                    </div>
                    <div class="d-inline-flex flex-column text-center pl-3">
                        <h6>Call Us</h6>
                        <p class="m-0" style="color: red;">+88011111111</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->


    <!-- Topbar End -->

    <!-- Navbar Start -->

    <div class="container-fluid p-0 nav-bar">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark py-0">
            <a href="" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-5 text-capitalize font-italic text-white"><span class="text-primary">Pet</span>Lover</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav m-auto py-4">
                <a href="home.php" class="nav-item nav-link">Home</a>
                    <a href="login.php" class="nav-item nav-link">Log In</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Services</a>
                        <div class="dropdown-menu text-capitalize">
                            <a href="petFood.php" class="dropdown-item">Pet Food</a>
                            <a href="petService.php" class="dropdown-item">Pet Care</a>
                        </div>
                    </div>
                    <a href="profile.php" class="nav-item nav-link active">Profile</a>
                    <!-- <a href="petRequest.php" class="nav-item nav-link active">Request</a> -->
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                    <a href="about.html" class="nav-item nav-link">About</a>
                    <a href="logout.php" class="nav-item nav-link">Logout</a>
                    
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


<?php
              include 'config.php';


                    session_start();
              if (isset($_SESSION['username'])) {
                  $name = $_SESSION['username'];
                
                         }     
               else {
                   echo "<script>alert('Login to your account first!')</script>";
                   echo "<script>location.href='login.php'</script>";
              }
              


         // $l_username = $_POST['l_username'];
              $allData = mysqli_query($conn,"SELECT * FROM `register` WHERE username='$name'");
             

             //   row akare data ashbe
             while($row = mysqli_fetch_array($allData)){
                echo"
                
                <div class=' container-fluid mt-5'>
    
                <div class='row d-flex justify-content-center'>
                    
                    <div class=' col-md-7' style='background-color:#262626'>
                        
                        <div class='card p-3 py-4'>
                            
                            <div class='text-center'>
                          
                                <img src='$row[image]' width='150px'>
                            </div>
                            
                            <div class='text-center mt-3'>
                                
                                <!-- <span class='bg-secondary p-1 px-4 rounded text-white'>Profile</span> -->
        
                                <h5 class='mt-2 mb-0'>$row[username]</h5>
                                
                         
                                <span><h6 class='d-inline-block'>Email : </h6>$row[email]</span><br>
                                <span><h6 class='d-inline-block'>Mobile : </h6>$row[mobile]</span><br>
                                

                                
                              
                                 
                                
                                 <ul class='social-list'>
                                    <li><i class='fa fa-facebook'></i></li>
                                   
                                    <li><i class='fa fa-instagram'></i></li>
                                    
                                    
                                </ul>
                                
                                <div class='buttons'>
                                    
                                    <button class='btn btn-outline-primary px-4'><a href='uploadPet.php' style='color:white; text-decoration:none'>Upload Pet for Adoption</a></button>
                                    
                                </div>
                                
                                
                            </div>
                            
                           
                            
                            
                        </div>
                        
                    </div>
                    
                </div>
                
            </div>
        

                
                ";
               
             }
?>

  

<div class='container-fluid'>
    <h1 class="text-white text-center mt-5">Adopted Pets</h1>
       <?php
         include 'config.php';

            if (isset($_SESSION['username']))              
                $abc = $_SESSION['username'];
              
                // $l_username = $_POST['l_username'];
                //  $allData = mysqli_query($conn,"SELECT * FROM `pet_request` WHERE user ='$abc'");
                $allData = mysqli_query($conn,"SELECT * FROM `pet_request` WHERE username='$name' AND approve='accepted'");

             //   row akare data ashbe
                
                 
                
                
                    
 
                    while($row = mysqli_fetch_array($allData))
                    {
       echo"
                <div class='m-5 d-inline-block text-white'>
                    
                        <img class='img-fluid img-thumbnail mb-4' src='$row[p_image]'width='400px'>
                        <h5 class='text-center'>Pet Name : $row[p_name]</h5>
                        <h5 class='text-center'>Pet Type : $row[p_type]</h5>
                
                          
                </div>

                
           ";
        }
    ?>
     </div>




<!-- Footer Start -->
<div class="container-fluid  text-black mt-5 py-5 px-sm-3 px-md-5" style="background-color:#FFA500">
        <div class="row pt-5">
            <div class="col-lg-4 col-md-12 mb-5">
                <h1 class="mb-3 display-5 text-capitalize font-italic text-white"><span class="text-black">Pet</span><span class="font-italic">Lover</span></h1>
                <p class="m-0">Ipsum amet sed vero et lorem stet eos ut, labore sed sed stet sea est ipsum ut. Volup amet ea sanct ipsum, dolore vero lorem no duo eirmod. Eirmod amet ipsum no ipsum lorem clita ut. Ut sed sit lorem ea lorem sed, amet stet sit sea ea diam tempor kasd kasd. Diam nonumy etsit tempor ut sed diam sed et ea</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="text-primary mb-4"></h5>
                    </div>
                    <div class="col-md-4 mb-5">
                        <!-- <h5 class="text-primary mb-4">Quick Links</h5> -->
                        <h5 class="mb-4  font-italic text-white"><span class="text-black">Quick</span><span class="font-italic"> Links</span></h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-black mb-2" style="text-decoration:none" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-black mb-2" style="text-decoration:none" href="#"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                            <a class="text-black mb-2" style="text-decoration:none" href="#"><i class="fa fa-angle-right mr-2"></i>Our Services</a>
                            <a class="text-black mb-2" style="text-decoration:none" href="#"><i class="fa fa-angle-right mr-2"></i>Our Team</a>
                            <a class="text-black" style="text-decoration:none" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <!-- <h5 class="text-primary mb-4">Get In Touch</h5> -->
                        <h5 class="mb-4  font-italic text-white"><span class="text-black">Get In</span><span class="font-italic"> Touch</span></h5>
                        <p><i class="fa fa-map-marker-alt mr-2"></i>Lamabazar, VIP ROAD,Sylhet</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>+012 345 67890</p>
                        <p><i class="fa fa-envelope mr-2"></i>petlover@gmail.com</p>
                        <div class="d-flex justify-content-start mt-4">
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0 " style="width: 40px; height: 40px;" href="#"><i class="  fab fa-twitter"></i></a>
                            <a class=" btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="  fab fa-facebook-f"></i></a>
                            <a class=" btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class=" fab fa-linkedin-in"></i></a>
                            <a class="  btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class=" fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-3">
            <div class="col-md-6  mb-3 mb-md-0">
                <p class="m-0 text-white">
                    &copy; <a class="text-white font-weight-bold" style="text-decoration:none" href="#">Pet Lover</a>. All Rights Reserved. 
                    Designed by <a class="text-white font-weight-bold" style="text-decoration:none" href="#">Team LU</a>
                
                </p>
            </div>
            <div class="col-md-6 text-center text-md-right">
                <!-- <ul class="nav d-inline-flex">
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Privacy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Terms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Help</a>
                    </li>
                </ul> -->
            </div>
        </div>
    </div>
    <!-- Footer End -->

</body>
</html>