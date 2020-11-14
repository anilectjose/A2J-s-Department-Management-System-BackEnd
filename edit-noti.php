<?php
include 'db2.php';
$su_id=$_GET['s_id'];
$query1=mysqli_query($con,"SELECT * FROM `notification_db` where notification_id='$su_id'");
$arr=mysqli_fetch_assoc($query1);
/*$query2=mysqli_query($con,"")*/
if(isset($_POST['notifica']))
{
	$subj=$_POST['notific'];
    $query2=mysqli_query($con,"UPDATE `notification_db` SET `content`='$subj' WHERE notification_id='$su_id'");

if($query2)
{
	echo "<script>alert('update success');</script>";
	header('location: noti_view.php');
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
                  <input class="form-control" type="text" placeholder="Enter anything to notify" name="notific" value="<?php echo $arr['content']; ?>">
                </div>
                <!-- <div class="form-group col-md-3">
                  <label class="control-label">Date</label>
                  <input class="form-control" type="date" placeholder="Enter the date">
                </div> -->
                <div class="form-group col-md-4 align-self-end">
                  <button class="btn btn-primary" name="notifica"><i class="fa fa-fw fa-lg fa-check-circle"></i>Notify</button>
                </div>
              </form>
            </div>
        </div> <div>
                <a class="btn btn-primary" href="noti_view.php"><!-- <i class="fa fa-fw fa-lg fa-check-circle"></i> -->View Coming notification</a>
              </div>
          </div>
      </div>
    </main>
   <?php include 'script.php'; ?>
  </body>
</html>