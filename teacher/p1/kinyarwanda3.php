<!DOCTYPE html>
<html>
<head>
  <title>TEACHER SIDE</title>
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
  table{
    width: 80%;

  }
</style>
<body>
  <div class="left">
    <?php include('includes/leftbar.php');?>
  </div>
  <br>
  <div class="right"><center>
  <h1>THIRED TERM(III)</h1>
  <a href="kinyarwanda.php"><button>Term I</button></a>
  <a href="kinyarwanda2.php"><button>Term II</button></a>
  <a href="kinyarwanda3.php"><button>Term III</button></a>
  </center>
  <form method="POST">
    <?php
    include 'conn.php';
    $sql1="SELECT * FROM p1 ORDER BY student_name ASC";
    $qw=mysqli_query($connect,$sql1);
    ?>
  <label>student name:</label><br>
  <select name="name">
  <?php
  if (isset($_POST['add'])) {
    $stn=$_POST['name'];
    $math=$_POST['math'];
    $exam=$_POST['math_exam'];
    $update="UPDATE p1 SET kinyarwanda3='$math', kinyarwanda3_exam='$exam' WHERE student_name='$stn'";
    $result_number=  mysqli_query($connect, $update) or die(mysqli_error($connect));
    if ($result_number) {
      header('location:kinyarwanda.php');
         }
  }
  while ($rot=mysqli_fetch_array($qw)) {
    # code...
  
  ?>
    <option value="<?php echo $rot['student_name']; ?>"><?php echo $rot['student_name'];; }?></option></select>
    <label>kinyarwanda test</label>
    <input type="number" name="math">
    <label>kinyarwanda exam</label>
    <input type="number" name="math_exam">
    <button name="add">add marks</button>
  

  </form>
  <table border="1" >
    <br><br>
      <tr>
        <th>Number</th>
        <th>student name</th>
        <th>kinyarwanda test</th>
        <th>kinyarwanda examination</th>
        <th>total </th>
      </tr>
  <?php
  include 'conn.php';
  error_reporting(0);
  ini_set('display_errors', 0);
  $query="SELECT * FROM p1 ORDER BY student_name ASC";
  $check=mysqli_query($connect,$query);
    while ($row=mysqli_fetch_array($check)) {
    $i++;
  $s_n=$row['student_name'];
  $math=$row['kinyarwanda3'];
  $m=$row['kinyarwanda3_exam'];
  $total=$math+$m;
  ?>
      <tr>
      
        <td><?php echo "$i"; ?></td>
        <td><?php echo "$s_n"; ?></td>
        <td><?php echo "$math"; ?></td>
        <td><?php echo "$m"; ?></td>
        <td><?php echo "$total"; ?></td>
      </tr>
            <?php
      }
      ?>
    </table>
    

  
</div>
</body>
</html>