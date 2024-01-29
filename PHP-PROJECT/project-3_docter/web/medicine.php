

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Mico</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- nice select -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
  <!-- datepicker -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

      

<body class="sub_page">

  <?php
    include('hearder.php');
  ?>


  <!-- contact section -->
  <?php 
    include("conn.php");
    // session_start();

    if(isset($_GET['filter']) && isset($_GET['filter_btn'])) {
    $_SESSION['filter'] = $_GET['filter'];
    $filtername = $_SESSION['filter'];
    $sql = "SELECT * FROM `medicine` WHERE `m_name` LIKE '%$filtername%'";
    $query = mysqli_query($conn , $sql);
}else
{
      $select = "select * from medicine";
      $query = mysqli_query($conn , $select);
}
?>

<style>
    .cards{
    width: 18rem;
    padding: 10px;
    border-radius: 20px;
    box-shadow: 5px 5px 20px black;
  }
  .tip{
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
    /* margin-top: -100px !important; */
  }

  .ab{
    font-size: 20px;
    text-align: center;
    font-weight: 600;
    margin-top: 20px;
    border: 3px solid silver;
    border-bottom-right-radius: 20px;
    border-bottom-left-radius: 20px;
  }
  .for{
    text-align: center;
  }
  .fil{
    border: 3px solid black;
    padding: 5px;
    border-top-left-radius: 20px;
    border-bottom-left-radius: 20px;
    background-color: #00c6a9;
    transition: all ease-in 0.50s;
  }
  .fil:hover{
    background-color: white !important;
  }
  .butan{
    border: 3px solid black;
    padding: 5px;
    width: 70px;
    border-top-right-radius: 20px;
    border-bottom-right-radius: 20px;
    background-color: #00c6a9;
    transition: all ease-in 0.50s;
  }
  .butan:hover{
    background-color: white !important;
  }
  a{
    text-decoration: none ;
    color: black;
    padding-left: 10px;
    padding-right: 10px;
  }
</style>


<section class="team_section layout_padding">
    <div class="heading_container heading_center">
      <h2 style="font-family: Segoe Script;">
        Buy <span>Medicine</span>
      </h2>
    </div>
            <form action="" class="for">
                <input type="text" name="filter" class="fil">
                <button type="submit" name="filter_btn" class="butan">Filter</button>
            </form>
    <div class="container d-flex" style="justify-content: space-between; margin-top:80px;">
    <?php      
      include('conn.php');
      // $select = "select * from docter";
      // $query = mysqli_query($conn , $select);
      if($query)
      {
        while($row=mysqli_fetch_assoc($query))
        { ?>
            <div class="cards card mt-5">
              <img class="tip" src="pic/<?php echo $row['img'];?>" class="card-img-top" alt="...">
                  <div class="ab card-body">
                      <p class="card-text"><a href="buy_medicine.php?id=<?php echo $row['id'];?>" class="product-title-link"><?php echo $row['m_name'];?></a></p>
                      <p>$<?php echo $row['mrp'];?></p>
                      <!-- <button type="button" class="btn btn-primary"><a href="admin/html/ltr/buy_medicine.php">Buy</a></button> -->
                  </div>
            </div>
        <?php }?>
      <?php }?>
    </div>
  </section>
  <!-- end contact section -->

  <?php
  include('footer.php');
  ?>

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js" integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- datepicker -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>


</body>

</html>