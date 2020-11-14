<?php
include 'db2.php';
$result="SELECT * FROM `stud_detail` join role_db on role_db.role_id=stud_detail.role_id where role_db.role='teacher'";
$add=mysqli_query($con,$result);

$result2="SELECT * FROM `semester_db`";
$add2=mysqli_query($con,$result2);

$su_id=$_GET['s_id'];
$query1=mysqli_query($con,"SELECT * FROM `stud_detail` join subject_db on subject_db.tea_id=stud_detail.role_id where sub_id='$su_id'");
$arr=mysqli_fetch_assoc($query1);
/*$query2=mysqli_query($con,"")*/
if(isset($_POST['submit']))
{
	$subj=$_POST['subject'];
    $teacher=$_POST['tname'];    
    $seme=$_POST['sem'];

     if ($seme==1 || $seme==2) {
      $year="1";
    }
    elseif ($seme==3 || $seme==4) {
      $year="2";
    }
    elseif ($seme==5 || $seme==6) {
      $year="3";
    }
    $query2=mysqli_query($con,"UPDATE `subject_db` SET `sub_name`='$subj',`tea_id`='$teacher',`sem_id`='$seme',`year`='$year' WHERE sub_id='$su_id'");

if($query2)
{
	echo "<script>alert('update success');</script>";
	header('location: subject_view.php');
}
else
{
  echo "<script>alert('update failed');</script>";

}}
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
    <title>Add Subject</title>
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
          <h1><i class="fa fa-dashboard"></i> Manage Subject</h1>
          <p>Add subjects and teachers details</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
        </ul>
      </div> <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Add Subject</h3>
            <div class="tile-body">
              <form method="POST">
                <div class="form-group">
                  <label class="control-label">Subject</label>
                  <input class="form-control" type="text" name="subject" placeholder="Enter Subject name" value="<?php echo $arr['sub_name']; ?>">
                </div>
                <div class="form-group">
                  <label class="control-label">Teachers Name</label>
                  <!-- <input class="form-control" type="text" name="tname" placeholder="Enter Teacher's name" value="<?php echo $arr['tea_id']; ?>" > -->

                 <select class="form-control" id="exampleSelect1" name="tname">
                      <option><?php echo $arr['nme']; ?></option>
                      <?php
                      while ($row=mysqli_fetch_assoc($add)) { ?>
                        <option value="<?php echo $row['role_id']; ?>"><?php echo $row["nme"]; ?></option>
                      <?php } ?>
                    </select>
              </div>
               <div class="form-group">
                    <label for="exampleSelect1">Select Semester</label>
                    <select class="form-control" id="exampleSelect2" name="sem">
                      <option><?php echo $arr['sem_id']; ?></option>
                      <?php
                      while ($row2=mysqli_fetch_assoc($add2)) { ?>
                      <option value="<?php echo $row2['sem_id']; ?>"><?php echo $row2["semester"]; ?></option>
                      <?php } ?>
                    </select>
                  </div>
              
                <button class="btn btn-primary" type="submit" name="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>update</button></div></div>

             
              </form>
            </div></div></div></div>
            <div>
                <a class="btn btn-primary" href="subject_view.php"><!-- <i class="fa fa-fw fa-lg fa-check-circle"></i> -->View Subjects</a>
              </div>
    </main>
   <?php include 'script.php'; ?>
  </body>
</html>