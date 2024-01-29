<?php 
include("conn.php");

      if(isset($_POST['submit']))
      {
          $name = $_POST['name'];
          $phone_no = $_POST['phone_no'];
          $email = $_POST['email'];
          $password = $_POST['password'];

          $insert = "insert into user(name,phone_no,email,password) values('$name','$phone_no','$email','$password')";
          $query = mysqli_query($conn , $insert);

          if($query)
          {
            header('Location:sign-in.php');
          }
      }

?>

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Mico</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- nice select -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
  <!-- datepicker -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

    <style>
        .abc{
            border-radius: 50px;
            height: 50px;
            border: 3px solid #00c6a9;
            font-weight: 600;
            margin-top: 40px !important;
        }
        .abc:hover{
            color: white;
            background-color: #00c6a9;
            border: 3px solid #00c6a9;
        }
    </style>

<body class="sub_page">

  <?php
    include('hearder.php');
  ?>


            <section class="sign-in-form section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 mx-auto col-12">

                            <h2 class="text-center mt-5 mb-5" style="font-family: Segoe Script; color:#00c6a9; font-size :45px;">
                                Sign <span style="color: black;">Up</span>
                            </h2>
                            <!-- <div class="div-separator w-50 m-auto my-5"><span>or</span></div> -->

                            <div class="row">
                                <div class="col-lg-8 col-11 mx-auto">
                                    <form  method="POST" enctype="multipart/form-data">

                                        <div class="form-floating">
                                            <input type="text" name="name"  class="mb-4 form-control" placeholder="Your name" required>
                                        </div>

                                        <div class="form-floating">
                                            <input type="text" name="phone_no" class="mb-4 form-control" placeholder="Phone No" required>
                                        </div>

                                        <div class="form-floating">
                                            <input type="email" name="email" pattern="[^ @]*@[^ @]*" class="mb-4 form-control" placeholder="Email address" required>
                                        </div>

                                        <div class="form-floating my-4">
                                            <input type="password" name="password" pattern="[0-9a-zA-Z]{4,10}" class="form-control" placeholder="Password" required>
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