<?php 
$database="test";
$con=mysqli_connect("localhost","root","",$database);
if(!$con){
die('Could not connect'.mysql_error());
}
$sub1="adwa";
$sub2="defg";
$rollno=2;
mysqli_query($con,"insert into subject(id,sub1,sub2,rollno)values(NULL,'{$sub1}','{$sub2}',{$rollno});");


?>