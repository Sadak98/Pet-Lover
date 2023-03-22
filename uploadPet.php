<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pet Upload</title>
    <link href="img/favicon.png" rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="profile.css">
      <!-- Customized Bootstrap Stylesheet -->
      <!-- <link href="css/style.css" rel="stylesheet"> -->
    <style>
        form {
            background: #fff;
            padding: 15px;
            box-shadow: 0px 0px 10px 0px;
            border-radius: 10px;
        }
    </style>
</head>

<body>
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
                    <a hidden href="login.php" class="nav-item nav-link">Log In</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Services</a>
                        <div class="dropdown-menu text-capitalize">
                            <a href="petFood.php" class="dropdown-item">Pet Food</a>
                            <a href="petService.php" class="dropdown-item">Pet Care</a>
                        </div>
                    </div>
                    <a href="profile.php" class="nav-item nav-link">Profile</a>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                    <a href="about.html" class="nav-item nav-link">About</a>
                    
                </div>
            </div>
        </nav>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center mt-5">
        <div class="col-lg-4 col-md-6 col-sm-12">
                <form action="detailAction.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3 text-center" style="color:orange">
                        <h3>Pet Details</h3>
                    </div>
                   
                            <div class="mb-3">
                                Pet Name :
                                <input type="text" class="form-control" name="p_name" required>
                            </div>

                            <div class="mb-3">
                                Pet Age :
                                <input type="text" class="form-control" name="p_age" required>
                            </div>
                        
                       
                            <div class="mb-3">
                                Pet Breed :
                                <input type="text" class="form-control" name="p_breed" required>
                            </div>

                            <div class="mb-3">
                                Pet Sex :
                                <input type="text" class="form-control" name="p_sex" required>
                            </div>
                      
                            <div class="mb-3">
                                Pet Image :
                                <input type="file" class="form-control" name="p_image"required>
                            </div>

                            <div class="mb-3">
                                Username :
                                <input type="text" class="form-control" name="user" required>
                            </div>
                       
                       
                            <div class="mb-3">
                                User Mobile :
                                <input type="text" class="form-control" name="u_mobile" required>
                            </div>

                            <div class="mb-3">
                                Location :
                                <input type="text" class="form-control" name="u_loc" required>
                            </div>
                     
                  
                            
                      


                    <button type="submit" class="btn btn-primary col-12" name="login">Send</button>




                    </div>
                    </div>
                    </div>
                </form>

            </div>
        </div>
    </div>



     <!-- Footer Start -->
<!-- <div class="container-fluid  text-black mt-5 py-5 px-sm-3 px-md-5" style="background-color:#FFA500">
        <div class="row pt-5">
            <div class="col-lg-4 col-md-12 mb-5">
                <h1 class="mb-3 display-5 text-capitalize font-italic text-white"><span class="text-black">Pet</span><span class="font-italic">Lover</span></h1>
                <p class="m-0">Never Leave Your Pets Behind.</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="text-primary mb-4"></h5> -->
                        <!-- <div class="d-flex flex-column justify-content-start">
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Services</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Team</a>
                            <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div> -->
                    <!-- </div>
                    <div class="col-md-4 mb-5"> -->
                        <!-- <h5 class="text-primary mb-4">Quick Links</h5> -->
                        <!-- <h5 class="mb-4  font-italic text-white"><span class="text-black">Quick</span><span class="font-italic"> Links</span></h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-black mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-black mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                            <a class="text-black mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Services</a>
                            <a class="text-black mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Team</a>
                            <a class="text-black" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5"> -->
                        <!-- <h5 class="text-primary mb-4">Get In Touch</h5> -->
                        <!-- <h5 class="mb-4  font-italic text-white"><span class="text-black">Get In</span><span class="font-italic"> Touch</span></h5>
                        <p><i class="fa fa-map-marker-alt mr-2"></i>123 Street, New York, USA</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>+012 345 67890</p>
                        <p><i class="fa fa-envelope mr-2"></i>info@example.com</p>
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
            <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">
                    &copy; <a class="text-white font-weight-bold" href="#">Pet Lover</a>. All Rights Reserved. 
                    Designed by <a class="text-white font-weight-bold" href="contact.html">Team PetLover</a>
                </p>
            </div>
            <div class="col-md-6 text-center text-md-right"> -->
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
            <!-- </div>
        </div>
    </div> -->
    <!-- Footer End -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>

</html>