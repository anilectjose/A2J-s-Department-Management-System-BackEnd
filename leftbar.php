<?php
/*include "db2.php";
$user=$_SESSION['login_admin'];
$name_query=mysqli_query($con,"SELECT * FROM admin_db WHERE admin_id='$user'");
$ary=mysqli_fetch_assoc($name_query);*/
?><aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://logos.flamingtext.com/City-Logos/Aja-Water-Logo.png" width="80" height="60" alt="User Image">
        <div>
          <p class="app-sidebar__user-name"><?php/* echo $ary['username'];*/ ?></p>
          <p class="app-sidebar__user-designation">Admin</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item active" href="dashboard.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Home</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Manage</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="addnoti.php"><i class="icon fa fa-circle-o"></i>Add Notification</a></li>
            <li><a class="treeview-item" href="subject.php"><i class="icon fa fa-circle-o"></i> Subject</a></li>
            <li><a class="treeview-item" href="check_detail.php"><i class="icon fa fa-circle-o"></i> Check Details</a></li>
            <li><a class="treeview-item" href="leave.php"><i class="icon fa fa-circle-o"></i> Leave Approval</a></li>
            <li><a class="treeview-item" href="timetable.php"><i class="icon fa fa-circle-o"></i> Add Time Table</a></li>
            <li><a class="treeview-item" href="complait.php"><i class="icon fa fa-circle-o"></i> View Complaints</a></li>
            <li><a class="treeview-item" href="ceverify-admin.php"><i class="icon fa fa-circle-o"></i> Verify Marks</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Websites</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="http://marymathacollege.org/"><i class="icon fa fa-circle-o"></i> College </a></li>
            <li><a class="treeview-item" href="http://www.kannuruniversity.ac.in/"><i class="icon fa fa-circle-o"></i> Kannur University</a></li>
<!--             <li><a class="treeview-item" href="form-samples.html"><i class="icon fa fa-circle-o"></i> </a></li>
 -->            <li><a class="treeview-item" href="https://www.google.com/"><i class="icon fa fa-circle-o"></i> Google Search</a></li>
          </ul>
        </li>
       <!--  <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Tables</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="table-basic.html"><i class="icon fa fa-circle-o"></i> Basic Tables</a></li>
            <li><a class="treeview-item" href="table-data-table.html"><i class="icon fa fa-circle-o"></i> Data Tables</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Pages</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="blank-page.html"><i class="icon fa fa-circle-o"></i> Blank Page</a></li>
            <li><a class="treeview-item" href="page-login.html"><i class="icon fa fa-circle-o"></i> Login Page</a></li>
            <li><a class="treeview-item" href="page-lockscreen.html"><i class="icon fa fa-circle-o"></i> Lockscreen Page</a></li>
            <li><a class="treeview-item" href="page-user.html"><i class="icon fa fa-circle-o"></i> User Page</a></li>
            <li><a class="treeview-item" href="page-invoice.html"><i class="icon fa fa-circle-o"></i> Invoice Page</a></li>
            <li><a class="treeview-item" href="page-calendar.html"><i class="icon fa fa-circle-o"></i> Calendar Page</a></li>
            <li><a class="treeview-item" href="page-mailbox.html"><i class="icon fa fa-circle-o"></i> Mailbox</a></li>
            <li><a class="treeview-item" href="page-error.html"><i class="icon fa fa-circle-o"></i> Error Page</a></li>
          </ul>
        </li>
        <li><a class="app-menu__item" href="docs.html"><i class="app-menu__icon fa fa-file-code-o"></i><span class="app-menu__label">Docs</span></a></li> -->
      </ul>
    </aside>