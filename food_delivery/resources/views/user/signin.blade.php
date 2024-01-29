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

        <!-- feedback start  -->
        <div class="feedback" style="margin-top: 75px; background-color: #f3f5ed; height: 700px;">
            <div class="container">
                <div class="for">
                    <div class="tit" style="height: 50px;"></div>
                        <h1 style="font-family: Segoe Script; text-align: center; color: #8ec038; margin-top: 100px;">Sign-In</h1>
                    <!-- </div> -->
                    <form action="{{route('signin')}}" method="post" class="d-flex" style="flex-direction: column;">
                    @csrf
                        <input type="email" name="email" placeholder="Email" class="mt-4">
                        <input type="password" name="password" placeholder="Password" class="mt-4">
                        <button name="submit" class="btt" style="margin-top: 50px; font-size: 15px; padding: 15px 40px;">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- feedback over -->

    <!-- footer start  -->
        @include('user/footer')
    <!-- footer start  -->

</body>

</html>