<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pet Lover-Profile</title>
    <link href="img/favicon.png" rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="profile.css">

    <style>
        body{
            /* background-color: lightgray; */
            background-color: white;
        }
    </style>
   
</head>


<body>

    <!-- Navbar Start -->
    <div class="container-fluid p-0 nav-bar bg-dark">
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
                    <a hidden href="login.php" class="nav-item nav-link">Log In</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Services</a>
                        <div class="dropdown-menu text-capitalize">
                        <a href="cat.php" class="dropdown-item ">Cat</a>
                           <a href="dog.php" class="dropdown-item ">Dog</a>
                            <a hidden href="petFood.php" class="dropdown-item">Pet Food</a>
                            <a href="petCare.php" class="dropdown-item">Pet Care</a>
                        </div>
                    </div>
                    <a href="profile.php" class="nav-item nav-link active">Profile</a>
                    <!-- <a href="petRequest.php" class="nav-item nav-link ">Request</a> -->
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                    <a href="about.php" class="nav-item nav-link">About</a>
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
                  
                  //echo "<a href='product.php'>Product Page</a>";
                  //echo "<br><a href='logout.php'><input type='button' value='logout'></a>";
                  //include 'index.php';
                
              } else {
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
                    
                    <div class=' col-md-7'>
                        
                        <div class='card p-3 py-4 bg-dark text-white'>
                            
                            <div class='text-center'>
                          
                                <img src='$row[image]' width='150px'>
                            </div>
                            
                            <div class='text-center mt-3'>
        
                                <h5 class='mt-2 mb-0'>$row[username]</h5>
                                
                         
                                <span><h6 class='d-inline-block'>Email : </h6>$row[email]</span><br>
                                <span><h6 class='d-inline-block'>Mobile : </h6>$row[mobile]</span><br>
                                

                                
                                <div class='mt-2'>
                                    
                                    <button class='btn bg-light' type='button'><a href='uploadPet.php' style='color:black; text-decoration:none'>Give Pet to us</a></button>
                                    
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
    <h1 class="text-dark text-center mt-4">Adopted Pets</h1>
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
                <div class='m-5 d-inline-block text-dark bg-white'>
                    
                        <img class='img-fluid img-thumbnail mb-4' src='$row[p_image]'width='350px'>
                        <h5 class='text-center'>Pet Name : $row[p_name]</h5>
                        <h5 class='text-center'>Pet Type : $row[p_type]</h5>
                
                          
                </div>

                
           ";
        }
    ?>
     </div>




<!-- Footer Start -->
<div class="container-fluid  text-black mt-5 py-5 px-sm-3 px-md-5 bg-dark">
        <div class="row pt-5">
            <div class="col-lg-4 col-md-12 mb-5">
                <h1 class="mb-3 display-5 text-capitalize font-italic text-white"><span>Pet</span><span class="font-italic">Lover</span></h1>
                <p class="m-0 text-white">Our mission (and passion) is to provide every homeless pet the chance to do what they do best: give people snoopleboops.

Special thanks to our partners, to whole project team, and voluntears, whose support makes our life-saving work possible.</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="text-primary mb-4"></h5>
                    </div>
                    <div class="col-md-4 mb-5">
                        <!-- <h5 class="text-primary mb-4">Quick Links</h5> -->
                        <h5 class="mb-4  font-italic text-white"><span>Quick</span><span class="font-italic"> Links</span></h5>
                        <div class="d-flex flex-column justify-content-start ">
                            <a class="mb-2 text-white" style="text-decoration:none" href="home.php"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="mb-2 text-white" style="text-decoration:none" href="about.html"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                            <a class="text-white" style="text-decoration:none" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <!-- <h5 class="text-primary mb-4">Get In Touch</h5> -->
                        <h5 class="mb-4  font-italic text-white"><span>Get In</span><span class="font-italic"> Touch</span></h5>
                        <p class="text-white"><i class="fa fa-map-marker-alt mr-2 text-white"></i> VIP Road, Lamabazar, Sylhet</p>
                        <p class="text-white"><i class="fa fa-phone-alt mr-2 text-white"></i> 01710000000</p>
                        <p class="text-white"><i class="fa fa-envelope mr-2 text-white"></i> petlover@gmail.com</p>
                        <div class="d-flex justify-content-start mt-4">
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-3">
            <div class="col-md-6  mb-3 mb-md-0">
                <p class="m-0 text-white">
                    &copy; <a class="text-white font-weight-bold" style="text-decoration:none" href="#">Pet Lover</a>. All Rights Reserved. 
                    Designed by <a class="text-white font-weight-bold" style="text-decoration:none" href="#">Team NFS</a>
                
                </p>
            </div>
           
        </div>
    </div>
    <!-- Footer End -->


       <!-- JavaScript Libraries -->
       <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

</body>
</html>