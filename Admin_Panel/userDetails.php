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
                     <a href=" ../home.php" class="nav-item nav-link">Home</a>
                    <a hidden href="login.php" class="nav-item nav-link">Log In</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Services</a>
                        <div class="dropdown-menu text-capitalize">
                            <a href=" ../petFood.php" class="dropdown-item">Pet Food</a>
                            <a href=" ../example/index.php" class="dropdown-item">Pet Care</a>
                        </div>
                    </div>
                    <a href="adminProfile.php" class="nav-item nav-link">Profile</a>
                    <a href=" ../logout.php" class="nav-item nav-link">Logout</a>
                    
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->



       <!-- User table display -->
                <h1 class="mb-5 mt-5 text-center bg-gray my-5">User Data</h1>
                <div class="container-fluid">
                    <table class="table table-dark table-striped table-hover">
                        <thead>
                           <tr>
                            <th scope="col">ID</th>

                            <th scope="col">Name</th>
                               <th scope="col">Email</th>
                                <th scope="col">Pass</th>

                            <th scope="col">Mobile</th>
                            <th scope="col">Update  </th>
                            <th scope="col">Delete</th>
                         </tr>
                     </thead>
                          <tbody>

                          <?php
                           include 'config.php';
                              $allData = mysqli_query($conn,"SELECT * FROM `register`");

                             //   row akare data ashbe
                              while($row = mysqli_fetch_array($allData)){
                                echo"<tr>
                                       <td>$row[id]</td>
                        
                                       <td>$row[username]</td>
                                       <td>$row[email]</td>
                                       <td>$row[pass]</td>
                                       <td>$row[mobile]</td>
                        
                       
                     
                                      <td><a class='btn btn-warning' href='userUpdate.php? id=$row[id]'>Update</a></td>
                                      <td><a class='btn btn-danger' href='userDelete.php? id=$row[id]'>Delete</a></td>

                                 </tr>";
                            
                           }


                                  ?>

    
                             </tbody>
                         </table>
                </div>





                <!-- Footer Start -->
<!-- <div class="container-fluid  text-black mt-2 py-2 px-sm-2 px-md-5" style="background-color:#212529">
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
    </div> -->
    <!-- Footer End -->

</body>
</html>