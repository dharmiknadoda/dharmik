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
    <title>now</title>
</head>

<body>

    <!-- header start -->
    <header style="background-color: rgba(41,45,53,1);; box-shadow: 0px 26px 61px -26px black; position: fixed; top: 0; width: 100%; z-index: 10000;">
    <div class="container">
        <div class="sec">
            <div class="row h-100">
                <div class="col-2 d-flex align-items-center">
                    {{-- <img src="img/logo-white.png" alt="" class="img-fluid ms-2" style="width: 180px; height: 50px;"> --}}
                </div>
                <div class="col-6 d-flex align-items-center">
                    <ul class="d-flex menu mt-3">
                        <li class="ms-4 p-3 d-sm-block d-none"><a class="white" href="{{route('index')}}">Home</a></li>
                        <li class="ms-4 p-3 d-xl-block d-none"><a class="white" href="{{route('item')}}">Items</a></li>
                        <li class="ms-4 p-3 d-lg-block d-none"><a class="white" href="{{route('contact')}}">Contacts</a></li>
                        <li class="ms-4 p-3 d-lg-block d-none"><a class="white" href="{{route('feedback')}}">Feedback</a></li>
                        <li class="ms-4 p-3 d-lg-block d-none"><a class="white" href="{{route('readmore')}}">Read More</a></li>
                    </ul>
                </div>
                <div class="col-4 d-flex align-items-center">
                    <button class="bt ms-5 d-lg-block d-none"><a class="white" href="{{route('item')}}">View Menu</a></button>
                    <button class="btt ms-4 d-sm-block d-none"><a class="white" href="{{route('signup')}}">Sign In</a></button>
                </div>
            </div>
        </div>
    </div>
</header>
    <!-- header over -->

    <!-- oder start  -->
    <div class="div" style="height: 200px;"></div>
    <div class="container">
        <div class="card border-0 mb-3" style="max-width: 100%;">
            <h1 style="font-weight: 700;" class="red mb-5">Order Now</h1>
            <div class="row g-0">
            @foreach ($data as $item)
                
                <div class="col-md-6">
                    <img src="{{asset('public/img/'.$item->img)}}" class="img-fluid rounded-start" alt="..."
                        style="width: 100%; height: 100%;">
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <h5 class="card-title green mt-5">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                        </h5>
                        <h2 class="red mt-3">${{$item->price}}</h2>
                        <h4 style="font-weight: 700;" class="mt-2">{{$item->name}}</h4>
                        <p class="card-text mt-3">{{$item->details}}</p>
                        {{-- <div class="d-flex"> --}}
                            <form action="{{route('chake')}}" method="post" style="display: flex; flex-direction: column">
                            @csrf
                                <input type="text" hidden name="id" value="{{$item->id}}">
                                <input name="address" type="text" placeholder="Address" class="border" style="height: 100px;width: 600px;">
                                <input type="number" name="quantity" placeholder="Quantity"
                                    style="height: 50px;width: 600px; display: flex; border: 2px solid black; margin-top: 20px ;">
                                <input type="submit" class="bt" name="submit" style="margin-top: 20px; height: 50px;">
                            </form>
                        </div>
                        <p class="card-text ms-4 mt-5"><small class="text-body-secondary mt-5">Last updated 3 mins
                                ago</small></p>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
    <!-- oder over  -->

    <!-- feedback start  -->
    <div class="feed">
        <div class="container">
            <h1 style="font-weight: 700;" class="red mb-5 mt-5">Reviews</h1>
            <div class="back">
                <h3 class="name black" style="font-weight: 700; padding: 20px;">Dharmik,</h3>
                <p style="padding: 20px;" class="green">Avoid thing like, "the service was good/bad." You want specifics. The best way to get them is by asking questions. While you don't want to pester people, a good waitstaff will know what foods go well together, if there are any allergens in the dish, and the basic presentation of the dish.</p>
            </div>
            <div class="back">
                <h3 class="name black" style="font-weight: 700; padding: 20px;">Aditya,</h3>
                <p style="padding: 20px;" class="green">Avoid thing like, "the service was good/bad." You want specifics. The best way to get them is by asking questions. While you don't want to pester people, a good waitstaff will know what foods go well together, if there are any allergens in the dish, and the basic presentation of the dish.</p>
            </div>
        </div>
    </div>
    <!-- feedback over  -->

    <!-- footer start  -->
    @include('user/footer')
    <!-- footer start  -->

</body>

</html>