<html><head></head><body>
<?php

if (isset($_POST["submit"]))
{
$data=$_POST['data'];
$arr = explode(" ", $data);
$num = count($arr);
for ($i=0; $i<$num; $i++)
echo $arr[$i]."<br>";} 
else 
{
  $data = null;
  echo "no data supplied";
}

?>
</body>
</html>