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
    <title>feedback</title>
</head>

<body>

    <!-- header start -->
    @include('user/header')
    <!-- header over -->

        <!-- feedback start  -->
        <div class="feedback" style="margin-top: 75px; background-color: #f3f5ed; height: 900px;">
            <div class="container">
                <div class="for">
                    <div class="tit" style="height: 50px;"></div>
                        <h1 style="font-family: Segoe Script; text-align: center; color: #8ec038; margin-top: 20px;">Feedback</h1>
                        <h1 style="text-align: center;font-weight: 700;" class="black">Leave your Review</h1>
                        <p style="text-align: center;" class="black">Maecenas est dui, commodo a rutrum eget, interdum vel lorem. Aliquam euismod  dapibus turpis, vitae placerat<br>  purus vestibulum non. Pellentesque ut nisi viverra, dictum nisi sed.</p>
                    <!-- </div> -->
                    <form action="{{route("feedback")}}" method="post" class="d-flex" style="flex-direction: column;">
                    @csrf
                        <input type="text" name="name" placeholder="Name" class="mt-4">
                        <input type="email" name="email" placeholder="Email" class="mt-4">
                        <textarea name="feedback" id="" cols="30" rows="10" placeholder="Feedback" class="mt-4"></textarea>
                        <button name="submit" class="btt" style="margin-top: 50px; font-size: 15px; padding: 15px 40px;">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- feedback over -->

    <!-- feedback start  -->
    <div class="feed">
        <div class="container">
            <h1 style="font-weight: 700;" class="red mb-5 mt-5">Reviews</h1>
            @foreach ($data as $item)
            <div class="back">
                <h3 class="name black" style="font-weight: 700; padding: 20px;">{{$item->name}},</h3>
                <p style="padding: 20px;" class="green">{{$item->feedback}}</p>
            </div>
            @endforeach
        </div>
    </div>
    <!-- feedback over  -->

    <!-- footer start  -->
    @include('user/footer')
    <!-- footer start  -->

</body>

</html>