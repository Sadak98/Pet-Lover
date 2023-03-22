<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <title>Pet Lover-Registration</title>
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
        form {
            background: #fff;
            padding: 15px;
            box-shadow: 0px 0px 10px 0px;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center mt-5">
        <div class="col-lg-4 col-md-6 col-sm-12">
                <form action="insert.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <h3>Registration</h3>
                    </div>
                   
                            <div class="mb-3">
                                Name :
                                <input type="text" class="form-control" name="r_name" required>
                            </div>
                       
                        
                            <div class="mb-3">
                                Email :
                                <input type="email" class="form-control" name="r_email" required>
                            </div>
                       
                            <div class="mb-3">
                                Mobile :
                                <input type="mobile" class="form-control" name="r_mobile" required>
                            </div>
                     
                  
                            <div class="mb-3">
                                Password :
                                <input type="password" class="form-control" name="r_pass" required>
                            </div>
                        
                       
                            <div class="mb-3">
                                Confirm Password :
                                <input type="password" class="form-control" name="r_con_pass" required>
                            </div>
                      
                            <div class="mb-3">
                                Image :
                                <input type="file" class="form-control" name="r_image" required>
                            </div>
                      


                    <button type="submit" class="btn btn-primary col-12" name="login">Register</button>





                    Already Registered?<a href="login.php">Login Here</a>
                    </div>
                    </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>

</html>