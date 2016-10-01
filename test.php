<?php 
$user="root";
$pass="";
$database="quiz";
$con=mysqli_connect("localhost",$user,$pass,$database);
if(!$con){
die("could not connect");
exit;
}

$sql="select * from user;";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$value=$row["first"];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
Hello <?php echo $value; ?>
</body>
</html>