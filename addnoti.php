<?php 

include 'db2.php';
 if(isset($_POST['notifica']))
 {

    $noti=$_POST['notific'];
    $quali = $_POST['check'];
     $new_qual = implode(",",$quali);


    mysqli_query($con,"INSERT INTO `notification_db`(`content`,`to`) VALUES ('$noti','$new_qual')");

        echo "<script>alert('Added');</script>";
        echo "<script>window.history.back();</script>";
 }


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
    <title>Notification</title>
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
          <h1><i class="fa fa-dashboard"></i> Add Notification</h1>
          <p></p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
        </ul>
      </div>

       <div class="clearix"></div>
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Notification</h3>
            <div class="tile-body">
              <form class="row" avtion="#" method="POST">
                <div class="form-group col-md-3">
                  <label class="control-label">Content</label>
                  <input class="form-control" type="text" placeholder="Enter anything to notify" id="notif" name="notific" onkeyup="clearmsg('sp1')"><span id="sp1" style="color:#F00"></span>
                TO:<br>
                &nbsp;<input type="checkbox" value="teacher" name="check[]" onchange="clearmsg('sp6')">Teacher
               &nbsp;<input type="checkbox" value="student" name="check[]" onchange="clearmsg('sp6')">Student<br>
              <span id="sp6" style="color:#F00"></span><br>

                 </div>
                <!-- <div class="form-group col-md-3">
                  <label class="control-label">Date</label>
                  <input class="form-control" type="date" placeholder="Enter the date">
                </div> -->
                <div class="form-group col-md-4 align-self-end">
                  <button class="btn btn-primary" name="notifica" name="submit" onclick="return valid()"><i class="fa fa-fw fa-lg fa-check-circle"></i>Notify</button>
                </div>
              </form>
            </div>
        </div> <div>
                <a class="btn btn-primary" href="noti_view.php"><!-- <i class="fa fa-fw fa-lg fa-check-circle"></i> -->View Coming notification</a>
              </div>
          </div>
      </div>
    </main>
    <script type="text/javascript">
      function valid()
            {
              var name = document.getElementById('notif').value.trim();
              var qualification = document.getElementsByName('check[]');

               if (name=="") 
                {
                  document.getElementById('sp1').innerHTML = "Please Add Notification"; 
                  return false;
                }
               //checkbox
                  var flagc=0;
                  for(i=0;i<qualification.length;i++)
                    {
                      if(qualification[i].checked==true)
                      {
                        flagc=1;
                        break;
                      }
                    }
                  if(flagc==0) 
                    {
                      document.getElementById('sp6').innerHTML = "Select TO";
                      return false;
                    }
        
      function clearmsg(span)
              {
                document.getElementById(span).innerHTML="";
                return true;
              }
            }
    </script>
   <?php include 'script.php'; ?>
  </body>
</html>