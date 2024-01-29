<?php 
include('conn.php');

if(isset($_GET['data']) && isset($_GET['filter'])) {
	$_SESSION['data'] = $_GET['data'];
	$filtername = $_SESSION['data'];
	$sql = "SELECT * FROM `premieres` WHERE `movie_name` LIKE '%$filtername%'";
	$query = mysqli_query($conn , $sql);
}else
{
	$Premiere = "select * from premieres";
	$query = mysqli_query($conn, $Premiere);
}

?>
<section id="choice" class="pt-4 pb-5" style="background-color: rgb(43, 49, 72);">
		<div class="container">
			<img src="img/premiere.avif" alt="" class="w-100 h-100">
			<div class="row trend_2 mt-5">
				<div id="carouselExampleCaptions1" class="carousel slide" data-bs-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<div class="trend_2i row">
						<h3>Premiere
								<form action="">
									<input type="text" name="data" style="margin-top: 20px; margin-bottom: 20px; border-radius: 5px; padding: 5px;">
									<button type="submit" name="filter" style="background-color:white; padding: 5px; border-radius: 5px;">Filter</button>
								</form>
						</h3>
								<?php
                                include('conn.php');

								if ($query) {
									while ($row = mysqli_fetch_assoc($query)) {
										$poster = $row['poster'];
										$movie_name = $row['movie_name'];
										$type = $row['type'];
										$id = $row['id'];
								?>
										<div class="col-md-3 col-6 movi-icon">
											<div class="trend_2im clearfix position-relative">
												<div class="trend_2im1 clearfix">
													<div class="grid">
														<figure class="effect-jazz mb-0">
															<a href="#"><img src="img/<?php echo $poster ?>" class="w-100" alt="img25"></a>
														</figure>
													</div>
												</div>
												<div class="trend_2im2 clearfix text-center position-absolute w-100 top-0">
												</div>
											</div>
											<div class="trend_2ilast p-3 clearfix">
												<h5 class="mb-0"><a class=" fw-bold" href="movie_detail2.php?id=<?php echo $id ?>"><?php echo $movie_name ?></a></h5>
												<h5><a style="color: white;" class="mt-0 fs-6" href="#"><?php echo $type ?></a></h5>
											</div>
										</div>
								<?php }
								}

								?>
							</div>
						</div>

					</div>

				</div>
			</div>
		</div>
	</section>
