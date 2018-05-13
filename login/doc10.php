<?php  
?> <script type="text/javascript" src="file.js"></script> <?php
$flag=0;
$conn=mysql_connect("localhost","root","");
if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
mysql_select_db("project");
//$sql="create table find(sno int(10) primary key,va varchar(30) not null)";
//$sql="insert into find(sno,va) values (1,'0')";
//$sql="update find set va='s' where sno=1";
$sql="select * from find where sno=1";

$result=mysql_query($sql) or die("error messgae".mysql_error());
$ro='';
if(mysql_num_rows($result)>0){
	while($row=mysql_fetch_row($result)){
	$ro=$row['1'];
	}
	
}
//echo $ro;
$line = '';

$f = fopen('main_module.txt', 'r');
$cursor = -1;

fseek($f, $cursor, SEEK_END);
$char = fgetc($f);

/**
 * Trim trailing newline chars of the file
 */
while ($char === "\n" || $char === "\r") {
    fseek($f, $cursor--, SEEK_END);
    $char = fgetc($f);
}

/**
 * Read until the start of file or first newline char
 */
while ($char !== false && $char !== "\n" && $char !== "\r") {
    /**
     * Prepend the new char
     */
    $line = $char . $line;
    fseek($f, $cursor--, SEEK_END);
    $char = fgetc($f);
}

//echo $line;
if($ro==$line){
	$flag=0;
}
else{
	$sql="update find set va='$line' where sno=1";
$result=mysql_query($sql) or die("error messgae".mysql_error());
	$flag=1;
}
if($flag==0){
	$idtest="";
}
else{
	$idtest=$line;
}

echo '<html>

<head>
     <link href="hms.png" rel="icon">
    <link href="css/main.css" rel="stylesheet">
<title>Hostel Management System</title>
    
<style>
body{
    padding: 0 0 15px 0; 
    margin: 0;
    overflow-y: scroll;
    color: #555;
    font-family: Arial;
    font-weight: bold;
}
    a{
        text-decoration: none;
        color: black;
    }
    form{
        color: black;
    }
ul {
    list-style-type: none;
    margin: 0;
    padding: 30px 0 30px 0;
    overflow: hidden;
    background-color:#bb8fce;
    color: white;
    font-size: 185%;
}
.sk{
    float:left;
    padding:0 0px;
    }
.bottom {
    display: block;
    background-color: #1E2124;
    color: #fff;
    text-align: center;
    padding: 3px;
    bottom: 0;
    width: 100%;
	background-color:#bb8fce;
}
.ref {
    text-decoration: none;
	color:#FF0000;
}
#img{
	width:350px;
	height:auto;
	}
#nav{
	padding:25px;
	float:right;
	}
.button {
    background-color: #bb8fce;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 25px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 30px;
    width: 300px;
}
#log{
      color: black;
    }
#head
	{
	text-align:center;
	background-color:#999;
	color:black;
	padding: 40px 32px;
	margin:50px 30% 70px 30%;
    border-radius: 25px;
	}
	
</style>
</head> 
<body>
    
    <center>
    <ul>ATTENDANCE MANAGEMENT SYSTEM </ul><br/><br/>
	
    </center>
    <center>
<form id="message" method="post" action="update.php" style="margin-top:-0.05%;margin-bottom:13%"><h1>PLEASE SCAN YOUR CARD</h1><br/><br/><br/><br/>
    <div class="group">      
	<input type="text" name="name" value="' . htmlspecialchars($idtest) . '" onblur="checkTextField(this);"/>
    <span class="bar"></span>
    <label> ID NUMBER: </label>
  </div>
</form>
    </center>
</body>
</html>';
$url=$_SERVER['REQUEST_URI'];
 header("Refresh: 5; URL=\"" . $url . "\"");
?>
