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

<body>
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
                     <a href="home.php" class="nav-item nav-link">Home</a>
                    <a hidden href="login.php" class="nav-item nav-link">Log In</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Services</a>
                        <div class="dropdown-menu text-capitalize">
                            <a href="petFood.php" class="dropdown-item">Pet Food</a>
                            <a href="petService.php" class="dropdown-item">Pet Care</a>
                        </div>
                    </div>
                    <a href="adminProfile.php" class="nav-item nav-link">Profile</a>
                    <a href="logout.php" class="nav-item nav-link">Logout</a>
                    
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->



      <!-- Provider table display -->
<div class="container-fluid">
<h1 class="mb-5 text-center bg-gray my-5 ">Pet Request Details</h1>
     <table class="table table-dark table-striped table-hover">
        <thead>
            <tr>
               <th scope="col">ID</th>
               <th scope="col">userImage</th>
              
               <th scope="col">userName</th>
               <th scope="col">UserMobile</th>
               <!-- <th scope="col">About</th> -->
               <th scope="col">Pet Image</th>
               <th scope="col">Pet Name</th>
               <th scope="col">Pet Type</th>
               <th scope="col">Accept  </th>
               <th scope="col">Reject</th>
               
            </tr>
        </thead>
             <tbody>

             <?php
              include 'config.php';
              $allData = mysqli_query($conn,"SELECT * FROM `pet_request` WHERE approve=''");

             //   row akare data ashbe
              while($row = mysqli_fetch_array($allData)){
                echo"<tr>
                        <td>$row[id]</td>
                        
                        <td><img src='../$row[userimage]' width='100px'></td> 
                        <td>$row[username]</td>
                        <td>$row[mobile]</td>

                        <td><img src='../$row[p_image]' width='100px'></td> 
                        <td>$row[p_name]</td>
                        <td>$row[p_type]</td>
                        
                       
                       
                        <td><a class='btn btn-success' href='petaccept.php? id=$row[id]'>Accept</a></td>
                        <td><a class='btn btn-danger' href='delete.php? id=$row[id]'>Reject</a></td>
                        
                        
                    </tr>";

              }

             ?>





            </div>






</body>
</html>