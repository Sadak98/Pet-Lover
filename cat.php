<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Pet Lover-Cat</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.png" rel="icon">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <style>
        body{
            background-color: lightgray;
        }
    </style>
</head>

<body >
    
 <!-- Topbar Start -->
 <div class="container-fluid bg-dark">
        <div class="row py-2 px-lg-4">
            <div class="col-lg-4">
                <a href="" class="d-none d-lg-block">
                    <h1 class="m-0 text-capitalize text-decoration-none"><span ></span><span class="text-white" >Pet</span><span class="text-white">Lover</span></h1>
                </a>
            </div>
            <div class="col-lg-8 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <div class="d-inline-flex flex-column text-center px-3 border-right">
                        <h6 class="text-white">Email Us</h6>
                        <p class="m-0" style="color:red ;">petlover@gmail.com</p>
                    </div>
                    <div class="d-inline-flex flex-column text-center pl-3">
                        <h6 class="text-white">Call Us</h6>
                        <p class="m-0" style="color: red;">+88011111111</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0 nav-bar bg-dark ">
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
                    <!-- <a href="login.php" class="nav-item nav-link">Log In</a> -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown">Services</a>
                        <div class="dropdown-menu text-capitalize">
                        <a href="cat.php" class="dropdown-item active">Cats</a>
                            <a href="dog.php" class="dropdown-item">Dogs</a>
                            <a href="example/index.php" class="dropdown-item">Pet Food</a>
                            <a href="example/index.php" class="dropdown-item">Pet Care</a>
                        </div>
                    </div>
                    <a href="profile.php" class="nav-item nav-link">Profile</a>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                    <a href="about.html" class="nav-item nav-link">About</a>
                    <a href="logout.php" class="nav-item nav-link">Logout</a>
                    
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <br>
    <br>


    <div class="container-fluid mt-5 bg-gray">
    <h1 class="m-0 text-capitalize text-center" style="margin-top:40px;"><span class="text-dark"></span><span>Cats</span><span > For</span<span > Adoption</span></h1>

    </div>


        <div class='container-fluid'>
       <?php
         include 'config.php';
        //  session_start();
            if (isset($_SESSION['username']))              
                $abc = $_SESSION['username'];
               
              
                // $l_username = $_POST['l_username'];
                //  $allData = mysqli_query($conn,"SELECT * FROM `admin_upload` WHERE approved='approved' AND Pet_Name='cat'");
                $allData = mysqli_query($conn,"SELECT * FROM `admin_upload` WHERE p_type='cat' AND accept='' "); 
                
                // AND accept='accepted'


                //  $allData = mysqli_query($conn,"SELECT * FROM `admin_upload` WHERE p_type='cat' AND accept='' ");


             //   row akare data ashbe
                
                echo"
                
                
                    <div class='menu-header bg-gray text-center p-3'>
                        
                    </div>";
 
                    while($row = mysqli_fetch_array($allData))
                    {
       echo"
            
                <div class='m-5 d-inline-block border border-1 border-dark'>
                
                
                            <input type='hidden' value='$row[id]'>
                           
                           
                        <img class='img-fluid img-thumbnail' src='$row[p_image]'width='200px'>
                        <h5 class='text-center text-capitalize'>Pet Name:$row[pet_name]</h5>
                        <h5 class='text-center text-capitalize'>Pet Age:$row[pet_age]</h5>
                        <h5 class='text-center text-capitalize'>Breed:$row[pet_breed]</h5>
                        <h5 class='text-center text-capitalize'>Pet Sex:$row[p_gender]</h5>
                        <h5 class='text-center text-capitalize'>Location:$row[p_loc]</h5>
                        <button class='btn btn-danger d-block m-auto px-5 '><a href='sendreq.php?id=$row[id]' style='color:white; text-decoration:none'>Send Request</a></button>
                     
                          
                </div>

                
           ";
        }
            ?>
     </div>

 
 <!-- Footer Start -->
 <div class="container-fluid bg-secondary text-white mt-5 py-5 px-sm-3 px-md-5">
    <div class="row pt-5">
        <div class="col-lg-4 col-md-12 mb-5">
            <h1 class="mb-3 display-5 text-capitalize font-italic text-white"><span class="text-primary">Pet</span><span class="font-italic">Lover</span></h1>
            <p class="m-0">Our mission (and passion) is to provide every homeless pet the chance to do what they do best: give people snoopleboops.

                Special thanks to our partners, to whole project team, and voluntears, whose support makes our life-saving work possible.</p>
        </div>
        <div class="col-lg-8 col-md-12">
            <div class="row">
                <div class="col-md-4 mb-5">
                    <h5 class="text-primary mb-4"></h5>

                </div>
                <div class="col-md-4 mb-5">
                    <h5 class="text-primary mb-4">Quick Links</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-white mb-2" href="home.php"><i class="fa fa-angle-right mr-2"></i>Home</a>
                        <a class="text-white mb-2" href="about.html"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                        <a class="text-white" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h5 class="text-primary mb-4">Get In Touch</h5>
                    <p><i class="fa fa-map-marker-alt mr-2"></i>VIP Road, Lamabazar, Sylhet</p>
                    <p><i class="fa fa-phone-alt mr-2"></i>01710000000</p>
                    <p><i class="fa fa-envelope mr-2"></i>petlover@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row pt-3">
        <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
            <p class="m-0 text-white">
                &copy; <a class="text-white font-weight-bold" href="#">Pet Lover</a>. All Rights Reserved. 
                Designed by <a class="text-white font-weight-bold" href="#">Team NFS</a>
            </p>
        </div>

    </div>
</div>
<!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary border back-to-top"><i class="fa fa-angle-double-up"></i></a>


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
