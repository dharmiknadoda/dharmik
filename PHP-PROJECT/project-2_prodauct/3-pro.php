<?php
include('conn.php');
$per_page_item = 3;
    $current = isset($_GET['page'])?$_GET['page']:1;
    $st_index = ($current - 1) * $per_page_item;

    $sql = "SELECT * FROM `products`";

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

<section class="products section-padding">
                <div class="container">
                    <div class="row">
                        
                        
                <?php
                include('conn.php');
               
                while($row=mysqli_fetch_assoc($query))
                {
                    
                    ?>
                        <div class="col-lg-4 col-12 mb-5">
                            <div class="product-thumb">
                                <a href="product-detail.php">
                                    <img src="pic/<?php echo $row['img'];?>" class="img-fluid product-image" alt="">
                                </a>

                                <div class="product-top d-flex">
                                    <a href="#" class="bi-heart-fill product-icon ms-auto"></a>
                                </div>

                                <div class="product-info d-flex">
                                    <div>
                                        <h5 class="product-title mb-0">
                                            <a href="product-detail.php?name=<?php echo $row['name'];?>&price=<?php echo $row['price'];?>" class="product-title-link"><?php echo $row['name'];?></a>
                                        </h5>

                                        <p class="product-p"><?php echo $row['detail'];?>e</p>
                                    </div>

                                    <small class="product-price text-muted ms-auto"><?php echo $row['price'];?></small>
                                </div>
                            </div>
                        </div>
<?php } ?>
                    </div>
                </div>
                <div class="ab col-12 text-center">
                <a href="products.php" class="view-all">View All Products</a>
            </div>
            </section>

            <div class="pag">
            <?php
                $total_row_query = "SELECT COUNT(*) as count FROM products";
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