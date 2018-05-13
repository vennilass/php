<?php global $var;
$var = 'value';
echo $var;
?>
<form action="script.php" method="post">
    <input type="text" value="<?php echo $var?>" name="var" />
    <input type="submit" value="Send" />
</form>
