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
    <title>contact</title>
</head>

<body>

    <!-- header start -->
        @include('user/header')
    <!-- header over -->

    <!-- customers start  -->
    <div class="customers ">
        <div class="container">
            <div class="mainboxs border-0">
                <h2 style="font-family: Segoe Script; text-align: center; margin-top: 200px; color: #8ec038;">Contact Us</h2>
                <div class="row mt-5">
                    <div class="col-3 ic1 text-center">
                        <i class="fa-solid fa-location-dot round mt-5"></i>
                        <p style="color: #8ec038; font-weight: 700;" class="mt-2">Location</p>
                        <p class="black">29 Nicolas str, New York, 987597-50</p>
                    </div>
                    <div class="col-3 ic1  text-center">
                        <i class="fa-solid fa-phone round mt-5"></i>
                        <p style="color: #8ec038; font-weight: 700;" class="mt-2">Phones</p>
                        <p class="black">0(800) 890-90-609 <br>
                            0(800) 890-90-620</p>
                    </div>
                    <div class="col-3 ic1  text-center">
                        <i class="fa-solid fa-envelope round mt-5"></i>
                        <p style="color: #8ec038; font-weight: 700;" class="mt-2">Email</p>
                        <p class="black">sale@like-themes.com <br>
                            president@like-themes.com</p>
                    </div>
                    <div class="col-3 ic1  text-center">
                        <i class="fa-regular fa-clock round mt-5"></i>
                        <p style="color: #8ec038; font-weight: 700;" class="mt-2">Working hours</p>
                        <p class="black">Wednesday - Sunday <br>
                            7:00 AM - 5:00 PM</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- customers over  -->

    <!-- footer start  -->
    @include('user/footer')
    <!-- footer start  -->

</body>

</html>