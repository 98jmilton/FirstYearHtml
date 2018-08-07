
<?php
	$tenyears = 60*60*24*365*10;
	$times = 0;
	if(isset($_COOKIE['times']))
		$times=$_COOKIE['times'];

	$times++;

	setcookie("times",$times, time()+$tenyears);


?>
<html>
<head></head>
<body>
<?php
     echo "You have visited this page {$times} times.";}
?>
</body>
</html>  