<?php
    include('conn.php');

    if(isset($_POST['buy'])){
		$name = $_GET['name'];
		$price = $_GET['price'];
		$qut = $_POST['qut'];
		$insert = "insert into oreder(name,price,qut) values('$name','$price','$qut')";
		mysqli_query($conn,$insert);
	}


?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Tooplate's Little Fashion - Product Detail</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link rel="stylesheet" href="css/slick.css"/>

        <link href="css/tooplate-little-fashion.css" rel="stylesheet">
<!--

Tooplate 2127 Little Fashion

https://www.tooplate.com/view/2127-little-fashion

-->
    </head>
    <style>
        .tbl{
            width: 590px !important;
            margin-left: 695px !important;
            margin-top: 520px !important;
            position: absolute;
            text-align: center;
            border: 2px solid black !important;
        }
        tr,th,td{
            border: 2px solid black !important;
        }
    </style>
    <body>

        <section class="preloader">
            <div class="spinner">
                <span class="sk-inner-circle"></span>
            </div>
        </section>
    
        <main>

        <?php include('header.php'); ?>

            <header class="site-header section-padding d-flex justify-content-center align-items-center">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-10 col-12">
                            <h1>
                                <span class="d-block text-primary">We provide you</span>
                                <span class="d-block text-dark">Fashionable Stuffs</span>
                            </h1>
                        </div>
                    </div>
                </div>
            </header>

            <section class="product-detail section-padding">
                <div class="container">
                    <div class="row">
                        <?php
                            include('conn.php');
                            if(isset($_POST['buy']))
                            {   
                                $price = $_GET['price']; 
                                $qut = $_POST['qut'];
                                $total = $price*$qut;
                                
                            ?>
                                <table class="tbl" style="margin-left: 12px; margin-top:30px;">
                                <tr>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </tr>
                            <?php 
                                $name = $_GET['name'];
                                $price = $_GET['price'];

                                echo '<tr>
                                <td>'.$name.'</td>
                                <td>'.$price.'</td>
                                <td>'.$qut.'</td>
                                <td>'.$total.'</td>
                                </tr>'
                            
                            ?>
                            </table>
                            <?php } 
                            
                           
                            $name = $_GET['name'];
                           
                            
                            $select = "select * from products where name='$name'";
                            $query = mysqli_query($conn , $select);
                            while($row=mysqli_fetch_assoc($query))
                            { ?>
                                <div class="col-lg-6 col-12">
                                    <div class="product-thumb">
                                        <img src="pic/<?php echo $row['img'];?>" class="img-fluid product-image" alt="">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <div class="product-info d-flex">
                                        <div>
                                            <h2 class="product-title mb-2"><?php echo $row['name'];?></h2>
                                        </div>

                                        <small class="product-price text-muted ms-auto mt-auto mb-5">$<?php echo $row['price'];?></small>
                                    </div>

                                    <div class="product-description">

                                        <strong class="d-block mt-4 mb-2">Description</strong>
                                        <p class="lead mb-5"><?php echo $row['detail'];?></p>
                                    </div>
                                    <form method="post">
                            <div class="product-cart-thumb row">
                                <div class="col-lg-6 col-12">
                                    
                                    <select name="qut" class="form-select cart-form-select" id="inputGroupSelect01">
                                        <option selected>Quantity</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                                <div class="col-lg-6 col-12 mt-4 mt-lg-0">
                                    <button type="submit" name="buy" class="btn custom-btn cart-btn" data-bs-toggle="modal" data-bs-target="#cart-modal">Add to Cart</button>
                                </div>

                                <div class="h5 mt-5 fw-bold">Order detail</div>
                               
                            </div>
                                
                            </div>
                            <?php } ?>
                    </div>
                </div>
            </section>

            <div class="col-12 text-center mt-5">
                <h3 class="">You might also like</h3>
            </div>
            
        <?php include('3-pro.php'); ?>

        </main>

        <?php include('futer.php'); ?>


        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/Headroom.js"></script>
        <script src="js/jQuery.headroom.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>