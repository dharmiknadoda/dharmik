<?php
include('conn.php');
$id = $_GET['id'];
$select = "select * from medicine where id ='$id'";
$query = mysqli_query($conn, $select);
if ($query) {
  while ($row = mysqli_fetch_assoc($query)) {
    $name = $row['name'];
    $m_name = $row['m_name'];
    $qun = $row['qun'];
    $mrp = $row['mrp'];
    $e_date = $row['e_date'];
    $img = $row['img'];
  }
  $total = 0;
  if(isset($_POST['submit'])){
    $quantity = $_POST['quantity'];
    $total = $quantity * $mrp;

    $insert = "insert into buy_m(name,m_name,qun,mrp,total,e_date,img) values('$name','$m_name','$qun','$mrp','$total','$e_date','$img')";
    $query = mysqli_query($conn , $insert);
  }

}
?>
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


  <style>
    .imgbox {
      width: 600px;
      height: 300px;
      margin-top: 80px;
      margin-bottom: 300px;
      margin-left: 440px;
      text-align: center;
    }
    .box{
      width: 100px;
      height: 100px;
    }
    .detail {
      margin-left: 60px;
      margin-top: 100px;
    }
    input{
      width: 140px;
      text-align: center;
      border: 2px solid black;
    }
    button{
      width: 140px;
      background-color: #00c6a9;
      border: 2px solid #00c6a9;
      height: 40px;
      color: white;
    }
  </style>

  <form action="" method="post">
    <div class="heading_container heading_center" style="align-items: center;">
      <h2 style="font-family: Segoe Script; margin-top: 50px;">
        Buy <span>Medicine</span>
      </h2>
    </div>
    <div class="imgbox">
      <div class="box">
        <img src="pic/<?php echo $img ?>" alt="" style="height: 300px ; width: 350px; margin-left: 150px; margin-top: -70px;">
        </div>
      <div class="detail">
        <h6 name="name">Medicine = <?php echo $m_name ?></h6>
        <h6 name="mrp" >MRP = $<?php echo $mrp ?></h6>
        <input type="text" name="quantity" placeholder="Quantity">
        <p style="margin-top: 10px;"><input  type="text" placeholder="Total" name="total" value="<?php echo  $total ?>"></p>
        <button type="submit" name="submit">Submit</button>
      </div>
    </div>
  </form>
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