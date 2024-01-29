<?php
include('conn.php');
$id = $_GET['id'];
$select = "select * from event where id='$id'";
$query = mysqli_query($conn, $select);

if ($query) {
    while ($row = mysqli_fetch_assoc($query)) {
        $name = $row['name'];
        $tour = $row['tour'];
        $language = $row['language'];
        $location = $row['location'];
        $date = $row['date'];
        $poster = $row['poster'];
    }
}
if (isset($_POST['reatnow'])) {
    $reat = $_POST['reting'];
    $insert = "insert into rating(movie_id,rating) values('$id','$reat')";
    mysqli_query($conn, $insert);
}

if(isset($_POST['book'])){
    $quantity = $_POST['quantity'];
    $Time = $_POST['Time'];
    $Seats = $_POST['Seats'];
    $price = $_POST['price'];
    $insert = "insert into book_ticket(movie_id,movie_name,Seats,Time,price,ticket) values('$id','$movie_name','$Seats','$Time','$price','$quantity')";
    mysqli_query($conn,$insert);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Planet</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/global.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    <link href="css/movie.css" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>

</head>
<style>
	.boxx{
    height: 300px !important;
    width: 400px  !important;
    z-index: 500000 !important;
    background: white;
    border-radius: 10px;
  }
</style>
<body>

    <?php include("navbar.php") ?>
    <div class="main border-2" style="background-color: black;">
            <div class="main-ara d-flex">
                <div class="poster border-2">
                    <img src="pic/<?php echo $poster; ?>" class="" alt="" style="height: 400px; margin-left: 60px;">
                </div>
                <div class="details ms-5 mt-4">
                    <h1><?php echo $name; ?></h1>
                    <div class="rew d-flex">
                        <img class="img" src="img/ster.png" alt="">
                        <h2 class="m-2 ms-3"><?php

                                                $sele = "select avg(rating) as rating from rating where movie_id='$id'";
                                                $res = mysqli_query($conn, $sele);
                                                if ($res) {
                                                    while ($row = mysqli_fetch_assoc($res)) {
                                                        $rat = $row['rating'];
                                                    }
                                                }
                                                echo $rat

                                                ?>/10</h2>
                    </div>
                    <div class="reat mt-3 d-flex align-items-center">
                        <div class="text-l">
                            <h4 class="m-0 p-0">Add your rating & review</h4>
                            <span>Your ratings matter</span>
                        </div>
                        <button class="btn btn-light fw-bold ms-4 h-25 r">Reat Now</button>
                    </div>
                    <div class="view mt-4 ">
                        <span class="p-2 bg-light text-black rounded-3 fw-bold"><?php echo $tour; ?></span>
                        <span class="p-2 bg-light text-black rounded-3 fw-bold"><?php echo $language; ?>
                        </span>
                    </div>
                    <div class="time mt-4">
                        <ul class="d-flex fw-bold">
                            <li class="me-2"><?php echo $location; ?></li>
                            <li class="me-2"><?php echo $date; ?></li>
                        </ul>
                    </div>
                    <button class="book btn btn-danger ps-5 pe-5 rounded-3 pt-3 pb-3 fw-bold">book tickets</button>
                </div>
            </div>
        </div>
    </div>


    <?php
    include('event-view.php');
    ?>

    <?php include('view.php'); ?>

    <?php include('footer.php'); ?>

    </div>
    <div class="reting vh-100 position-fixed vw-100 top-0 d-flex justify-content-center align-items-center" style="opacity:100% !important; display:none !important;">
	<form action="" method="post" style="color: black; display: flex; flex-direction: column;">
		<select name="reting" id="" style="width: 100px;">
			<option>Select</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
		</select>
		<button class="btn btn-danger" name="reatnow" style="width: 100px; opacity: 100 !important; margin-top: 10px; z-index: 5000;">submit</button>
	</form>
</div>
<div style="opacity: 95% !important; display:none !important;" class="bookti vh-100  position-fixed vw-100 top-0 bg-black d-flex justify-content-center align-items-center">
	<div class="boxx ps-4 pe-4">
		<form action="" method="post">
			<h4 class="text-black text-center mt-2">book show</h4>
		<input type="number" id="quantity" placeholder="quantity" name="quantity" class="rounded-3 p-2">
		<select name="Seats" id="" class="p-2 rounded-3">
			<option value="">Select Seats</option>
			<option value="1st">1st</option>
			<option value="2st">2st</option>
			<option value="3st">3st</option>
			<option value="4st">4st</option>
			<option value="5st">5st</option>
			<option value="6st">6st</option>
		</select>
		<select name="Time" id="" class="p-2 rounded-3 mt-3">
			<option value="">Select Time</option>
			<option value="8 To 12">8 To 12</option>
			<option value="12 To 3">12 To 3</option>
			<option value="3 To 6">3 To 6</option>
			<option value="6 To 9">6 To 9</option>
			<option value="9 To 11">9 To 11</option>
			<option value="11 To 1">11 To 1</option>
		</select>
		<span class="text-black ms-5">Price :<span id="price">399</span></span>
		<div class="d-flex mt-3 border-danger border rounded-3 p-1 border-2  w-50 ">
			<span class="text-black ms-5">Total</span>
			<!-- <span class="text-black ms-5" id="total">399</span> -->
			<input type="text" id="to" name="price" class="ms-4 border-0" value="399">
		</div>
		<button class="btn btn-danger mt-5 w-100" name="book">Book show</button>
		</form>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
	texte =0;
      $("#quantity").keyup(function(){
        texte = $('#quantity').val()
        price = document.getElementById('price').innerHTML;
        price = parseInt(price)
        texte = parseInt(texte);
        Total = texte*price;
        // document.getElementById('total').innerHTML=Total;
        document.getElementById('to').value=Total;
      })
	$(".r").click(function(){
			$(".reting").fadeIn();
	})
	$(".book").click(function(){
		$(".bookti").fadeIn();
	})
</script>
</body>

</html>