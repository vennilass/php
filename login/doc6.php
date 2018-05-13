<html>
<head>
<title>smart hostel</title>
</head>
<body>
<?php
$name=$_GET["t2"];
$reg_no=$_GET["t3"];
$block_no=$_GET["t4"];
$room_no=$_GET["t5"];
$attendance=$_GET["t6"];

mysql_connect("localhost","root","");
mysql_select_db("studentdatabase");
mysql_query("insert into student values('$name','$reg_no','$block_no','$room_no','$attendance')");

?>
</body>
</html>
