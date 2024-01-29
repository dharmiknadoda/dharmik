<?php

include('conn.php');
   
    if(isset($_POST['submit']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $select = "SELECT * from signup where email='$email' AND password='$password'";
        $result = mysqli_query($conn , $select);
        
        if(mysqli_num_rows($result)==1)
        {
            header('Location:index.php');
        }
        else
        {
            echo "no";
        }
     
    }

?>

<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Planet</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/global.css" rel="stylesheet">
	<link href="css/index.css" rel="stylesheet">
	<script src="js/bootstrap.bundle.min.js"></script>

</head>

    <style>
        .abc{
            border-radius: 50px;
            height: 50px;
            border: 3px solid red;
            font-weight: 600;
            margin-top: 40px !important;
        }
        .abc:hover{
            color: white;
            background-color: red;
            border: 3px solid red;
        }
        .in{
            border-radius:20px !important;
            height: 50px !important;
            margin-top: 50px !important;
        }
    </style>

<body class="sub_page">

  <?php
    include('navbar.php');
  ?>


            <section class="sign-in-form section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 mx-auto col-12">

                            <h2 class="text-center mt-5 mb-5" style="font-family: Segoe Script; color:#00c6a9; font-size :45px;">
                                Sign <span style="color: black;">In</span>
                            </h2>
                            <!-- <div class="div-separator w-50 m-auto my-5"><span>or</span></div> -->

                            <div class="row">
                                <div class="col-lg-8 col-11 mx-auto">
                                    <form  method="POST" enctype="multipart/form-data">

                                        <div class="form-floating">
                                            <input type="email" name="email" pattern="[^ @]*@[^ @]*" class="in mb-4 form-control" placeholder="Email address" required>
                                        </div>

                                        <div class="form-floating my-4">
                                            <input type="password" name="password" pattern="[0-9a-zA-Z]{4,10}" class="in form-control" placeholder="Password" required>
                                        </div>

                                        <button type="submit" name="submit" class="abc btn mt-3 mb-5 w-100">Create account</button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

  <?php
  include('footer.php');
  ?>

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js" integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- datepicker -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>


</body>

</html>