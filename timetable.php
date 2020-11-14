<?php

include 'db2.php';

if(isset($_POST['btn_add']))
 {

    $m11=$_POST['11'];
    $t21=$_POST['21'];
    $w31=$_POST['31'];
    $t41=$_POST['41'];
    $f51=$_POST['51'];

    $m12=$_POST['12'];
    $t22=$_POST['22'];
    $w32=$_POST['32'];
    $t42=$_POST['42'];
    $f52=$_POST['52'];

    $m13=$_POST['13'];
    $t23=$_POST['23'];
    $w33=$_POST['33'];
    $t43=$_POST['43'];
    $f53=$_POST['53'];

    $m14=$_POST['14'];
    $t24=$_POST['24'];
    $w34=$_POST['34'];
    $t44=$_POST['44'];
    $f54=$_POST['54'];

    $m15=$_POST['15'];
    $t25=$_POST['25'];
    $w35=$_POST['35'];
    $t45=$_POST['45'];
    $f55=$_POST['55'];

    mysqli_query($con,"INSERT INTO `timetable_db`(`monday`,`tuesday`,`wednesday`,`thursday`,`friday`,`sem`) VALUES ('$m11','$t21','$w31','$t41','$f51','1')");
    mysqli_query($con,"INSERT INTO `timetable_db`(`monday`,`tuesday`,`wednesday`,`thursday`,`friday`,`sem`) VALUES ('$m12','$t22','$w32','$t42','$f52','1')");
    mysqli_query($con,"INSERT INTO `timetable_db`(`monday`,`tuesday`,`wednesday`,`thursday`,`friday`,`sem`) VALUES ('$m13','$t23','$w33','$t43','$f53','1')");
    mysqli_query($con,"INSERT INTO `timetable_db`(`monday`,`tuesday`,`wednesday`,`thursday`,`friday`,`sem`) VALUES ('$m14','$t24','$w34','$t44','$f54','1')");
    mysqli_query($con,"INSERT INTO `timetable_db`(`monday`,`tuesday`,`wednesday`,`thursday`,`friday`,`sem`) VALUES ('$m15','$t25','$w35','$t45','$f55','1')");
    

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
    <title>Time Tables</title>
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
          <h1><i class="fa fa-th-list"></i> Time Table</h1>
          <p>Add Time Table</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        </ul>
      </div>
       <form method="POST" name="RegForm" enctype="multipart/form-data">
        <div class="clearfix"></div>
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">#</h3>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>#</th>
                  <th>1</th>
                  <th>2</th>
                  <th>3</th>
                  <th>4</th>
                  <th>5</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Monday</td>
                   <td> <select class="form-control" id="exampleSelect1" name="11">
                      <option>Choose subject</option>
                      <?php
                      $result14="SELECT * FROM `subject_db` where sem_id='1'";
                      $add14=mysqli_query($con,$result14);
                      while ($row14=mysqli_fetch_assoc($add14)) { ?>
                      <option value="<?php echo $row14['sub_name']; ?>"><?php echo $row14["sub_name"]; ?></option>
                      <?php } ?>
                    </select></td>
                  <td> <select class="form-control" id="m01" name="12">
                      <option>Choose subject</option>
                      <?php
                      $result1="SELECT * FROM `subject_db` where sem_id='1'";
                      $add1=mysqli_query($con,$result1);
                      while ($row1=mysqli_fetch_assoc($add1)) { ?>
                      <option value="<?php echo $row1['sub_name']; ?>"><?php echo $row1["sub_name"]; ?></option>
                      <?php } ?>
                    </select></td>
                    <td> <select class="form-control" id="m02" name="13">
                      <option>Choose subject</option>
                      <?php
                      $result2="SELECT * FROM `subject_db` where sem_id='1'";
                      $add2=mysqli_query($con,$result2);
                      while ($row2=mysqli_fetch_assoc($add2)) { ?>
                      <option value="<?php echo $row2['sub_name']; ?>"><?php echo $row2["sub_name"]; ?></option>
                      <?php } ?>
                    </select></td>
                    <td> <select class="form-control" id="m03" name="14">
                      <option>Choose subject</option>
                      <?php
                      $result3="SELECT * FROM `subject_db` where sem_id='1'";
                      $add3=mysqli_query($con,$result3);
                      while ($row3=mysqli_fetch_assoc($add3)) { ?>
                      <option value="<?php echo $row3['sub_name']; ?>"><?php echo $row3["sub_name"]; ?></option>
                      <?php } ?>
                    </select></td>
                    <td> <select class="form-control" id="m04" name="15">
                      <option>Choose subject</option>
                      <?php
                      $result4="SELECT * FROM `subject_db` where sem_id='1'";
                      $add4=mysqli_query($con,$result4);
                      while ($row4=mysqli_fetch_assoc($add4)) { ?>
                      <option value="<?php echo $row4['sub_name']; ?>"><?php echo $row4["sub_name"]; ?></option>
                      <?php } ?>
                    </select></td>
                </tr>
              <tr>
                  <td>Tuesday</td>
                  <td> <select class="form-control" id="t00" name="21">
                      <option>Choose subject</option>
                      <?php
                      $result4="SELECT * FROM `subject_db` where sem_id='1'";
                      $add4=mysqli_query($con,$result4);
                      while ($row4=mysqli_fetch_assoc($add4)) { ?>
                      <option value="<?php echo $row4['sub_name']; ?>"><?php echo $row4["sub_name"]; ?></option>
                      <?php } ?>
                    </select></td>
                  <td> <select class="form-control" id="t01" name="22">
                      <option>Choose subject</option>
                      <?php
                      $result1="SELECT * FROM `subject_db` where sem_id='1'";
                      $add1=mysqli_query($con,$result1);
                      while ($row1=mysqli_fetch_assoc($add1)) { ?>
                      <option value="<?php echo $row1['sub_name']; ?>"><?php echo $row1["sub_name"]; ?></option>
                      <?php } ?>
                    </select></td>
                    <td> <select class="form-control" id="t02" name="23">
                      <option>Choose subject</option>
                      <?php
                      $result2="SELECT * FROM `subject_db` where sem_id='1'";
                      $add2=mysqli_query($con,$result2);
                      while ($row2=mysqli_fetch_assoc($add2)) { ?>
                      <option value="<?php echo $row2['sub_name']; ?>"><?php echo $row2["sub_name"]; ?></option>
                      <?php } ?>
                    </select></td>
                    <td> <select class="form-control" id="t03" name="24">
                      <option>Choose subject</option>
                      <?php
                      $result3="SELECT * FROM `subject_db` where sem_id='1'";
                      $add3=mysqli_query($con,$result3);
                      while ($row3=mysqli_fetch_assoc($add3)) { ?>
                      <option value="<?php echo $row3['sub_name']; ?>"><?php echo $row3["sub_name"]; ?></option>
                      <?php } ?>
                    </select></td>
                    <td> <select class="form-control" id="t04" name="25">
                      <option>Choose subject</option>
                      <?php
                      $result4="SELECT * FROM `subject_db` where sem_id='1'";
                      $add4=mysqli_query($con,$result4);
                      while ($row4=mysqli_fetch_assoc($add4)) { ?>
                      <option value="<?php echo $row4['sub_name']; ?>"><?php echo $row4["sub_name"]; ?></option>
                      <?php } ?>
                    </select></td>
                </tr>
                <tr>
                  <td>Wednesday</td>
                 <td> <select class="form-control" id="exampleSelect1" name="31">
                      <option>Choose subject</option>
                      <?php
                      $result4="SELECT * FROM `subject_db` where sem_id='1'";
                      $add4=mysqli_query($con,$result4);
                      while ($row4=mysqli_fetch_assoc($add4)) { ?>
                      <option value="<?php echo $row4['sub_name']; ?>"><?php echo $row4["sub_name"]; ?></option>
                      <?php } ?>
                    </select></td>
                  <td> <select class="form-control" id="exampleSelect1" name="32">
                      <option>Choose subject</option>
                      <?php
                      $result1="SELECT * FROM `subject_db` where sem_id='1'";
                      $add1=mysqli_query($con,$result1);
                      while ($row1=mysqli_fetch_assoc($add1)) { ?>
                      <option value="<?php echo $row1['sub_name']; ?>"><?php echo $row1["sub_name"]; ?></option>
                      <?php } ?>
                    </select></td>
                    <td> <select class="form-control" id="exampleSelect1" name="33">
                      <option>Choose subject</option>
                      <?php
                      $result2="SELECT * FROM `subject_db` where sem_id='1'";
                      $add2=mysqli_query($con,$result2);
                      while ($row2=mysqli_fetch_assoc($add2)) { ?>
                      <option value="<?php echo $row2['sub_name']; ?>"><?php echo $row2["sub_name"]; ?></option>
                      <?php } ?>
                    </select></td>
                    <td> <select class="form-control" id="exampleSelect1" name="34">
                      <option>Choose subject</option>
                      <?php
                      $result3="SELECT * FROM `subject_db` where sem_id='1'";
                      $add3=mysqli_query($con,$result3);
                      while ($row3=mysqli_fetch_assoc($add3)) { ?>
                      <option value="<?php echo $row3['sub_name']; ?>"><?php echo $row3["sub_name"]; ?></option>
                      <?php } ?>
                    </select></td>
                    <td> <select class="form-control" id="exampleSelect1" name="35">
                      <option>Choose subject</option>
                      <?php
                      $result4="SELECT * FROM `subject_db` where sem_id='1'";
                      $add4=mysqli_query($con,$result4);
                      while ($row4=mysqli_fetch_assoc($add4)) { ?>
                      <option value="<?php echo $row4['sub_name']; ?>"><?php echo $row4["sub_name"]; ?></option>
                      <?php } ?>
                    </select></td>
                </tr>
                <tr>
                  <td>Thursday</td>
                 <td> <select class="form-control" id="exampleSelect1" name="41">
                      <option>Choose subject</option>
                      <?php
                      $result4="SELECT * FROM `subject_db` where sem_id='1'";
                      $add4=mysqli_query($con,$result4);
                      while ($row4=mysqli_fetch_assoc($add4)) { ?>
                      <option value="<?php echo $row4['sub_name']; ?>"><?php echo $row4["sub_name"]; ?></option>
                      <?php } ?>
                    </select></td>
                  <td> <select class="form-control" id="exampleSelect1" name="42">
                      <option>Choose subject</option>
                      <?php
                      $result1="SELECT * FROM `subject_db` where sem_id='1'";
                      $add1=mysqli_query($con,$result1);
                      while ($row1=mysqli_fetch_assoc($add1)) { ?>
                      <option value="<?php echo $row1['sub_name']; ?>"><?php echo $row1["sub_name"]; ?></option>
                      <?php } ?>
                    </select></td>
                    <td> <select class="form-control" id="exampleSelect1" name="43">
                      <option>Choose subject</option>
                      <?php
                      $result2="SELECT * FROM `subject_db` where sem_id='1'";
                      $add2=mysqli_query($con,$result2);
                      while ($row2=mysqli_fetch_assoc($add2)) { ?>
                      <option value="<?php echo $row2['sub_name']; ?>"><?php echo $row2["sub_name"]; ?></option>
                      <?php } ?>
                    </select></td>
                    <td> <select class="form-control" id="exampleSelect1" name="44">
                      <option>Choose subject</option>
                      <?php
                      $result3="SELECT * FROM `subject_db` where sem_id='1'";
                      $add3=mysqli_query($con,$result3);
                      while ($row3=mysqli_fetch_assoc($add3)) { ?>
                      <option value="<?php echo $row3['sub_name']; ?>"><?php echo $row3["sub_name"]; ?></option>
                      <?php } ?>
                    </select></td>
                    <td> <select class="form-control" id="exampleSelect1" name="45">
                      <option>Choose subject</option>
                      <?php
                      $result4="SELECT * FROM `subject_db` where sem_id='1'";
                      $add4=mysqli_query($con,$result4);
                      while ($row4=mysqli_fetch_assoc($add4)) { ?>
                      <option value="<?php echo $row4['sub_name']; ?>"><?php echo $row4["sub_name"]; ?></option>
                      <?php } ?>
                    </select></td>
                </tr>
                <tr>
                  <td>Friday</td>
                 <td> <select class="form-control" id="exampleSelect1" name="51">
                      <option>Choose subject</option>
                      <?php
                      $result4="SELECT * FROM `subject_db` where sem_id='1'";
                      $add4=mysqli_query($con,$result4);
                      while ($row4=mysqli_fetch_assoc($add4)) { ?>
                      <option value="<?php echo $row4['sub_name']; ?>"><?php echo $row4["sub_name"]; ?></option>
                      <?php } ?>
                    </select></td>
                  <td> <select class="form-control" id="exampleSelect1" name="52">
                      <option>Choose subject</option>
                      <?php
                      $result1="SELECT * FROM `subject_db` where sem_id='1'";
                      $add1=mysqli_query($con,$result1);
                      while ($row1=mysqli_fetch_assoc($add1)) { ?>
                      <option value="<?php echo $row1['sub_name']; ?>"><?php echo $row1["sub_name"]; ?></option>
                      <?php } ?>
                    </select></td>
                    <td> <select class="form-control" id="exampleSelect1" name="53">
                      <option>Choose subject</option>
                      <?php
                      $result2="SELECT * FROM `subject_db` where sem_id='1'";
                      $add2=mysqli_query($con,$result2);
                      while ($row2=mysqli_fetch_assoc($add2)) { ?>
                      <option value="<?php echo $row2['sub_name']; ?>"><?php echo $row2["sub_name"]; ?></option>
                      <?php } ?>
                    </select></td>
                    <td> <select class="form-control" id="exampleSelect1" name="54">
                      <option>Choose subject</option>
                      <?php
                      $result3="SELECT * FROM `subject_db` where sem_id='1'";
                      $add3=mysqli_query($con,$result3);
                      while ($row3=mysqli_fetch_assoc($add3)) { ?>
                      <option value="<?php echo $row3['sub_name']; ?>"><?php echo $row3["sub_name"]; ?></option>
                      <?php } ?>
                    </select></td>
                    <td> <select class="form-control" id="exampleSelect1" name="55">
                      <option>Choose subject</option>
                      <?php
                      $result4="SELECT * FROM `subject_db` where sem_id='1'";
                      $add4=mysqli_query($con,$result4);
                      while ($row4=mysqli_fetch_assoc($add4)) { ?>
                      <option value="<?php echo $row4['sub_name']; ?>"><?php echo $row4["sub_name"]; ?></option>
                      <?php } ?>
                    </select></td>
                </tr>
              </tbody>
            </table>
             <button class="btn btn-primary" type="submit" name="btn_add"><i class="fa fa-fw fa-lg fa-check-circle"></i>Add</button>
          </div> 
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
  </body>
</html>