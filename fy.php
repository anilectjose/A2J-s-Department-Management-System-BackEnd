
<?php
include 'db2.php';

$result=mysqli_query($con,"SELECT * FROM `subject_db` ORDER BY sub_id asc");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Mark Verify</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
<?php
include 'header.php';
?>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
   <?php
   include 'leftbar.php';
   ?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Internal Marks</h1>
          <p>Mark Verification</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Home</a></li>
        </ul>
      </div>
       <center><h1>Fifth  Semester</h1></center>
         <?php 
                $count=0;
                while ($row = mysqli_fetch_assoc($result)) { $count++;   ?>
      <div class="row">
        <div class="col-md-3">
          <div class="widget-small warning coloured-icon"><i class="icon fa fa-files-o fa-3x"></i>
            <div class="info">
              <h4><a href="third.php"><?php echo $row["sub_name"]; ?> </a></h4>
              <p><b>5B09CSC</b></p>
            </div>
          </div>
        </div>
  <?php } ?>
        </div>  
          <center><h1>Sixth Semester</h1></center>
           <?php 
                $count=0;
                while ($row = mysqli_fetch_assoc($result)) { $count++;   ?>
         <div class="row">
        <div class="col-md-3">
          <div class="widget-small warning coloured-icon"><i class="icon fa fa-files-o fa-3x"></i>
            <div class="info">
              <h4><a href="third.php"> <?php echo $row["sub_name"]; ?> </a></h4>
              <p><b>6B03CSC</b></p>
            </div>
          </div>
        </div>
  
                   <?php } ?>

        </div>
       
    </main>
   <?php include 'script.php'; ?>
  </body>
</html>