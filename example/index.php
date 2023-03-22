<?php

include 'config.php';
session_start();

if (isset($_POST['add_to_cart'])){
    if (isset($_SESSION['cart'])){
        $session_array_id = array_column($_SESSION['cart'], "id");

        if (!in_array($_GET['id'], $session_array_id)){
            $session_array = array(
                'id' => $_GET['id'],
                "name" => $_POST['name'],
                "price" => $_POST['price'],
                
                "quantity" => $_POST['quantity'],
    
            );
            $_SESSION['cart'][] = $session_array;

        }

    }else{
        $session_array = array(
            'id' => $_GET['id'],
            "name" => $_POST['name'],
            "price" => $_POST['price'],
            
            "quantity" => $_POST['quantity'],

        );
        $_SESSION['cart'][] = $session_array;

    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <!-- Favicon -->
       <link href="../img/afav.PNG" rel="icon">
    <title>Pet Lover-Food</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    
<!-- Topbar Start -->
<div class="container-fluid bg-dark">
        <div class="row py-2 px-lg-4">
            <div class="col-lg-4">
                <a href="" class="d-none d-lg-block">
                    <h1 class="m-0 text-capitalize "><span ></span><span class="text-white text-decoration-none" >Pet</span><span class="text-white text-decoration-none">Lover</span></h1>
                </a>
            </div>
            <div class="col-lg-8 text-center text-lg-right">
                <div class="text-end">
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
                    <a href=" ../home.php" class="nav-item nav-link">Home</a>
                    <!-- <a href="login.php" class="nav-item nav-link">Log In</a> -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown">Services</a>
                        <div class="dropdown-menu text-capitalize">
                        <a href=" ../cat.php" class="dropdown-item">Cats</a>
                            <a href=" ../dog.php" class="dropdown-item active">Dogs</a>
                            <a  href=" ../petFood.php" class="dropdown-item">Pet Food</a>
                            <a href=" ../petService.php" class="dropdown-item">Pet Care</a>
                        </div>
                    </div>
                    <a href=" ../profile.php" class="nav-item nav-link">Profile</a>
                    <a href=" ../contact.html" class="nav-item nav-link">Contact</a>
                    <a href=" ../about.html" class="nav-item nav-link">About</a>
                    <a href=" ../logout.php" class="nav-item nav-link">Logout</a>
                    
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->







    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-center">Available Food Items</h2>
                    <div class="col-md-12">
                        <div class="row">


                            <?php
                            $query = "SELECT * FROM fooddetailss";
                            $result = mysqli_query($conn, $query);

                            while ($row = mysqli_fetch_array($result)) { ?>
                                <div class="col-md-6 card mb-2 bg-warning">

                                    <form method="post" action="index.php?id=<?= $row['id'] ?>">
                                        <img class="text-center img-thumbnail img-fluid" src="../<?= $row['f_image'] ?>" style='height: 175px;'>
                                        <h5 class="text-center"><?= $row['f_name']; ?></h5>
                                        <h5 class="text-center">$<?= $row['f_price'] ?></h5>
                                        <input type="hidden" name="name" value="<?=$row['f_name'] ?>">
                                        
                                        <input type="hidden" name="price" value="<?=$row['f_price'] ?>">
                                        Quantity:
                                        <input type="number" name="quantity" value="1" class="form-control">
                                        <input type="submit" name="add_to_cart" class="btn btn-success btn-block my-2" value="Add to Cart">
                                    
                                    </form>
                                </div>



                            <?php
                            }



                            ?>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <h2 class="text-center">Item Selected</h2>

                    <?php
                        $output = "";

                        $total = 0;

                        $output .= "
                            <table class='table table-bordered table-striped'>
                                <tr>
                                    <th>ID</th>
                                    <th>Item Name</th>
                                    <th>Item Price</th>
                                    <th>Item Quantity</th>
                                    <th>Price</th>
                                    <th>Action</th>


                                </tr>
                        
                        ";


                        if (!empty($_SESSION['cart'])){
                            foreach ($_SESSION['cart'] as $key => $value){
                                $output .= "
                                <tr>
                                <td>".$value['id']."</td>
                                <td>".$value['name']."</td>
                                <td>".$value['price']."</td>
                                <td>".$value['quantity']."</td>
                                <td>$".number_format($value['price'] * $value['quantity'], 2)."</td>
                                <td>
                                    <a href='index.php?action=remove&id=".$value['id']."'>
                                        <button class='btn btn-danger btn-block'>Remove</button>
                                    </a>    

                                </td>




                            </tr>



                                ";
                                $total = $total + $value['quantity'] * $value['price'];
                            }

                            $output .= "
                            <tr>
                                <td colspan='3'></td>
                                <td><b>Total Price</b></td>
                                <td>".number_format($total, 2)."</td>
                                
                                <td>
                                    <a href='index.php?action=clearall'>
                                        <button class='btn btn-warning btn-block'>Clear All</button>
                                        </a>
                                </td>
                                
                            
                                </tr>
                                
                                <td>
                                   <a href='order.php?action=ordered&total=$total'> 
                                       <button class='btn btn-success text-center'>Order</button>
                                        </a>
                                </td>
                            
                            ";
                        }


                        echo $output;


?>
                </div>

            </div>
        </div>
    </div>
    <?php
        if (isset($_GET['action'])){
            if ($_GET['action'] == "clearall"){
                unset($_SESSION['cart']);
            }
  
        if    ($_GET['action'] == "remove") {
            
            foreach ($_SESSION['cart'] as $key => $value){
                if ($value['id'] == $_GET['id']){
                    unset($_SESSION['cart'][$key]);
                }
            }
        }
    }
?>

</body>

</html>