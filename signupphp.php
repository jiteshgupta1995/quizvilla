<?php
error_reporting(E_ERROR | E_PARSE);

include("connectphp.php");

$first=htmlentities($_POST["first"]);
$last=htmlentities($_POST["last"]);
$email=htmlentities($_POST["email"]);
$address=htmlentities($_POST["address"]);
$phone=htmlentities($_POST["phone"]);
$user=htmlentities($_POST["user"]);
$pass=htmlentities($_POST["pass"]);
$pass_hash=md5($pass);
$type=htmlentities($_POST["type"]);
$branch=htmlentities($_POST["branch"]);


$rs=mysqli_query($con,"select * from user where username='$user';");
if (mysqli_num_rows($rs)>0)
{
	echo "<br/><br/><br/>Login Id Already Exist";
	exit;
	header("Location:signup.html");
}
else{
/*	if(!empty($user)&&!empty($pass)&&!empty($address)&&!empty($phone)&&!empty($first)&&!empty($last)&&!empty($type)&&!empty($email)&&!empty($branch))
	{*/
$sql="insert into user(first,last,email,username,pass,address,phone,type)values('{$first}','{$last}','{$email}','{$user}','{$pass_hash}','{$address}',{$phone},'{$type}');";
$result=mysqli_query($con,$sql);
if($type=="Student")
{
$sem=$_POST["sem"];
$sql1="insert into student_detail(username,branch,sem)values('{$user}','{$branch}','{$sem}');";
$result1=mysqli_query($con,$sql1);
}
else
{
/*$subject=$_POST["subject"];
$sql2="insert into faculty_details(username,branch,subject)values('{$user}','{$branch}','{$subject}');";		
$result2=mysqli_query($con,$sql2);
*/}
echo "<center><br/><br/><br/>Your Login ID '{$user}' Created Sucessfully<br/>Please Login using your Login ID to take Quiz<br/><a href='frontpage.html'>Login</a></center>";

}
mysqli_close($con);
?>

</body>
</html>