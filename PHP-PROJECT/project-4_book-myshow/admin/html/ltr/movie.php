<?php 
    include('conn.php');
    if(isset($_POST['submit']) && isset($_FILES['poster']) && isset($_FILES['banner']))
    {
        $id = $_GET['id'];
        $movie_name = $_POST['movie_name'];
        $view = $_POST['view'];
        $language = $_POST['language'];
        $duration = $_POST['duration'];
        $type = $_POST['type'];
        $date = $_POST['date'];

        $poster = $_FILES['poster']['name'];
        $tmp_poster = $_FILES['poster']['tmp_name'];
        $banner = $_FILES['banner']['name'];
        $tmp_banner = $_FILES['banner']['tmp_name'];

    
    if(isset($_GET['id']))
        {   
            $update = "update movie set movie_name='$movie_name' , view='$view' , language='$language' , duration='$duration' , type='$type' , date='$date' , poster='$poster' , banner='$banner' where id ='$id'";
            $query = mysqli_query($conn , $update);    
        }
        else{
            $insert = "insert into movie(movie_name,view,language,duration,type,date,poster,banner) values('$movie_name','$view','$language','$duration','$type','$date','$poster','$banner')";
            $query = mysqli_query($conn , $insert);
        }
        if($query)
        {
            header('location:movie.php');
        }

    if(isset($_GET['delete']))
    {
      $id = $_GET['delete'];
      $query = "delete from movie where id = '$id'";
      $result = mysqli_query($conn,$query);

      if($result)
      {
        header('location:movie.php');
      }
    }
   
    
}
if(isset($_GET['filter']) && isset($_GET['filter_btn'])) {
    $_SESSION['filter'] = $_GET['filter'];
    $filtername = $_SESSION['filter'];
    $sql = "SELECT * FROM `movie` WHERE `movie_name` LIKE '%$filtername%'";
    $query = mysqli_query($conn , $sql);
}else
{
    $select = 'select * from movie';
    $query = mysqli_query($conn , $select);
}
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Matrix Admin Lite Free Versions Template by WrapPixel</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="../../assets/extra-libs/multicheck/multicheck.css">
    <link href="../../assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="../../dist/css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
        <style>
            
            .fro{
                margin-top: 50px;
                text-align: center;
            }
            input{
                width: 500px !important;
                height: 50px !important;
                margin-top: 20px !important;
                text-align: center;
                border: 2px solid red;
                font-weight: 800;
                color: black;
            }
            .bun{
                margin-top: 30px;
                width: 1000px;
                height: 50px;
                background-color: #F84464;
                border: 2px solid #F84464;
                font-weight: 800;
                color: white;
            }
            .bun:hover{
                background-color: white;
                color: black;
            }
            .hh{
                background-color: white;
                margin-top: 100px;
                text-align: center;
                font-family: 'Segoe Script';
            }
            .hhh{
                text-align: center;
                font-family: 'Segoe Script';
                margin-top: 200px;
                margin-bottom: -100px;
            }
            .fi{
                border: none;
            }
            .tabl{
                display: flex;
                justify-content: center;
            }
            table{
                text-align: center;
                /* margin-top: 100px; */
                width: 1000px;
            }
            th,tr,td{
                border: 1px solid black;
                padding-top: 10px;
                padding-bottom: 10px;
            }
            .btn{
                background-color: red;
                color: white;
                border-radius: 5px;
            }
            a{
                text-decoration: none;
                color: white;
            }
            a:hover{
                color: black;
            }
            .btn:hover{
                background-color: white;
                border: 1px solid #F84464;
            }
            .btnn{
                background-color: green;
                color: white;
            }
            .btnn:hover{
                background-color: white;
                border: 1px solid green;
            }
            .filter{
                border: 2px solid #F84464;
                padding: 5px;
                margin-left: 135px;
                margin-bottom: 10px;
                width: 865px !important;
                text-align: left !important;
            }
            .fbutn{
                padding: 12px;
                width: 130px;
                background-color: #F84464;
                border: 2px solid #F84464;
                color: white;
                font-weight: 600;
            }
            label{
                margin-top: 3px;
            }
            .ab{
                width: 500px !important;
                margin-top: 15px;
                border: 2px solid #F84464;
                height: 45px;
            }
        </style>
<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <?php 
            include('hearder.php');
        ?>
        <!-- ============================================================== -->
        <?php 
            include('nav.php');
        ?>
        <!-- ============================================================== -->
       
    <div class="page-wrapper" style="background-color: white;">
        <h1 class="hh">Add Movie</h1>
            <form action="" class="fro" method="post" enctype="multipart/form-data" style="background-color: white;">
            <div>
                <input type="text" name="movie_name" placeholder="Movie Name">
                <input type="text" name="view" placeholder="View">
            </div>
            <div>
                  <input type="text" name="duration" placeholder="Duration">
                  <input type="text" name="language" placeholder="language">
            </div>
            <div>
                  <input type="text" name="type" placeholder="Type">
                  <input type="date" name="date" placeholder="Date">
            </div>
            <div>
                    <div class="custom-file ab">
                        <input type="file" name="poster" class="custom-file-input inp">
                        <label class="custom-file-label" for="customFile" style="border: none;">Add Poster</label>
                    </div>
                    <div class="custom-file ab">
                        <input type="file" name="banner" class="custom-file-input inp">
                        <label class="custom-file-label" for="customFile" style="border: none;">Add Banner</label>
                    </div>
            </div>
              <div class="btn_box">
                <button class="bun" type="submit" name="submit">
                  SEND
                </button>
              </div>
            </form>
            
    <h2 class="hhh">All Movie Data</h2>   
    <div class="main"  style="margin-top: 100px;">
        <form action="">
            <input type="text" name="filter" class="filter">
            <button type="submit" name="filter_btn" class="fbutn">Filter</button>
        </form>
        <div class="tabl">
                <table border="1">
                    <tr>
                        <th>Id</th>
                        <th>Movie Name</th>
                        <th>view</th>
                        <th>language</th>
                        <th>duration</th>
                        <th>type</th>
                        <th>date</th>
                        <th colspan="2">Query</th>
                    </tr>

                    <?php 
                        

                        if($query)
                        {
                            while($row = mysqli_fetch_assoc($query))
                            {
                                $id = $row['id'];
                                $movie_name = $row['movie_name'];
                                $view = $row['view'];
                                $language = $row['language'];
                                $duration = $row['duration'];
                                $type = $row['type'];
                                $date = $row['date'];

                            echo '<tr>
                                    <td>'.$id.'</td>
                                    <td>'.$movie_name.'</td>
                                    <td>'.$view.'</td>
                                    <td>'.$language.'</td>
                                    <td>'.$duration.'</td>
                                    <td>'.$type.'</td>
                                    <td>'.$date.'</td>
                                    <td>'.'<button type="button" class="btn"><a href="movie.php?delete=' . $id . '">Delete</a></button>'.'</td>
                                    <td>'.'<button type="button" class="btn btnn"><a href="movie.php?id=' . $id . '">Update</a></button>'.'</td>
                                </tr>';

                            }
                        }
                    ?>
                </table>
            </div>
            </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../../dist/js/custom.min.js"></script>
    <!-- this page js -->
    <script src="../../assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="../../assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="../../assets/extra-libs/DataTables/datatables.min.js"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>

</body>

</html>