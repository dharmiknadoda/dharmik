<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- links start -->
    <link rel="stylesheet" href={{asset('css/style.css')}}>
    <link rel="stylesheet" href={{asset('css/all.min.css')}}>
    <link rel="stylesheet" href={{asset('css/bootstrap.min.css')}}>
    <link rel="stylesheet" href={{asset('css/animate.min.css')}}>
    <link rel="stylesheet" href={{asset('css/owl.carousel.min.css')}}>
    <link rel="stylesheet" href={{asset('css/owl.theme.default.min.css')}}>
    <!-- links over -->
    <title>signin</title>
</head>

<body>

    <!-- header start -->
        @include('user/header')
    <!-- header over -->

            <!-- Healthy and tasty start  -->
    <div class="healthy">
        <div class="container">
            <div class="row" style="margin-top: 150px;">
                <div class="col-6">
                    <h1 class=" ms-5 red black" style="font-weight: 700;">Healthy and tasty foods <br> with</h1>
                    <h1 class="green ms-5" style="font-weight: 700;">Natural Ingredients</h1>
                    <p class="ms-5 mt-3 black">Quisque pretium dolor turpis, quis blandit turpis semper ut. Nam<br>
                        eros nec luctus laoreet. Fusce sodales consequat velit eget dictum. Integer<br> ornare magna
                        vitae ex eleifend congue. Morbi sit amet nisi iaculis,<br> fringilla orci nec</p>
                </div>
                <div class="col-3 d-flex">
                    <img src="img/cups.jpg" alt="" style="height: 300px; width: 250px; margin-top: 30px;">
                </div>
                <div class="col-3 black">
                    <p><i class="fa-solid fa-check ms-5 green mt-5"></i><span class="ms-3">Reduces weight</span></p>
                    <p><i class="fa-solid fa-check ms-5 green mt-3"></i><span class="ms-3">Exact calorie content</span>
                    </p>
                    <p><i class="fa-solid fa-check ms-5 green mt-3"></i><span class="ms-3">Improves health</span></p>
                    <p><i class="fa-solid fa-check ms-5 green mt-3"></i><span class="ms-3">No sugar and gluten</span>
                    </p>
                    <p><i class="fa-solid fa-check ms-5 green mt-3"></i><span class="ms-3">Adds strength and
                            energy</span></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Healthy and tasty over  -->

     <!-- customers start  -->
     <div class="customers" style="background-color: #f3f5ed;">
        <div class="container">
            <div class="mainboxs">
                <h2 style="font-family: Segoe Script; text-align: center; margin-top: 130px; color: #8ec038;">Our
                    benefits</h2>
                <h1 class="black" style="text-align: center; font-weight: 700; margin-top: 20px;">Why customers choose us</h1>
                <h6 style="text-align: center; margin-top: 20px;" class="black">Quisque pretium dolor turpis, quis blandit turpis
                    semper ut. Nam malesuada eros nec luctus laoreet. Fusce sodales consequat velit eget dictum. Integer
                    ornare magna vitae ex eleifend congue. Morbi sit amet nisi iaculis, fringilla orci nec.</h6>
                <div class="row mt-5">
                    <div class="col-3 ic1 text-center">
                        <i class="fa-solid fa-bowl-food round mt-5"></i>
                        <p style="color: #8ec038; font-weight: 700;" class="mt-2">Only natural food</p>
                        <p class="black">Nam malesuada eros nec luctus laoreet fusce sodales consequat</p>
                    </div>
                    <div class="col-3 ic1  text-center">
                        <i class="fa-solid fa-fire-burner round mt-5"></i></i>
                        <p style="color: #8ec038; font-weight: 700;" class="mt-2">Various dishes</p>
                        <p class="black">Nullam faucibus a libero quis vestibulum proin vestibulum</p>
                    </div>
                    <div class="col-3 ic1  text-center">
                        <i class="fa-solid fa-boxes-packing round mt-5"></i></i>
                        <p style="color: #8ec038; font-weight: 700;" class="mt-2">Handy packaging</p>
                        <p class="black">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices</p>
                    </div>
                    <div class="col-3 ic1  text-center">
                        <i class="fa-brands fa-free-code-camp round mt-5"></i>
                        <p style="color: #8ec038; font-weight: 700;" class="mt-2">No frying</p>
                        <p class="black">Donec vitae turpis orci. In dignissim risus sed iaculis laoreet</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- customers over  -->

     <!-- fix img start  -->
     <div class="img">
        <div class="container">
            <div class="texts" style="width: 1296px;">
                <h1 style="font-size: 60px; font-weight: 700; margin-left: 500px; margin-top: 300px; color: white; position: absolute;">
                    Try trial day <br> <span style="margin-left: -70px;">for only</span> <span class="green">5
                        dollars</span></h1>
                <button class="btt"
                    style="margin-top: 500px; margin-left: 580px; font-size: 15px; padding: 15px 40px;"><a class="white" href="{{route('readmore')}}">Read More</a></button>
            </div>
        </div>
    </div>
    <!-- fix img over  -->

        <!-- delivery start  -->
        <div class="delivery">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-4">
                        <h2 class="hh1 black"> <samp class="green">Free</samp> food delivery every <br> day at your convenience
                        </h2>
                        <p class="mt-4 black">Quisque pretium dolor turpis, quis blandit turpis semper ut. Nam malesuada eros nec
                            luctus laoreet. Fusce sodales consequat velit eget dictum. Integer ornare magna.</p>
                        <i class="green fa-regular fa-clock mt-5 fs-2"></i><span class="ms-3 fs-5 black"
                            style="font-weight: 700;">Every day from 8:00 to 12:00</span>
                        <button class="btt" style="margin-top: 50px; font-size: 15px; padding: 15px 40px;"><a class="white" href="{{route('item')}}">Order Now</a></button>
                    </div>
                    <div class="col-4">
                        <img src="img/car.png" alt="" style="margin-top: 200px;">
                    </div>
                    <div class="col-4">
                        <img src="img/man.png" alt="" style="margin-left: 200px; margin-top: 150px;">
                    </div>
                </div>
            </div>
        </div>
        <!-- delivery start  -->

    <!-- footer start  -->
        @include('user/footer')
    <!-- footer start  -->

</body>

</html>