<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{asset('css/style.css')}}>
    <link rel="stylesheet" href={{asset('css/all.min.css')}}>
    <link rel="stylesheet" href={{asset('css/bootstrap.min.css')}}>
    <link rel="stylesheet" href={{asset('css/animate.min.css')}}>
    <link rel="stylesheet" href={{asset('css/owl.carousel.min.css')}}>
    <link rel="stylesheet" href={{asset('css/owl.theme.default.min.css')}}>
    <title>menu</title>
</head>
<style>
    .filter{
                border: 2px solid #da2424;
                padding: 5px;
                margin-bottom: 10px;
                width: 1094px !important;
                text-align: left !important;
                height: 50px;
                margin-right: 10px;
            }
            .fbutn{
                padding: 12px;
                width: 150px;
                height: 50px;
                border-radius: 50px;
                background-color: #da2424;
                color: white;
                border: 2px solid #da2424;
            }
</style>
<body>


    <!-- header start -->
    @include('user/header')
    <!-- header over -->

    <!-- cards start -->
    <div class="container mt-5 mb-5">
        <h2 class="bolder text-center green" style="margin-top: 150px;">Slimming Menu</h2>
        <div class="cust-hr"></div>

        <form action="" style="margin-top: 50px">
            @csrf
            <input type="text" name="filter" class="filter" placeholder="Search">
            <button type="submit" name="filter_btn" class="fbutn">Search</button>
        </form>
        <div class="mainbox mt-5 d-flex justify-content-around flex-wrap">
        
        @foreach ($data as $item)     
            <div class="box d-flex flex-column hover m-3 shedow-black rounded">
                <img src="{{asset('public/img/'.$item->img)}}" class="" alt="">
                <hr class="m-0">
                <span class="text-center green fw-bold"> {{$item->name}} </span>
                <button class="btt mt-3" style="font-size: 15px; padding: 10px 10px;"><a class="white" href="{{route('ditails',$item->id)}}">Order Now</a></button>
            </div>
        @endforeach
        
        </div>
    </div>
    <!-- cards over -->

    <!-- footer start  -->
    @include('user/footer')
    <!-- footer start  -->
</body>

</html>