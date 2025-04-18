<?php
include 'connect.php';
session_start();
if (isset($_SESSION['t_name'])) {
?>
<!DOCTYPE html>
<html>
<head>
	<title>ADMIN HOMEPAGE</title>
	<div class="top">
		<?php include('includes/topbar.php');?>
	</div>
	 <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Student Result Management System | Dashboard</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css/toastr/toastr.min.css" media="screen" >
        <link rel="stylesheet" href="css/icheck/skins/line/blue.css" >
        <link rel="stylesheet" href="css/icheck/skins/line/red.css" >
        <link rel="stylesheet" href="css/icheck/skins/line/green.css" >
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
</head>
<style>
	.h{
		position: absolute;
		top: 20px;
		left: 470px;
	}
	.top{
		background: #494949;
		opacity: 0.8;
		border:2px solid black;
	}

	.left{
		height: 800px;
		background: #494949;
		border:2px solid black;
	}
	.right{
		height: 800px;
		width: 1110px;
		background: white;
		opacity: 0.8;
		position: absolute;
		top:55px;
		left: 270px;
		
		border:2px solid black;
		padding-left: 12px;
	}
	h1{
		color: grey;
	} 
</style>
<body>
	<div class="left">
	<?php include('includes/leftbar.php');?>
	</div>
	<div class="right"><center><br><br><br>
	<h2> choose school year</h2>
	<br><br><br>
	<a href="2021/class.php"><button>2021</button></a>
	<a><button>2022</button></a>
	<a><button>2023</button></a>
	<a><button>2024</button></a></center>
	</div>
	<script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/jquery-ui/jquery-ui.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->
        <script src="js/prism/prism.js"></script>
        <script src="js/waypoint/waypoints.min.js"></script>
        <script src="js/counterUp/jquery.counterup.min.js"></script>
        <script src="js/amcharts/amcharts.js"></script>
        <script src="js/amcharts/serial.js"></script>
        <script src="js/amcharts/plugins/export/export.min.js"></script>
        <link rel="stylesheet" href="js/amcharts/plugins/export/export.css" type="text/css" media="all" />
        <script src="js/amcharts/themes/light.js"></script>
        <script src="js/toastr/toastr.min.js"></script>
        <script src="js/icheck/icheck.min.js"></script>

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>
        <script src="js/production-chart.js"></script>
        <script src="js/traffic-chart.js"></script>
        <script src="js/task-list.js"></script>
        <script>
            $(function(){

                // Counter for dashboard stats
                $('.counter').counterUp({
                    delay: 10,
                    time: 1000
                });

                // Welcome notification
                toastr.options = {
                  "closeButton": true,
                  "debug": false,
                  "newestOnTop": false,
                  "progressBar": false,
                  "positionClass": "toast-top-right",
                  "preventDuplicates": false,
                  "onclick": null,
                  "showDuration": "300",
                  "hideDuration": "1000",
                  "timeOut": "5000",
                  "extendedTimeOut": "1000",
                  "showEasing": "swing",
                  "hideEasing": "linear",
                  "showMethod": "fadeIn",
                  "hideMethod": "fadeOut"
                }
                toastr["success"]( "Welcome to student Result Management System!");

            });
        </script>
    </body>

    

<style> .foot{text-align: center; */}</style>
</html>
</body>
</html>
<?php
}
else{
?>
<script>
  setTimeout("location.href='index.php'",3000);
</script>
<?php
}
?>