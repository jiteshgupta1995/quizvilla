<!DOCTYPE html>
<html>
<?php
include("connectphp.php");
session_start();
$user=$_SESSION["login"];
$type=$_SESSION["type"];
/*$user=mysqli_real_escape_string($con,$user);*/
$sql="select * from user where username='{$user}';";
$result=mysqli_query($con,$sql);
while($row=$result->fetch_assoc()){
$first=$row["first"];
$last=$row["last"];
$pass=$row["pass"];
$address=$row["address"];
$phone=$row["phone"];
$email=$row["email"];
}
$detail="select branch,sem from student_detail where username='{$user}';";
$det_result=mysqli_query($con,$detail);
while($row=$det_result->fetch_assoc()){
$branch=$row["branch"];
$sem=$row["sem"];
}

if(isset($_SESSION["login"])){
?>
  <head>
    <meta charset="UTF-8">
    <title><?php echo $user; ?> | Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="HTML/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="../../dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue"> 
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo"><b>Welcome!</b> Student</a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
            <ul class="dropdown-menu">
                 <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                    </ul>
                  </li>
<!--                  <li class="footer">
                    <a href="#">View all tasks</a>
                  </li>
-->                </ul>
              </li>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="avatar.jpg" class="user-image" alt="User Image"/>
                  <span class="hidden-xs"><?php echo $user; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="avatar.jpg" class="img-circle" alt="User Image" />
                    <p>
                      <?php echo $user; ?>
                      <small>Member since April. 2015</small>
                    </p>
                  </li>
                  <!-- Menu Body 
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
         </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="avatar.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p><?php echo $user; ?></p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
         <!-- sidebar menu: : style can be found in sidebar.less -->
         <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
              <a href="landing_page.php">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span><!-- <i class="fa fa-angle-left pull-right"></i>-->
              </a>
<!--              <ul class="treeview-menu">
                <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
              </ul>
-->            </li>
			<li class="treeview">
              <a href="quiz.php">
                <i class="fa fa-folder"></i> <span>Start Quiz  
				</span><small class="label pull-right bg-green">new</small>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>
			<li>
              <a href="#">
                <i class="fa fa-th"></i> <span>Edit Profile</span></small>
              </a>
            </li>
            <li>
              <a href="logout.php">
                <i class="fa fa-th"></i> <span>Log out</span>
              </a>
            </li>


               </ul>
      </section>  
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Edit Profile
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Edit Profile</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Profile</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" action="profile.php">
                  <div class="box-body">
                    <div class="form-group">
                      <label>First</label>
                      <input type="text" class="form-control" placeholder="<?php echo $first;?>" name="first"/>
                    </div>
                    <div class="form-group">
                      <label>Last</label>
                      <input type="text" class="form-control" placeholder="<?php echo $last;?>" name="last"/>
                    </div>
                    <div class="form-group">
                      <label>Email address</label>
                      <input type="email" class="form-control" placeholder="<?php echo $email;?>" name="email"/>
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" class="form-control" placeholder="<?php echo $pass;?>" name="pass"/>
                    </div>
                    <div class="form-group">
                      <label>Address</label>
                      <input type="text" class="form-control" placeholder="<?php echo $address;?>" name="address"/>
                    </div>
                    <div class="form-group">
                      <label>Phone</label>
                      <input type="text" class="form-control" placeholder="<?php echo $phone;?>" name="phone"/>
                    </div>
                    <div class="form-group">
                      <label>Branch</label>
                      <input type="text" class="form-control" placeholder="<?php echo $branch;?>" name="branch"/>
                    </div>
                    <div class="form-group">
                      <label>Semester</label>
                      <input type="text" class="form-control" placeholder="<?php echo $sem;?>" name="sem"/>
                    </div>
                   </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
                </form>
     <!--         </div><!-- /.box -->
      <!--            </form>
             </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; 2015-2016 <a href="https://plus.google.com/+JiteshGupta1995/about">Jitesh</a>.</strong> All rights reserved.
      </footer>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js" type="text/javascript"></script>
  </body>
<?php
}
else{
echo "You are not login. Please click <a href='landing_page.html'>Log in</a> to login";
exit;
}
$first=$_POST["first"];
$last=$_POST["last"];
$pass=$_POST["pass"];
$pass_hash=md5($pass);
$address=$_POST["address"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$pass=$_POST["pass"];
$branch=$_POST["branch"];
$sem=$_POST["sem"];

if(!empty($first)&&!empty($last)&&!empty($address)&&!empty($email)&&!empty($phone)&&!empty($pass)){
$sql1="update user set first='{$first}',last='{$last}',email='{$email}',address='{$address}',phone='{$phone}',pass='{$pass_hash}' where username='{$user}';";
$result1=mysqli_query($con,$sql1);
}
else
echo "Please Provide all details";
if(!empty($branch)&&!empty($sem)){
$upd="update student_detail set branch='{$branch}',sem='{$sem}' where username='{$user}';";
$upd_result=mysqli_query($con,$upd);
}
else
echo "Please Provide all details";
//session_destroy();
?>
</html>