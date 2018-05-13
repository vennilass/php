<?php 
$flag=0;
$date= date("Y-m-d");
$conn=mysql_connect("localhost","root","");
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
mysql_select_db("project");
$sql="
 SELECT *
FROM entry 
WHERE date = '$date'";
  if(!mysql_query($sql))
   {
        die('Error:'.mysql_error());
    }
	else{
		echo ' <table style="width:100%"><tr>
    <th>STUDENT ID</th>
    <th>TIMING</th>
    <th>STUDENT NAME</th>
    <th>ROOM NUMBER</th>
     </tr>';
	 $results =  mysql_query($sql);
    while($row = mysql_fetch_array($results)){
        $v1=$row['roll'];
        $v2=$row['time'];
	
    echo '<tr><td>'.$v1.'</td><td>'.$v2.'</td><td>';
    $flag++;
	if($v1=="270019DE59"){
		 echo '<td>'."VENILLA.S.S".'</td><td>'."102".'</td>';
	}
	else{
		echo '<td>'."SANTHIYA.R".'</td><td>'."402".'</td>';
	}
    if($flag==0){
        echo '<center>OOPS!!!!!No match found';
    }
	}}
?>
	
