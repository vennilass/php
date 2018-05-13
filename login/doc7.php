<html>
<head>
<title>smart hostel</title>
</head>
<body>
<?php
$name=$_GET["name"];
$reg_no=$_GET["reg_no"];
$block_no=$_GET["block_no"];
$room_no=$_GET["room_no"];
$attendance=$_GET["attendance"];

mysql_connect("localhost","root","");
mysql_select_db("studentdatabase");
mysql_query("insert into student values('$name','$reg_no','$block_no','$room_no','$attendance')");

?>
</body>
</html>
