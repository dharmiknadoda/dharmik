<?php
    include('conn.php'); 
    if(isset($_GET['delete']))
    {
      $id = $_GET['id'];
      $query = "delete from buy_m where id = '$id'";
      $result = mysqli_query($conn,$query);

      if($result)
      {
        header('location:buy_medicine.php');
      }
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
                margin-left: 315px;
            }
            .tabl{
                display: flex;
                justify-content: center;
            }
            table{
                text-align: center;
                margin-top: 100px;
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
            .sele{
                width: 500px;
                height: 50px;
                text-align: center;
                font-weight: 700;
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
       
    <form action="" method="post">
    <div class="page-wrapper" style="background-color: white;">
        <h2 class="hhh">Buy Medicine Data</h2>
            <div class="tabl">
                <table border="1">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Medicine Name</th>
                        <th>MRP ( $ )</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Delivery Date</th>
                        <th colspan="2">Query</th>
                    </tr>

            <?php 
                    include('conn.php'); 
                                $select = 'select * from buy_m';
                                $query = mysqli_query($conn , $select);
                                
                                if($query)
                                {
                                    while($row = mysqli_fetch_assoc($query))
                                    {
                                        $id = $row['id'];
                                        $name = $row['name'];
                                        $m_name = $row['m_name'];
                                        $mrp = $row['mrp'];
                                        $qun = $row['qun'];
                                        $total = $row['total'];
                                        $e_date = $row['e_date'];
                            }
                                echo '<tr>
                                    <td>'.$id.'</td>
                                    <td>'.$name.'</td>
                                    <td>'.$m_name.'</td>
                                    <td>'.$mrp.'</td>
                                    <td>'.$qun.'</td>
                                    <td>'.$total.'</td>
                                    <td>'.$e_date.'</td>
                                    <td>'.'<button type="button" class="btn"><a href="buy_medicine.php?delete=' . $id . '">Delete</a></button>'.'</td>
                                </tr>';

                            }
                    ?>
                </table>
            </div>
            </form>
    </div>
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