<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <title>Pet Lover - Adopt Your Favourite Pet</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
    <style>
        form{
            background: #fff;
            padding: 15px;
            box-shadow: 0px 0px 10px 0px;
            border-radius: 10px;
        }

    </style>
</head>
<body>
<!-- Topbar Start -->
<div class="container-fluid">
        <div class="row py-2 px-lg-4">
            <div class="col-lg-4">
                <a href="" class="d-none d-lg-block" style='text-decoration:none'>
                    <h1 class="m-0 text-capitalize" ><span class="text-dark"></span><span class="text-primary">Pet</span><span class="font-italic">Lover</span></h1>
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
    <div class="container-fluid p-0 nav-bar ">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark py-0">
            <a href="" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-5 text-capitalize font-italic text-white"><span class="text-primary">Pet</span>Lover</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav m-auto py-4">
                    <a href="../index.php" class="nav-item nav-link active">Home</a>
                    <a href="../login.php" class="nav-item nav-link">Log In</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Services</a>
                        <div class="dropdown-menu text-capitalize">
                            <a href="../petFood.php" class="dropdown-item">Pet Food</a>
                            <a href="../about.html" class="dropdown-item">Pet Care</a>
                        </div>
                    </div>
                    <a href="adminProfile.php" class="nav-item nav-link">Profile</a>
                    <a href="../contact.html" class="nav-item nav-link">Contact</a>
                    <a href="../about.html" class="nav-item nav-link">About</a>
                    <a href="adminLogout.php" class="nav-item nav-link">Logout</a>
                    
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->



  <div class="container-fluid">
    <div class= "row justify-content-center mt-5">
       

   
        <!-- <div class="col-lg-4 col-md-6 col-sm-12 ">
            
            <form action="insertProduct.php" method="post" enctype="multipart/form-data">
                
                <div class="mb-3 ">
                    <h3>Update</h3>
                </div>
                <div class="mb-3">
                    Name :
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="mb-3">
                    Email :
                    <input type="text" class="form-control" name="price">
                </div>
                <div class="mb-3">
                    Age :
                    <input type="text" class="form-control" name="price">
                </div>
                <div class="mb-3">
                    Service :
                    <input type="text" class="form-control" name="price">
                </div>
                <div class="mb-3">
                    Address :
                    <input type="text" class="form-control" name="price">
                </div>
                <div class="mb-3">
                    Mobile :
                    <input type="text" class="form-control" name="price">
                </div>
                <div class="mb-3">
                    Address :
                    <input type="text" class="form-control" name="price">
                </div>
                <div class="mb-3">
                  Student Image :
                    <input type="file" class="form-control" name="image">
                </div>

                <button type="submit" class="btn btn-primary col-12"  name="login">Insert</button>
            
            </form>

        </div> -->
    </div>
  </div>  

   <!-- Provider table display -->
<div class="container-fluid">
<h1 class="mb-5 text-center bg-info my-5 ">Request Details</h1>
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
              $allData = mysqli_query($conn,"SELECT * FROM `pet_request`");

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


        <div class="container-fluid">

     <table class="table table-dark table-striped table-hover">
     <h1 class="mb-5 text-center bg-info my-5 ">Vaccine Details</h1>
        <thead>
            <tr>
               <th scope="col">ID</th>
               <th scope="col">Previous Vaccine</th>
              
               <th scope="col">Vaccine Type</th>
               <th scope="col">Vaccine Date</th>
               <!-- <th scope="col">About</th> -->
               <!-- <th scope="col">Pet Image</th>
               <th scope="col">Pet Name</th>
               <th scope="col">Pet Type</th> -->
               <th scope="col">Accept  </th>
               <th scope="col">Reject</th>
               
            </tr>
            </thead>
             <tbody>

             <?php
              include 'config.php';
              $allData = mysqli_query($conn,"SELECT * FROM `vaccine`");

             //   row akare data ashbe
              while($row = mysqli_fetch_array($allData)){
                echo"<tr>
                        <td>$row[id]</td>
                        
                        <td>$row[v_before]</td>
                        <td>$row[v_type]</td>
                        <td>$row[v_date]</td>
                        
                       
                       
                        <td><a class='btn btn-success' href='accept.php? id=$row[id]'>Accept</a></td>
                        <td><a class='btn btn-danger' href='delete.php? id=$row[id]'>Reject</a></td>
                        
                        
                    </tr>";

              }


             ?>
             </div>



<div class="container-fluid">

     <table class="table table-dark table-striped table-hover">
     <h1 class="mb-5 text-center bg-info my-5 ">Grooming Details</h1>
        <thead>
            <tr>
               <th scope="col">ID</th>
               <th scope="col">Pet Name</th>
              
               <!-- <th scope="col">Vaccine Type</th> -->
               <th scope="col">Vaccine Date</th>
               <!-- <th scope="col">About</th> -->
               <!-- <th scope="col">Pet Image</th>
               <th scope="col">Pet Name</th>
               <th scope="col">Pet Type</th> -->
               <th scope="col">Accept  </th>
               <th scope="col">Reject</th>
               
            </tr>
            </thead>
             <tbody>

             <?php
              include 'config.php';
              $allData = mysqli_query($conn,"SELECT * FROM `grooming`");

             //   row akare data ashbe
              while($row = mysqli_fetch_array($allData)){
                echo"<tr>
                        <td>$row[id]</td>
                        
                        <td>$row[gp_name]</td>
                        <td>$row[b_date]</td>
                        
                       
                       
                        <td><a class='btn btn-success' href='accept.php? id=$row[id]'>Accept</a></td>
                        <td><a class='btn btn-danger' href='delete.php? id=$row[id]'>Reject</a></td>
                        
                        
                    </tr>";

              }


             ?>


             </div>

             <div class="container-fluid">

     <table class="table table-dark table-striped table-hover">
     <h1 class="mb-5 text-center bg-info my-5 ">Food Details</h1>
        <thead>
            <tr>
               <th scope="col">ID</th>
               <th scope="col">Food Name</th>
              
               <!-- <th scope="col">Vaccine Type</th> -->
               <th scope="col">Price</th>
               <th scope="col">Food For</th>
               <th scope="col"> Food Image :</th>
               <!-- <th scope="col">About</th> -->
               <!-- <th scope="col">Pet Image</th>
               <th scope="col">Pet Name</th>
               <th scope="col">Pet Type</th> -->
               <th scope="col">Update  </th>
               <th scope="col">Delete</th>
               
            </tr>
            </thead>
             <tbody>

             <?php
              include 'config.php';
              $allData = mysqli_query($conn,"SELECT * FROM `fooddetails`");

             //   row akare data ashbe
              while($row = mysqli_fetch_array($allData)){
                echo"<tr>
                        <td>$row[id]</td>
                        
                        <td>$row[f_name]</td>
                        <td>$row[f_price]</td>
                        <td>$row[f_type]</td>
                        <td>$row[f_image]</td>
                        
                       
                       
                        <td><a class='btn btn-success' href='fupdate.php? id=$row[id]'>Update</a></td>
                        <td><a class='btn btn-danger' href='fdelete.php? id=$row[id]'>Delete</a></td>
                        
                        
                    </tr>";

              }


             ?>


             </div>












            </div>

             </tbody>
   </table>
</div>

</div>





<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>