<?php
include("conn.php");

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $feedback = $_POST['feedback'];

    $insert = "insert into feedback(name,feedback) values('$name','$feedback')";
    $query = mysqli_query($conn, $insert);
}

$per_page_item = 2;
    $current = isset($_GET['page'])?$_GET['page']:1;
    $st_index = ($current - 1) * $per_page_item;

    $sql = "SELECT * FROM `feedback`";

    if(!empty($filtername))
    {
        $sql .= "WHERE `name` LIKE '%$filtername%'";
    }

    $sql .= "LIMIT $st_index,$per_page_item";

    $query = mysqli_query($conn,$sql);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tooplate's Little Fashion - Products</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="css/slick.css" />

    <link href="css/tooplate-little-fashion.css" rel="stylesheet">

</head>

<style>
    input{
        padding: 15px;
        width: 500px;
        margin-top: 30px;
        margin-left: 500px;
    }
    button{
        padding: 12px;
        width: 500px;
        margin-top: 30px;
        margin-left: 500px; 
        background-color: red;
        border: red;
        color: white;
        font-weight: 700;
        margin-bottom: 50px;
    }
    .box{
        /* border: 2px solid black ; */
        box-shadow:  1px 1px 1px 5px silver;
        margin-top: 50px;
        margin-left: 150px;
        padding: 10px;
        width: 1000px;
        align-items: center;
        margin-bottom: 50px;
    }
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


<h2 style="font-family: Segoe Script; margin-top: 100px; text-align: center;">
    Your <span>Feedback</span>
</h2>
<form action="" method="post">
    <div>
        <input type="text" name="name" placeholder="Full Name">
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

<section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2  style="font-family: Segoe Script;">
          <span style="margin-left: 550px;">Feedback</span>
        </h2>
      </div>
    </div>
    <div class="container px-0">
    <?php 
            include('conn.php');
           
            if($query)
            {
            while($row=mysqli_fetch_assoc($query))
            { ?>
      <div id="customCarousel2" class="carousel  carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="box">
              <div class="client_info">
                <div class="client_name">
                  <h5>
                  <?php echo $row['name'];?>
                  </h5>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p><?php echo $row['feedback'];?></p>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
      <?php } ?>
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
<body>

    <?php
    include('header.php');
    ?>

    <?php
    include('futer.php');
    ?>


</body>

</html>