<?php 
include('conn.php');

if(isset($_GET['data']) && isset($_GET['filter'])) {
	$_SESSION['data'] = $_GET['data'];
	$filtername = $_SESSION['data'];
	$sql = "SELECT * FROM `movie` WHERE `movie_name` LIKE '%$filtername%'";
	$query = mysqli_query($conn , $sql);
}else
{
	$sql = "select * from movie";
	$query = mysqli_query($conn , $sql);
}

$per_page_item = 2;
    $current = isset($_GET['page'])?$_GET['page']:1;
    $st_index = ($current - 1) * $per_page_item;

    $sql = "SELECT * FROM `movie`";

    if(!empty($filtername))
    {
        $sql .= "WHERE `name` LIKE '%$filtername%'";
    }

    $sql .= "LIMIT $st_index,$per_page_item";

    $query = mysqli_query($conn,$sql);
?>

<style>
.abc{
        border: 2px solid red;
        padding: 5px;
        margin: 10px;
        background-color: red;
        color: white;
    }
    .abc:hover{
        color: black;
        border: 3px solid red;
        background-color: white;
    }
    .pag{
        text-align: center;
        margin-bottom: 100px;
    }
</style>
<section id="trend" class="pt-4 pb-5">
		<div class="container">
			<div class="row trend_1">
				<div class="col-md-6 col-6">
					<div class="trend_1l">
					<h4 class="mt-5 mb-3 ms-4"><span class="col_red ms-1">Recommended Movies</span>
						<form action="">
							<input type="text" name="data" style="margin-top: 20px; border: 3px solid; border-radius: 5px; padding: 5px;">
							<button type="submit" name="filter" style="background-color:white; padding: 5px; border-radius: 5px;">Filter</button>
						</form>
					</h4>
					</div>
				</div>
				<div class="col-md-6 col-6">
					<div class="trend_1r text-end">
					</div>
				</div>
			</div>
			<div class="row trend_2 ">
				<div id="carouselExampleCaptions1" class="carousel slide" data-bs-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<div class="row ps-4 pe-4">
								<?php
                             
                                
								if ($query) {
                                    include('conn.php');
									while ($row = mysqli_fetch_assoc($query)) {
										$id = $row['id'];
										$movie_name = $row['movie_name'];
										$type = $row['type'];
										$poster = $row['poster'];
								?>

										<div class="col-md-3 col-6 movi-icon ">
											<div class="trend_2im clearfix position-relative">
												<div class="trend_2im1 clearfix">
													<div class="grid">
														<figure class="effect-jazz mb-0">
															<a href="movie_detail.php?id=<?php echo $id ?>"><img style="height: 378px;" src="img/<?php echo $poster ?>" class="w-100" alt="img25"></a>
														</figure>
													</div>
												</div>
												<div class="trend_2im2 clearfix text-center position-absolute w-100 top-0">
												</div>
											</div>
											<div class="trend_2ilast bg_grey p-3 clearfix">
												<h5 class="mb-0"><a class="col_red fw-bold" href="#"><?php echo $movie_name ?></a></h5>
												<h5><a style="color: #00000078;" class="mt-0 fs-6" href="#"><?php echo $type ?></a></h5>
											</div>
										</div>
								<?php
									}
								}
								?>

							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<div class="pag">
            <?php
                $total_row_query = "SELECT COUNT(*) as count FROM feedback";
                $total_r_result = mysqli_query($conn , $total_row_query);
                $total_row = mysqli_fetch_assoc($total_r_result)['count'];
                $total_page = ceil($total_row / $per_page_item);

                for($i = 1; $i <= $total_page; $i++)
                {
                    echo '<a class="abc" href="?page=' . $i;
                        if(isset($_GET['data']))
                        {
                            echo '&data=' . $_GET['data'];
                        }
                    echo '">' . $i . '</a>';
                }

            ?>
            </div>
