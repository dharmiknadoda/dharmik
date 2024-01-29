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
    
  .mainbox{
    border: 2px solid red;
    width: 900px;
    height: 200px;
    margin-top: 80px;
    margin-left: 320px;
    align-items: center;
  }
  h3{
    color: red;
    margin: 10px;
  }
  h5{
    color: silver;
    margin-left: 10px;
  }
  h6{
    color: black;
    margin-left: 10px;
    margin-right: 20px;
    margin-top: 20px;
    font-size: 15px;
    font-weight: 100;
    text-align: justify;
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
        margin-top: 50px;
    }
</style>

<h1 style="color: red; text-align: center; margin-top: 50px; margin-bottom: -50px; font-family: Segoe Script;">Review</h1>
<?php

    if($query)
    {
      while ($row = mysqli_fetch_assoc($query)) {
        $id = $row['id'];
        $name = $row['name'];
        $movie = $row['movie'];
        $feedback = $row['feedback'];
  ?>
    <div class="mainbox">
        <div class="box">
            <h3><?php echo $name ?></h3>
            <h5><?php echo $movie ?></h5>
            <h6><?php echo $feedback ?></h6>
        </div>
    </div>
<?php } ?>
<?php } ?>

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