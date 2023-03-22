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
    <link rel="stylesheet" href="../profile.css">
   
</head>


<body>

    <!-- Navbar Start -->
    <!-- <div class="container-fluid p-0 nav-bar bg-warning ">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark py-0">
            <a href="" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-5 text-capitalize font-italic text-white"><span class="text-primary">Pet</span>Lover</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav m-auto py-4">
                <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="login.php" class="nav-item nav-link">Log In</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Services</a>
                        <div class="dropdown-menu text-capitalize">
                            <a href="petFood.php" class="dropdown-item">Pet Food</a>
                            <a href="petCare.php" class="dropdown-item">Pet Care</a>
                        </div>
                    </div>
                    <a href="profile.php" class="nav-item nav-link active">Profile</a>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                    <a href="about.html" class="nav-item nav-link">About</a>
                    <a href="logout.php" class="nav-item nav-link">Logout</a>
                    
                </div>
            </div>
        </nav>
    </div> -->
    <!-- Navbar End -->

    <!-- User table display -->
   
 <div class="container-fluid bg-white table-responsive">
   
     <table class="table table-light table-striped table-hover">
        
        <thead style="background-color:black;">

            <h1 class="mb-5 mt-5 text-center my-5">Order Requests</h1>
            <tr class="table-light">
               <th scope="col">ID</th>
               
               <th scope="col">User Name</th>
               <th scope="col">Total Price</th>
               
            </tr>
        </thead>
             <tbody>

             <?php
              include 'config.php';
              $allData = mysqli_query($conn,"SELECT * FROM `orders`");

             //   row akare data ashbe
              while($row = mysqli_fetch_array($allData)){
                echo"<tr>
                        
                        
                        <td>Total Amount:$row[t_price]</td>
                        <td>User Name:$row[username]</td>
                        <td>User Mobile:$row[user_mobile]</td>
                        
                       
                        
                    </tr>";

              }


             ?>

    
             </tbody>
   </table>
   





</div>
</body>
</html>