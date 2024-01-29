<?php
include("conn.php");
session_start();
if (isset($_SESSION['email'])) {
    if (isset($_POST['submit'])) {
        if (isset($_FILES['img'])) {
            $file_name = $_FILES['img']['name'];
            $tmp_name = $_FILES['img']['tmp_name'];

            $result = move_uploaded_file($tmp_name, "pic/" . $file_name);
        }
        $name = $_POST['name'];
        $price = $_POST['price'];
        $date = $_POST['date'];
        $detail = $_POST['detail'];

        $insert = "insert into products(name,price,date,detail,img) values('$name','$price','$date','$detail','$file_name')";

        $query = mysqli_query($conn, $insert);

        if ($query) {
            header('Location:products.php');
        } else {
            echo "can't insert data";
        }
    }
}else{
    header("location:sign-in.php");
    exit(); 
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tooplate's Little Fashion</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="css/slick.css" />

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

        <h1 class="hero-title text-center fs-1" style="margin-top: 150px;">Add Product</h1>

        <div class="row-1">
            <div class="col-lg-8 col-1 mx-auto d-flex justify-content-center">
                <form class="col-8" method="POST" enctype="multipart/form-data" style="margin-top: 20px;">

                    <div class="form-floating">
                        <input type="text" name="name" class="mb-4 form-control" placeholder="Product Name" required>

                        <label for="email">Product Name</label>
                    </div>

                    <div class="form-floating">
                        <input type="text" name="price" class="mb-4 form-control" placeholder="Price" required>

                        <label for="email">Price</label>
                    </div>

                    <div class="form-floating">
                        <input type="date" name="date" class="mb-4 form-control" placeholder="Date" required>

                        <label for="email">Date</label>
                    </div>

                    <div class="form-floating my-4">
                        <input type="text" name="detail" id="password" class="form-control" placeholder="Product Detail" required>

                        <label for="password">Product Detail</label>
                    </div>

                    <div class="form-floating">
                        <input type="file" name="img" id="email" class="mb-4" placeholder="Role" required>
                    </div>

                    <button type="submit" name="submit" class="btn custom-btn form-control mt-4 mb-3">
                        Add To Cart
                    </button>

                </form>
            </div>
        </div>

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