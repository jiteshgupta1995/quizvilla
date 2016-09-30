<?php
session_start();
include("connectphp.php");
extract($_POST);
extract($_GET);
extract($_SESSION);
/*$rs=mysql_query("select * from mst_question where test_id=$tid",$cn) or die(mysql_error());
if($_SESSION[qn]>mysql_num_rows($rs))
{
unset($_SESSION[qn]);
exit;
}*/
/*if(isset($subid) && isset($testid))
{
$_SESSION[sid]=$subid;
$_SESSION[tid]=$testid;
header("location:quiz.php");
}
if(!isset($_SESSION[sid]) || !isset($_SESSION[tid]))
{
	header("location: index.php");
}*/
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Quiz</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php

//$query="select * from current;";

$rs=mysqli_query("select * from current;");
if(!isset($_SESSION["q"]))
{
	$_SESSION["q"]=0;
	mysqli_query("delete from current;");
	$_SESSION["true_ans"]=0;
	
}
else
{	
		if($submit=='Next Question' && isset($ans))
		{
				mysqli_data_seek($rs,$_SESSION["q"]);
				$row= mysqli_fetch_row($rs);	
				mysqli_query("insert into current(ques_id,subject,ques,ans1,ans2,ans3,ans4,true_ans)values(NULL,'gk','$row[3]','$row[4]','$row[5]','$row[6]', '$row[7]','$row[8]');") or die(mysql_error());
				if($ans==$row[8])
				{
						$_SESSION["true_ans"]=$_SESSION["true_ans"]+1;
				}
				$_SESSION["q"]=$_SESSION["q"]+1;
		}
		else if($submit=='Get Result' && isset($ans))
		{
				mysql_data_seek($rs,$_SESSION["q"]);
				$row= mysql_fetch_row($rs);	
				mysql_query("current(ques_id,subject,ques,ans1,ans2,ans3,ans4,true_ans)values(NULL,'gk','$row[3]','$row[4]','$row[5]','$row[6]', '$row[7]','$row[8]');") or die(mysql_error());
				if($ans==$row[8])
				{
						$_SESSION["true_ans"]=$_SESSION["true_ans"]+1;
				}
				echo "<h1 class=head1> Result</h1>";
				$_SESSION["q"]=$_SESSION["q"]+1;
				echo "<Table align=center><tr class=tot><td>Total Question<td> $_SESSION[q]";
				echo "<tr class=tans><td>True Answer<td>".$_SESSION["true_ans"];
				$w=$_SESSION["q"]-$_SESSION["true_ans"];
				echo "<tr class=fans><td>Wrong Answer<td> ". $w;
				echo "</table>";
//				mysqli_query("insert into mst_result(login,test_id,test_date,score) values('$login',$tid,'".date("d/m/Y")."',$_SESSION[trueans])") or die(mysql_error());
	//			echo "<h1 align=center><a href=review.php> Review Question</a> </h1>";
				unset($_SESSION["q"]);
	//			unset($_SESSION[sid]);
	//			unset($_SESSION[tid]);
				unset($_SESSION["true_ans"]);
				exit;
		}
}
$rs=mysqli_query("select * from current;",$cn) or die(mysql_error());
if($_SESSION["q"]>mysqli_num_rows($rs)-1)
{
unset($_SESSION["q"]);
echo "<h1 class=head1>Some Error  Occured</h1>";
session_destroy();
echo "Please <a href=index.php> Start Again</a>";

exit;
}
mysqli_data_seek($rs,$_SESSION["q"]);
$row= mysqli_fetch_row($rs);
echo "<form name=myfm method=post action=quiz.php>";
echo "<table width=100%> <tr> <td width=30>&nbsp;<td> <table border=0>";
$n=$_SESSION["q"]+1;
echo "<tR><td><span class=style2>Que ".  $n .": $row[2]</style>";
echo "<tr><td class=style8><input type=radio name=ans value=1>$row[3]";
echo "<tr><td class=style8> <input type=radio name=ans value=2>$row[4]";
echo "<tr><td class=style8><input type=radio name=ans value=3>$row[5]";
echo "<tr><td class=style8><input type=radio name=ans value=4>$row[6]";

if($_SESSION["q"]<mysqli_num_rows($rs)-1)
echo "<tr><td><input type=submit name=submit value='Next Question'></form>";
else
echo "<tr><td><input type=submit name=submit value='Get Result'></form>";
echo "</table></table>";
?>
</body>
</html>