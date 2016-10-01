<?php
include("connectphp.php");
session_start();
$user=$_SESSION["login"];
$type=$_SESSION["type"];
/*$sub="select sub1,sub2,sub3,sub4,sub5,sub6 from student_info,user,student_detail where user.username=student_detail.username and student_detail.branch=student_info.branch and student_detail.sem=student_info.sem and user.username='{$user}';";
	$sub_result=mysqli_query($con,$sub);

while($row=$sub_result->fetch_assoc()){*/
$sub1="env";
$sub2="gk";
$sub3="lit";
$sub4="aff";
$sub5="sports";
$sub6="iq";
//}
	
if($_GET['subj']=='1')
	$value=$sub1;
else if($_GET['subj']=='2')
	$value=$sub2;
else if($_GET['subj']=='3')
	$value=$sub3;
else if($_GET['subj']=='4')
	$value=$sub4;
else if($_GET['subj']=='5')
	 $value=$sub5;
else if($_GET['subj']=='6')
	$value=$sub6;
	
$sql="select ques,ans1,ans2,ans3,ans4 from user,question,student_detail where student_detail.username='{$user}' and student_detail.branch=question.branch and student_detail.sem=question.sem and question.subject='{$value}';";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$ques1=$row["ques"];
$ans1=$row["ans1"];
$ans2=$row["ans2"];
$ans3=$row["ans3"];
$ans4=$row["ans4"];

if(isset($_SESSION["login"])){
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title><?php echo $user; ?> | quiz</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- daterange picker --
    <link href="plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- iCheck for checkboxes and radio inputs -->
    <link href="plugins/iCheck/all.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap Color Picker -->
    <link href="plugins/colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet"/>
    <!-- Bootstrap time Picker --
    <link href="plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet"/>
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="plugins/iCheck/all.css" rel="stylesheet" type="text/css" />

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
        <a href="studentphp.php" class="logo"><b>Welcome!</b> Student</a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
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
            <li class="treeview">
              <a href="studentphp.php">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>
            <li>
              <a href="logout.php">
                <i class="fa fa-th"></i> <span>Log out</span>
              </a>
            </li>
		   </ul>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1><?php 
		  echo $value; ?></h1>
          <ol class="breadcrumb">
            <li><a href="studentphp.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Quiz</a></li>
          </ol>
        </section>

        <!-- Main content -->
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-6"><!-- /.box -->
              <!-- iCheck -->
              <div class="box box-danger">
                 <h3 class="box-title">  Q. <?php echo $ques1; ?> </h3>
                </div>
               </div>
              </div> 
          <div class="row">
            <div class="col-md-6"><!-- /.box -->
              <!-- iCheck -->
              <div class="box box-success">
                <div class="box-body">
                  <!-- radio -->
                  <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon">
                    <input type="radio" name="r3" class="flat-red"/>
                    </span>
                    <input type="text" class="form-control" value="<?php echo $ans1; ?>" disabled/>
                    </div>
                    <br/>
                    <div class="input-group">
                    <span class="input-group-addon">
                    <input type="radio" name="r3" class="flat-red"/>
                    </span>
                    <input type="text" class="form-control" value="<?php echo $ans2; ?>" disabled/>
                    </div>
                    <br/>
                    <div class="input-group">
                    <span class="input-group-addon">
                    <input type="radio" name="r3" class="flat-red"/>
                    </span>
                    <input type="text" class="form-control" value="<?php echo $ans3; ?>" disabled/>
                    </div>
                    <br/>
                    <div class="input-group">
                    <span class="input-group-addon">
                    <input type="radio" name="r3" class="flat-red"/>
                    </span>
                    <input type="text" class="form-control" value="<?php echo $ans4; ?>" disabled/>
                    </div>
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
       		</div><!-- /.box-body -->
           </div><!-- btn-warning/.box -->
<button type="button" class="btn bg-green" ><!--<a href="main.php">-->Submit</a><span class="fa fa-caret-down"></span></button>
<button type="button" class="btn bg-yellow">Save<span class="fa fa-caret-down"></span></button>
<button type="button" class="btn bg-red">Skip<span class="fa fa-caret-down"></span></button>
          
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
    <!-- InputMask -->
    <script src="plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>
    <script src="plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
    <script src="plugins/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>
    <!-- date-range-picker --
    <script src="plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- bootstrap color picker -->
    <script src="plugins/colorpicker/bootstrap-colorpicker.min.js" type="text/javascript"></script>
    <!-- bootstrap time picker --
    <script src="plugins/timepicker/bootstrap-timepicker.min.js" type="text/javascript"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- iCheck 1.0.1 -->
    <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js" type="text/javascript"></script>
    <!-- Page script -->
    <script type="text/javascript">
      $(function () {
        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
          checkboxClass: 'icheckbox_minimal-blue',
          radioClass: 'iradio_minimal-blue'
        });
    //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass: 'iradio_flat-green'
        });

      });
    </script>

  </body>
</html>

<?php
}
else{
echo "You are not login. Please click <a href='landing_page.html'>Log in</a> to login";
exit;
}
/*session_destroy();
mysqli_close($con);*/
?>