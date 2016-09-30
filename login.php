<?php
error_reporting(E_ERROR | E_PARSE);
include("connectphp.php");
session_start();
$us=htmlentities($_POST["us"]);
$pass=$_POST["pass"];
$pass_hash=md5($pass);
$type=$_POST["type"];
$us=mysqli_real_escape_string($con,$us);
$pass=mysqli_real_escape_string($con,$pass);
$sql="select * from user where username='{$us}' and pass='{$pass_hash}' and type='{$type}';";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)<1)
	{
		echo "<center>Login Id does not exit or password is wrong. Try <a href='index.html'> Login</a> again</center>";
		exit;
	}
	else
	{
		$_SESSION["login"]=$us;
		$_SESSION["type"]=$type;
	}/*if (isset($_SESSION["login"]))
{
echo "<table align='center' cellspacing='10'><tr><td><h1 align='center'>Welcome to Online Exam</h1></td><td colspan=3 align='right'><h4>Howdy, {$us}</h4></td><td><a href='frontpage.html'>Logout</a></td></tr></table>";
}*/
if($type=="Student")
{
/*	$sub="select sub1,sub2,sub3,sub4,sub5,sub6 from student_info,user,student_detail where user.username=student_detail.username and student_detail.branch=student_info.branch and student_detail.sem=student_info.sem;";
	$sub_result=mysqli_query($con,$sub);
*/
header("Location:studentphp.php");
}
else{
header("Location:facultyphp.php");
exit;
}
?>
<?php
//mysqli_close($con);
?>