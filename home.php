<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Pet Lover</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description"> -->

    <!-- Favicon -->
    <link href="img/favicon.png" rel="icon">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="bg-white">
<?php
   include 'config.php';

   session_start();
   if (!isset($_SESSION['username'])){
    echo "<script>alert('Please Login first!')</script>";
    echo "<script>location.href='login.php'</script>";
   }
?>

    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row py-2 px-lg-4">
            <div class="col-lg-4">
                <a href="home.php" class="d-none d-lg-block">
                    <h1 class="m-0 text-capitalize text-decoration-none"><span class="text-dark"></span><span class="text-primary">Pet</span><span class="font-italic">Lover</span></h1>
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
    </div>
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
                    <a href="home.php" class="nav-item nav-link active">Home</a>
                    <a hidden href="login.php" class="nav-item nav-link">Log In</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Services</a>
                        <div class="dropdown-menu text-capitalize">
                        <a href="cat.php" class="dropdown-item">Cats</a>
                            <a href="dog.php" class="dropdown-item">Dogs</a>
                            <a href="example/index.php" class="dropdown-item">Pet Food</a>
                            <a href="petService.php" class="dropdown-item">Pet Care</a>
                        </div>
                    </div>
                    <a href="profile.php" class="nav-item nav-link">Profile</a>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                    <a href="about.html" class="nav-item nav-link">About</a>
                    <a href="logout.php" class="nav-item nav-link">Logout</a>                                                 <!-- style="position:relative; left:600px" navbar position change -->
                   
                    
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="blog-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-120" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <!-- <h4 class="text-primary m-0">Your Safety, Our Efforts</h4> -->
                        <h4 class="display-4 m-0 mt-2 mt-md-3 text-white">No matter how you’re feeling-</h4>
                        <!-- <a href="" class="btn btn-lg btn-primary mt-3 mt-md-4 px-4">Learn More</a> -->
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100"  src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <!-- <h4 class="text-primary m-0">Your Safety, Our Efforts</h4> -->
                        <h4 class="display-4 m-0 mt-2 mt-md-3 text-white">a little Pet gonna love you</h4>
                        <!-- <a href="" class="btn btn-lg btn-primary mt-3 mt-md-4 px-4">Learn More</a> -->
                    </div>
                </div>
            </div>

            <!-- carousel left btn -->
            <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
                <div class="btn btn-primary rounded-circle" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>

            <!-- carousel right btn -->
            <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
                <div class="btn btn-primary rounded-circle" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>

    <!-- DESIGN -->

    <div class="container-fluid mt-5">
    <div class="bg-dark p-5 mt-5 mb-5">
        <h1 class="text-white text-center">Our Services</h1>
    </div>

    <!-- Cats -->
    <!-- Cats -->
    <div class="row mt-5">
        <div class="col-lg-12 col-md-6 col-sm-6 ">

            <div class="d-flex">
                <div>
                    <img class="" src="image/catt.jpg" width="500" alt="cat">
                </div>
                <div>

                    <p class="text-black mx-5">See the different breeds of cats that we have for you guys including 
                        persian, mixed breed, and the <br>most common bengal cat. And dont miss out on the latest list of cats.<br>
                        Want to get the perfect furry friend to cuddle in your bed?
                    
                        <br>
                        See the different breeds of cats that we have for you guys including 
                        persian, <br>mixed breed, and the most common bengal cat. And dont miss out on the latest list of cats.<br>
                        Want to get the perfect furry friend to cuddle in your bed?<br>
                        Then click below right now and see if you can make a new friend today! <br>
                    </p>
                    <button class="btn btn-danger d-block mx-5 px-5 p-4"><a class="text-white" style="text-decoration:none ;" href="cat.php">View
                            Cats</a></button>

                </div>
            </div>
        </div>


    </div>
    <!-- Dogs -->

    <div class="row mt-5 row justify-content-end ">
        <div class="col-lg-10 col-md-6 col-sm-6">

            <div class="d-flex ">
                <div class="">
                    <div class="" style="float:right;" >
                    <p class="text-black mx-5  "  style="float:right;">See the different breeds of dogs that we have for you guys including 
                        Sarail, Labradail, German Shephard and the <br>most common deshi dogs. And dont miss out on the latest list of dogs.<br>
                        Want to get the perfect friend to keep you happy all day?
                    
                        <br>
                        See the different breeds of dogs that we have for you guys including 
                        Sarail, Labradail, German Shephard and the <br>most common deshi dogs. And dont miss out on the latest list of dogs.<br>
                        Want to get the perfect friend to keep you happy all day?
                    
                        <br>
                        Then click below and see the collection of dogs you can adopt! <br>
                    </p>
                    </div><br>
                    <button class="btn btn-danger d-block mx-5 px-5 p-4 " style="float:right;"><a class="text-white" style="text-decoration:none ;" href="dog.php">View Dogs</a></button>

                </div>
                <div class="d-block" style="float:right;">
                    <img class="" src="image/dog.jpg" width="500" alt="dog" >
                </div>
            </div>
        </div>
    </div>


    <!-- Pet Food -->
    <div class="row mt-5">
        <div class="col-lg-12 col-md-6 col-sm-6 ">

            <div class="d-flex">
                <div>
                    <img class="" src="image/petfood.jpg" width="500" alt="cat">
                </div>
                <div>

                    <p class="text-black mx-5">Increase Immunity and Prevention of Disease!! <br>
In every portion of food, you give to your pet, ensure there are enough vitamins and minerals in their food.<br>
 Minerals and vitamins keep your pet's metabolism and immune system functioning normally. 
                       
                       <br>
                     <br> Here order your wanted pet foods!
                    </p><br>
                    <button class="btn btn-danger d-block mx-5 px-5 p-4"><a class="text-white" style="text-decoration:none ;" href="example/index.php">View
                            Pet Food</a></button>

                </div>
            </div>
        </div>


    </div>

    <!-- Pet Care -->
    <div class="row mt-5 row justify-content-end ">
        <div class="col-lg-10 col-md-6 col-sm-6">

            <div class="d-flex ">
                <div class="">
                    <div class="" style="float:right;" >
                    <p class="text-black mx-5" style="float:right;">There are many health benefits of owning a pet. They can increase opportunities to exercise, get outside, and socialize. Regular <br> walking or playing with pets can decrease blood pressure, cholesterol levels, and triglyceride levels. <br> Pets can help manage loneliness and depression by giving us companionship.
                    </p>
                    </div><br><br>
                    <button class="btn btn-danger d-block mx-5 px-5 p-4 " style="float:right;"><a class="text-white"  style="text-decoration:none ;"href="petService.php">View Petcare</a></button>

                </div>
                <div class="d-block" style="float:right;">
                    <img class="" src="image/petcare.jpg" width="500" alt="cat" >
                </div>
            </div>
        </div>
    </div>
</div>










    <!-- Design end -->
  



   
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
            <div class="col-md-6 text-center text-md-right">
                
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