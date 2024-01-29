<?php 
    include("conn.php");
    session_start();

    if(isset($_GET['filter']) && isset($_GET['filter_btn'])) {
    $_SESSION['filter'] = $_GET['filter'];
    $filtername = $_SESSION['filter'];
    $sql = "SELECT * FROM `products` WHERE `name` LIKE '%$filtername%'";
    $query = mysqli_query($conn , $sql);
}else
{
    $sql = "select * from products";
    $query = mysqli_query($conn , $sql);
}
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Tooplate's Little Fashion - Products</title>

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
                                <span class="d-block text-primary">Choose your</span>
                                <span class="d-block text-dark">favorite stuffs</span>
                            </h1>
                        </div>
                    </div>
                </div>
            </header>

            <form action="">
                <input type="text" name="filter" style=" border: 3px solid; border-radius: 5px; padding: 5px;margin-top:80px; margin-left:115px;">
                <button type="submit" name="filter_btn" style="background-color:white; padding: 5px; border-radius: 5px;">Filter</button>
            </form>
        
            <?php include('3-pro.php'); ?>

        
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
