<?php
include 'db2.php';

$result=mysqli_query($con,"SELECT * FROM `leave_db` where result!='' ORDER BY leave_id desc");

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
    <title>leave</title>
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
          <h1><i class="fa fa-dashboard"></i> leave approval</h1>
          <p>Leave Approval Directory</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Home</a></li>
        </ul>
      </div>
       <div class="row">
        <?php while($row=mysqli_fetch_assoc($result)) { ?>
          <div class="col-md-4">
          <div class="tile">
          <h3 class="tile-title"><?php echo $row['name']; ?></h3>
          <div class="tile-body">
            
            <br>
            <?php
             echo "Date: ".$row['date']."<br>";
             echo " Name: ".$row['name']."<br>";
             echo "student/teacher id : ".$row['stu\tea_id']."<br>";
             echo "Reason : ".$row['reason']."<br>";    
             echo "No of Days : ".$row['no_of_days']."<br>";
            
            $val=$row['result'];
          if ($val=="Approved") 
          {

            ?>

            <font color=cyan size=6 face="timesnewroman"> <?php echo $row['result'];?></font> 
          <?php
                      } 

          else {
            ?>

            <font color=red size=6 face="timesnewroman"> <?php echo $row['result'];?></font> 
            <?php
          }
          
             ?>

             <br><br>
            

           </div></div></div>
         <?php } ?>
     </div>

    </main>
   <?php include 'script.php'; ?>
  </body>
</html>