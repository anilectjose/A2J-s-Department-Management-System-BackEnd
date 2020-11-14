     <?php
include 'db2.php';

$result=mysqli_query($con,"SELECT * FROM `complaint_db` ORDER BY complaint_id asc");

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
    <title>Complaints</title>
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
          <h1><i class="fa fa-dashboard"></i> Complaints</h1>
          <p>View Complaints</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Home</a></li>
        </ul>
      </div>
    <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title"> Detials</h3>
            <table class="table">
              <thead>
                <tbody>
                    <tr>
                  <th>Sl No.</th>  
                  <th>Date</th>
                  <th>Complaint</th>
                  <th>Action</th>
                </tr>
              </thead>
                <?php 
                $count=0;
                while ($row = mysqli_fetch_assoc($result)) { $count++;   ?>
              <tbody>
                <tr>
                  <td><?php echo $count; ?></td>
                  <td><?php echo $row["date"]; ?>
                  <td><?php echo $row["content"]; ?> </td>
                  <td> <?php
            $val=$row['reply'];
          if ($val=="Approved") 
          {

            ?>

            <font color=cyan size=6 face="timesnewroman"> <?php echo $row['reply'];?></font> 
          <?php
                      } 

          else {
            ?>

            <font color=red size=6 face="timesnewroman"> <?php echo $row['reply'];?></font> 
            <?php
          }
          
             ?>

             <br><br></td>
                </tr>
               <?php } ?>
               </tbody>
              </tbody>
            </table>
          </div>


    </main>
   <?php include 'script.php'; ?>
  </body>
</html>



            