<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin-Pet Lover</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../profile.css">
   
    <style>
        body{
            background-color: lightgray;
        }
    </style>
</head>


<body >

    <!-- Navbar Start -->
    <div class="container-fluid p-0 nav-bar bg-warning text-white">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-0">
            <a href="../home.php" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-5 text-capitalize font-italic text-white"><span class="text-primary">Pet</span>Lover</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav m-auto py-4">
                <a href="../home.php" class="nav-item nav-link">Home</a>
                    <a hidden href="login.php" class="nav-item nav-link">Log In</a>
                    <div class="nav-item dropdown">
                        <a hidden href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Services</a>
                        <div class="dropdown-menu text-capitalize">
                            <a href="petFood.php" class="dropdown-item">Pet Food</a>
                            <a href="petService.php" class="dropdown-item">Pet Care</a>
                        </div>
                    </div>
                    <a href="adminProfile.php" class="nav-item nav-link active">Profile</a>
                    <a href="../logout.php" class="nav-item nav-link">Logout</a>
                    
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->



    <div class=' container-fluid mt-5'>
    
    <div class='row d-flex justify-content-center'>
        
        <div class=' col-md-7'>
            
            <div class='card p-3 py-4 bg-dark text-white'>
                
                <div class='text-center'>
              
                    <img src='../img/Aprofile.jpg' width='300px'>
                </div>
                
                <div class='text-center mt-3'>
                    
                    <!-- <span class='bg-secondary p-1 px-4 rounded text-white'>Profile</span> -->

                    <h5 class='mt-2 mb-0'>Admin Profile</h5>
                    
             
                    <span><h6 class='d-inline-block'>Email :petlover@gmail.com </h6></span><br>
                    <span><h6 class='d-inline-block'>Mobile :+8801700000000 </h6></span><br>
                    

                    <div class='mt-2'>
                                    
                        <button class='btn bg-light' type='button'><a href='adminUpload.php' style='color:black; text-decoration:none'>Upload Pet</a></button>
                                    
                     </div>
        

                    
                    
                </div>
                </div>


                <div class=' d-flex justify-content-between my-4'>
                        
                                <button type="button" class="btn btn-outline-warning bg-dark"><a href='foodupload.php' class="navbar nav-link"  style='color:white; text-decoration:none'>Upload Food</a></button>

                                <button type="button" class="btn btn-outline-warning bg-dark"><a href='petDetails.php' class="navbar nav-link"  style='color:white; text-decoration:none'>Pet Details</a></button>

                                <button type="button" class="btn btn-outline-warning bg-dark"><a href='userDetails.php' class="navbar nav-link"  style='color:white; text-decoration:none'>User Details</a></button>

                                <button type="button" class="btn btn-outline-warning bg-dark"><a href='petRequest.php' class="navbar nav-link"  style='color:white; text-decoration:none'>Pet Requests</a></button>

                                <button type="button" class="btn btn-outline-warning bg-dark"><a href='orderDetails.php' class="navbar nav-link"  style='color:white; text-decoration:none'>Order</a></button>

                                <button type="button" class="btn btn-outline-warning bg-dark"><a href='foodDetails.php' class="navbar nav-link"  style='color:white; text-decoration:none'>Food Details</a></button>

                                <!-- <button type="button" class="btn btn-outline-warning bg-dark"><a href='foodOrder.php' class="navbar nav-link"  style='color:white; text-decoration:none'>Food Order</a></button> -->




                                
                                <!-- <button type="button" class="btn btn-outline-light">Light</button>
                                <button type="button" class="btn btn-outline-dark">Dark</button> -->
                    </div>
                
               
                
                
            
            
        </div>
        
    </div>
    
</div>
  


</body>
</html>