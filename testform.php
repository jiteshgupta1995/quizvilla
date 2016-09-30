<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
$database="test";
$name='name';
$marks='marks';
$con=new mysqli("localhost","root","",$database);
if(!$con){
die('Could not connect'.mysql_error());
}
$sql="insert into student(rollno,name,marks)values(5,".$name.$marks;
$result=$con->query($sql);
while($row=$result->fetch_assoc()){
echo "Rollno:".$row["rollno"]."<br>";
}

$con->close();
?>
</body>
</html>