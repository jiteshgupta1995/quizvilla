<!--<html>
<head>
</head>
<body>
<form action="function test.php" method="get">
    <input type="text" name="txt" />
    <input type="submit" name="insert" value="insert"/>
    <input type="submit" name="select" value="select"/>
</form>
</body>
</html>-->
<?php
$sub1="dbms";
/*
if($_GET){
    if(isset($_GET['insert'])){
        insert();
    }elseif(isset($_GET['select'])){
        select();
    }
}

function select() {
    echo "The select function is called.";
    exit;
}

function insert() {
    echo "The insert function is called.";
    exit;
}*/
?>
<html>
<head>
</head>
<body>
Hello there!
<a href='nesad.php?subj=<?php $sub1 ?>'>Run PHP Function</a>
</body>
</html>