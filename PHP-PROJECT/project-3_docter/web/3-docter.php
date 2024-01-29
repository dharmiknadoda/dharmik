<?php 
    include("conn.php");
    // session_start();

    if(isset($_GET['filter']) && isset($_GET['filter_btn'])) {
    $_SESSION['filter'] = $_GET['filter'];
    $filtername = $_SESSION['filter'];
    $sql = "SELECT * FROM `docter` WHERE `name` LIKE '%$filtername%'";
    $query = mysqli_query($conn , $sql);
}else
{
      $select = "select * from docter";
      $query = mysqli_query($conn , $select);
}
?>

<style>
    .cards{
    width: 18rem;
    padding: 10px;
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
    box-shadow: 5px 5px 20px black;
  }
  .tip{
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
    margin-top: -100px !important;
  }

  .ab{
    font-size: 20px;
    text-align: center;
    font-weight: 600;
    margin-top: 20px;
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
</style>


<section class="team_section layout_padding">
    <div class="heading_container heading_center">
      <h2 style="font-family: Segoe Script;">
        Our <span>Doctors</span>
      </h2>
    </div>
            <form action="" class="for">
                <input type="text" name="filter" class="fil">
                <button type="submit" name="filter_btn" class="butan">Filter</button>
            </form>
    <div class="container d-flex" style="justify-content: space-between; margin-top:130px;">
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
                      <p class="card-text"><?php echo $row['name'];?></p>
                      <p class="card-text" style="color: silver;"><?php echo $row['dep_name'];?></p>
                  </div>
            </div>
        <?php }?>
      <?php }?>
    </div>
  </section>