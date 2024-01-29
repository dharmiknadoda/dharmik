<?php 
    include('conn.php');
    if(isset($_POST['submit']))
    {   
        $id=$_GET['id'];
        $name = $_POST['name'];
        $m_name = $_POST['m_name'];
        $m_code = $_POST['m_code'];
        $tabs = $_POST['tabs'];
        $qun = $_POST['qun'];
        $e_date = $_POST['e_date'];
        $mrp = $_POST['mrp'];
        $rate = $_POST['rate'];
        $details = $_POST['details'];
        $img = $_POST['img'];
        echo $id;
        if(isset($_GET['id']))
        {   
            $update = "update medicine set name='$name', m_name='$m_name' , m_code='$m_code' , tabs='$tabs' , qun='$qun' , e_date='$e_date' , mrp='$mrp' , rate='$rate', details='$details', img='$img' where id ='$id'";
                echo "ech";
            $result = mysqli_query($conn , $update);    
        }
        else{
        $insert = "insert into medicine(name,m_name,m_code,tabs,qun,e_date,mrp,rate,details,img) values('$name','$m_name' , '$m_code','$tabs','$qun','$e_date','$mrp','$rate','$details','$img')";
        $result = mysqli_query($conn , $insert);
        }
        if($result)
        {
            header('location:medicine.php');
        }
    }
    if(isset($_GET['delete']))
    {
      $id = $_GET['delete'];
      $query = "delete from medicine where id = '$id'";
      $result = mysqli_query($conn,$query);

      if($result)
      {
        header('location:medicine.php');
      }
    }
    
        if(isset($_GET['filter']) && isset($_GET['filter_btn'])) {
            $_SESSION['filter'] = $_GET['filter'];
            $filtername = $_SESSION['filter'];
            $sql = "SELECT * FROM `medicine` WHERE `name` LIKE '%$filtername%'";
            $query = mysqli_query($conn , $sql);
        }else
        {
            $select = 'select * from medicine';
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
                border: 2px solid #00c6a9;
                font-weight: 800;
                color: black;
            }
            .bun{
                margin-top: 30px;
                width: 1000px;
                height: 50px;
                background-color: #00c6a9;
                border: 2px solid #00c6a9;
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
                border: 1px solid red;
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
                border: 2px solid #00c6a9;
                padding: 5px;
                margin-left: 135px;
                margin-bottom: 10px;
                width: 865px !important;
                text-align: left !important;
            }
            .fbutn{
                padding: 12px;
                width: 130px;
                background-color: #00c6a9;
                border: 2px solid #00c6a9;
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
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
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
        <h1 class="hh">Add Medicine</h1>
            <form action="" class="fro" method="post" style="background-color: white;">
              <div>
                <input type="text" name="name" placeholder="Full Name">
                <input type="text" name="m_name" placeholder="Medicine Name">
                <input type="text" name="m_code" placeholder="Medicine Code">
                <input type="text" name="tabs" placeholder="Tabs">
              </div>
              <div>
                <input type="text" name="qun" placeholder="Quantity">
                <input type="date" name="e_date" placeholder="Expiry Date">
                <input type="text" name="mrp" placeholder="MRP">
                <input type="text" name="rate" placeholder="Rate">
                <input type="text" name="details" placeholder="Detail">
                <input class="fi" type="file" name="img" class="message-box" placeholder="Message">
              </div>
              <div class="btn_box">
                <button class="bun" type="submit" name="submit">
                  SEND
                </button>
              </div>
            </form>
            

    <h2 class="hhh">All Medicine Data</h2>
    <div class="main"  style="margin-top: 100px;">
        <form action="">
            <input type="text" name="filter" class="filter">
            <button type="submit" name="filter_btn" class="fbutn">Filter</button>
        </form>
            <div class="tabl">
                <table border="1">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Medicine Name</th>
                        <th>Medicine Code</th>
                        <th>Tabs</th>
                        <th>Quantity</th>
                        <th>Expiry Date</th>
                        <th>MRP ( $ )</th>
                        <th>Rate ( % )</th>
                        <th>Detail</th>
                        <th colspan="2">Query</th>
                    </tr>

                    <?php 

                        if($query)
                        {
                            while($row = mysqli_fetch_assoc($query))
                            {
                                $id = $row['id'];
                                $name = $row['name'];
                                $m_name = $row['m_name'];
                                $m_code = $row['m_code'];
                                $tabs = $row['tabs'];
                                $qun = $row['qun'];
                                $e_date = $row['e_date'];
                                $mrp = $row['mrp'];
                                $rate = $row['rate'];
                                $details = $row['details'];
                            echo '<tr>
                                    <td>'.$id.'</td>
                                    <td>'.$name.'</td>
                                    <td>'.$m_name.'</td>
                                    <td>'.$m_code.'</td>
                                    <td>'.$tabs.'</td>
                                    <td>'.$qun.'</td>
                                    <td>'.$e_date.'</td>
                                    <td>'.$mrp.'</td>
                                    <td>'.$rate.'</td>
                                    <td>'.$details.'</td>
                                    <td>'.'<button type="button" class="btn"><a href="medicine.php?delete=' . $id . '">Delete</a></button>'.'</td>
                                    <td>'.'<button type="button" class="btn btnn"><a href="medicine.php?id=' . $id . '">Update</a></button>'.'</td>
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