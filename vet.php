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
                <h1 class="text-center mt-5 py-4">Pet <span style="color: orange;">Lover</span></h1>
                <form action="vetDetails.php" method="post">
                    
                    <div class="mb-3">
                        <h4>Your Vet</h4>
                    </div>

                    <div class="mb-3">
                                Your User Name :
                                <input type="text" class="form-control" name="v_name">
                            </div>
                            <div class="mb-3">
                        Issue:
                        <textarea rows="4" class="form-control" name="v_issue" required placeholder="Describe the problem of your pet"></textarea>
                    </div>

                    <div class="mb-3">
                        Book Your Date and Time:
                        <input type="datetime-local" class="form-control" name="v_date">
                    </div>

                  
                    <!-- <div class="mb-3">
                        Got vaccinated before? :
                            <select name="v_before" class="form-control">
                                <option value="yes">Yes</option>
                                
                                <option value="no">No</option>
                                </select>
                        <div class="mb-3">
                        
                        <input hidden placeholder="Year-Month-Date" type="text" class="form-control" name="v_date">
                        </div>

                    </div> -->
                    
                    <!-- <div class="mb-3">

                            Vaccine Type :
                            <select name="v_type" class="form-control">
                                <option value="rabies">Rabies</option>
                                <option value="lyme">Lyme</option>
                                <option value="parvovirus">Parvovirus</option>
                                </select>

                            </div> -->

                  


                    <button type="submit" class="btn btn-primary col-12" name="submit">Request to See Vet

                    </button>
                    
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