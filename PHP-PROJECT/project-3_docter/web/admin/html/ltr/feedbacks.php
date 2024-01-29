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
    <link href="../../assets/libs/jquery-steps/jquery.steps.css" rel="stylesheet">
    <link href="../../assets/libs/jquery-steps/steps.css" rel="stylesheet">
    <link href="../../dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
        <style>
            .box{
                margin-left: 200px;
                border: 2px solid #00c6a9;
                width: 700px;
                margin-top: 50px;
                
            }
            .main{
                display: flex;
                justify-content: center;
            }
            h2{
                text-align: center;
                margin-left: 200px;
                margin-top: 50px;
            }
            .btn{
                margin-left: 510px;
                width: 700px;
                height: 50px;
                background-color: #00c6a9;
                color: black;
                font-weight: 800;
                margin-top: 20px;
                margin-bottom: -20px;
            }
            a{
                color: black;
            }
        </style>
<body>
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

<!-- <div class="container px-0"> -->
        <h2 style="font-family: Segoe Script;">
          Your <span style="color: #00c6a9;">Feedback</span>
        </h2>
    <?php 
            include('conn.php');

                $select = 'select * from feedback';
                $query = mysqli_query($conn , $select);

            while($row=mysqli_fetch_assoc($query))
            { ?>
        <div class="main">
            <div class="box">
              <div class="client_info">
                <div class="client_name">
                <h3>
                  <?php echo $row['name'];?><span style="color: silver;font-size: 15px; margin-left: 10px;">(<?php echo $row['role'];?>)</span>
                </h3>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p><?php echo $row['feedback'];?></p>
            </div>
        </div>
      <?php } ?>

    </div>
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
    <script src="../../assets/libs/jquery-steps/build/jquery.steps.min.js"></script>
    <script src="../../assets/libs/jquery-validation/dist/jquery.validate.min.js"></script>
    <script>
        // Basic Example with form
        var form = $("#example-form");
        form.validate({
            errorPlacement: function errorPlacement(error, element) { element.before(error); },
            rules: {
                confirm: {
                    equalTo: "#password"
                }
            }
        });
        form.children("div").steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "slideLeft",
            onStepChanging: function (event, currentIndex, newIndex) {
                form.validate().settings.ignore = ":disabled,:hidden";
                return form.valid();
            },
            onFinishing: function (event, currentIndex) {
                form.validate().settings.ignore = ":disabled";
                return form.valid();
            },
            onFinished: function (event, currentIndex) {
                alert("Submitted!");
            }
        });


    </script>
</body>

</html>