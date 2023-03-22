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
      <!-- Customized Bootstrap Stylesheet -->
      <!-- <link href="css/style.css" rel="stylesheet"> -->
    <style>
        form {
            /* background: #fff; */
            padding: 15px;
            box-shadow: 0px 0px 10px 0px;
            border-radius: 10px;
        }
    </style>
</head>

<body>


     <!-- Navbar Start -->
     <!-- <div class="container-fluid p-0 nav-bar bg-gray">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark py-0">
            <a href="" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-5 text-capitalize font-italic text-gray"><span class="text-primary">Pet</span>Lover</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav m-auto py-4">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="login.php" class="nav-item nav-link">Log In</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Services</a>
                        <div class="dropdown-menu text-capitalize">
                            <a href="blog.html" class="dropdown-item">Pet Food</a>
                            <a href="single.html" class="dropdown-item">Pet Care</a>
                        </div>
                    </div>
                    <a href="profile.php" class="nav-item nav-link">Profile</a>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                    <a href="about.html" class="nav-item nav-link">About</a>
                    
                </div>
            </div>
        </nav>
    </div> -->




    <div class="container-fluid">
        <div class="row justify-content-center mt-5">
        <div class="col-lg-4 col-md-6 col-sm-12">
                <form action="../uploadAction.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3 text-center" style="color:dark">
                        <h3>Pet Details</h3>
                    </div>
                   
                            <div class="mb-3">
                                Pet Name :
                                <input type="text" class="form-control" name="p_name">
                            </div>

                            <div class="mb-3">
                                Pet Age :
                                <input type="text" class="form-control" name="p_age">
                            </div>
                        
                       
                            <div class="mb-3">
                                Pet Breed :
                                <input type="text" class="form-control" name="p_breed">
                            </div>
                            <div class="mb-3">
                                Pet Location :
                                <input type="text" class="form-control" name="p_loc">
                            </div>

                            <div>

                            Pet Gender :
                            <select name="p_gender" class="form-control">
                                <option value="">Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                </select>

                            </div>

                            <div>

                            Pet Type :
                            <select name="p_type" class="form-control">
                                <option value="">Select Type</option>
                                <option value="Cat">CAT</option>
                                <option value="Dog">DOG</option>
                               </select>

                            </div>
                          
                               

                            
                            <div class="mb-3">
                                Pet Image :
                                <input type="file" class="form-control" name="p_image" required>
                            </div>

                           
                       
<!--                         
                            <div class="mb-3">
                                User Facebook :
                                <input placeholder="Copy & paste your facebook id link" type="text" class="form-control" name="u_fb">
                            </div>
                       
                            <div class="mb-3">
                                User Mobile :
                                <input type="text" class="form-control" name="u_mobile">
                            </div>

                            <div class="mb-3">
                                Location :
                                <input type="text" class="form-control" name="u_loc">
                            </div> -->
                     
                  
                            
                      


                    <button type="submit" class="btn btn-dark col-12" name="login">Upload</button>




                    </div>
                    </div>
                    </div>
                </form>

            </div>
        </div>
    </div>







<!-- Footer Start -->
<div class="container-fluid  text-black mt-2 py-2 px-sm-2 px-md-5" style="background-color:#212529">
        <div class="row pt-5">
            <div class="col-lg-4 col-md-12 mb-5">
                <h1 class="mb-3 display-5 text-capitalize font-italic text-white"><span>Pet</span><span class="font-italic">Lover</span></h1>
            </div>
            
        </div>
        <div class="row pt-1">
            <div class="col-md-6  mb-3 mb-md-0">
                <p class="m-0 text-white">
                    &copy; <a class="text-white font-weight-bold" style="text-decoration:none" href="#">Pet Lover</a>. All Rights Reserved. 
                    Designed by <a class="text-white font-weight-bold" style="text-decoration:none" href="#">Team LU</a>
                
                </p>
            </div>
            <div class="col-md-6 text-center text-md-right">
        
            </div>
        </div>
    </div>
    <!-- Footer End -->

</body>
</html>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>

</html>