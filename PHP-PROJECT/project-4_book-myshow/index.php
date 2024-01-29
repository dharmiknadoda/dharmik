<?php
include('conn.php');
$select = 'select * from movie';
$query = mysqli_query($conn, $select);

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
	<script src="js/bootstrap.bundle.min.js"></script>

</head>

<body>

	<?php include("navbar.php") ?>

	<section id="center" class="center_home">
		<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-inner">
				<div class="owl-carousel owl-theme">
					<?php
					$select = "select * from banner";
					$result = mysqli_query($conn, $select);
					if ($result) {
						while ($row = mysqli_fetch_assoc($result)) {
					?>
							<div class="carousel-item active">
								<div class="item"><img class="rounded-3" src="img/<?php echo $row['img'] ?>" alt=""></div>
							</div>
					<?php	}
					} ?>
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
	</section>

	<?php
		include('5-movie.php');
	?>

	<section id="stream" class="pb-5 pt-4">
		<div class="container">
			<div class="row trend_1">
				<div class="col-md-6 col-6">
					<div class="trend_1l">
						<h4 class="mb-0"><span class="col_red">New Event</span></h4>
					</div>
				</div>
			</div>
			<div class="row trend_2 mt-4">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<div class="trend_2i row">
								<div class="col">
									<div class="trend_2im clearfix position-relative">
										<div class="trend_2im1 clearfix">
											<div class="grid">
												<a href="event.php"><img src="img/e-1.avif" class="w-100" alt=""></a>
												</figure>
											</div>
										</div>
										<div class="position-absolute w-100 top-0"></div>
									</div>
								</div>

								<div class="col">
									<div class="trend_2im clearfix position-relative">
										<div class="trend_2im1 clearfix">
											<div class="grid">
												<figure class="effect-jazz mb-0">
													<a href="sport.php"><img src="img/e-2.avif" class="w-100" alt="img25"></a>
												</figure>
											</div>
										</div>
										<div class="position-absolute w-100 top-0"></div>
									</div>

								</div>
								<div class="col">
									<div class="trend_2im clearfix position-relative">
										<div class="trend_2im1 clearfix">
											<div class="grid">
												<figure class="effect-jazz mb-0">
													<a href="plays.php"><img src="img/e-3.avif" class="w-100" alt="img25"></a>
												</figure>
											</div>
										</div>
										<div class="position-absolute w-100 top-0"></div>
									</div>

								</div>
								
								</div>
							</div>
						</div>
					</div>
				</div>
	</section>

	<?php
		include('5p-movie.php');
	?>

	<?php
		include('footer.php');
	?>

	
	<script>
		window.onscroll = function() {
			myFunction()
		};

		var navbar_sticky = document.getElementById("navbar_sticky");
		var sticky = navbar_sticky.offsetTop;
		var navbar_height = document.querySelector('.navbar').offsetHeight;

		function myFunction() {
			if (window.pageYOffset >= sticky + navbar_height) {
				navbar_sticky.classList.add("sticky")
				document.body.style.paddingTop = navbar_height + 'px';
			} else {
				navbar_sticky.classList.remove("sticky");
				document.body.style.paddingTop = '0'
			}
		}
	</script>

</body>

</html>