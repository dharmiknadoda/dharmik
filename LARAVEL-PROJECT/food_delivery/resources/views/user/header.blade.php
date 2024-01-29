<style>
    .colo{
        background-color: rgba(41,45,53,1);
        margin-left: 20px;
    }
</style>
<header style="background-color: rgba(41,45,53,1);; box-shadow: 0px 26px 61px -26px black; position: fixed; top: 0; width: 100%; z-index: 10000;">
    <div class="container">
        <div class="sec">
            <div class="row h-100">
                <div class="col-2 d-flex align-items-center">
                    <img src="img/logo-white.png" alt="" class="img-fluid ms-2" style="width: 180px; height: 50px;">
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
                    <button class="bt ms-5 d-lg-block d-none "><a class="white" href="{{route('item')}}">Menu</a></button>
                    <button class="btt ms-3 d-sm-block d-none"><a class="white" href="{{route('signup')}}">SignUp</a></button>
                    <button class="colo" style=" border: 2px solid rgba(41,45,53,1);"><a class="white" href="{{route('logout')}}">Logout</a></button>

                </div>
            </div>
        </div>
    </div>
</header>