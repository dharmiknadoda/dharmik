<?php
include('conn.php');
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

<style>
    .abc{
        border: 2px solid #00c6a9;
        padding: 5px;
        margin: 10px;
        background-color: #00c6a9;
        color: white;
    }
    .abc:hover{
        color: black;
        border: 3px solid #00c6a9;
        background-color: white;
    }
    .pag{
        text-align: center;
        margin-bottom: 100px;
    }
</style>

<section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2  style="font-family: Segoe Script;">
          <span style="margin-left:20px ;">Testimonial</span>
        </h2>
      </div>
    </div>
    <div class="container px-0">
    <?php 
            include('conn.php');
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
                  <h6>
                  <?php echo $row['role'];?>
                  </h6>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p><?php echo $row['feedback'];?></p>
            </div>
          </div>
        </div>
      </div>
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
 