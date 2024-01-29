<?php 
  include('conn.php');

  if(isset($_POST['submit']))
  {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $movie = $_POST['movie'];
      $feedback = $_POST['feedback'];
      
      
      $insert = "insert into feedback(name,email,movie,feedback) values('$name','$email','$movie','$feedback')";
      $query = mysqli_query($conn , $insert);
    }
    
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Planet</title>
	<link href="css/bootstrap.min.css" rel="stylesheet" >
	<link href="css/font-awesome.min.css" rel="stylesheet" >
	<link href="css/global.css" rel="stylesheet">
	<link href="css/index.css" rel="stylesheet">
	<link href="css/movie.css" rel="stylesheet">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<script src="js/bootstrap.bundle.min.js"></script>

</head>

<style>
  .ab input{
    width: 500px;
    height: 50px;
    margin-left: 420px;
    margin-top: 20px;
    border: 2px solid red;
    text-align: center ;
  }
  .ab button{
    margin-left: 420px;
    margin-top: 20px;
    height: 50px;
    width: 200px;
    border: 2px solid red;
    background-color: red;
    color: white;
    font-weight: 600;
  }
</style>

<body>

<?php include("navbar.php") ?>


<section class="contact_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container mt-5">
        <h2 class="mt-5" style="font-family: Segoe Script;">
          Your <span>Feedback</span>
        </h2>
      </div>
      <div class="row">
        <div class="col-md-7">
          <div class="form_container">
            <form action="" method="post" class="ab">
              <div>
                <input type="text" name="name" placeholder="Full Name">
              </div>
              <div>
                <input type="email" name="email" placeholder="Email">
              </div>
              <div>
                <input type="text" name="movie" placeholder="movie">
              </div>
              <div>
                <input type="text" name="feedback" placeholder="Your Feedback">
              </div>
              <div class="btn_box">
                <button type="submit" name="submit">
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-5 ms-5" style="margin-top: -100px;">
          <div class="img-box" style="margin-left: 50px;">
            <img src="images/slider-img.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include('view.php'); ?> 
  <?php
		include('footer.php');
	?>

</body>
</html>