<?php
 // Array with names
 $a = ["Anna","Brittany","Cinderella","Diana","Eva","Fiona","Gunda","Hege","Inga","Johanna","Kitty","Linda","Nina","Ophelia","Petunia","Amanda","Raquel","Cindy","Doris","Eve","Evita","Sunniva","Tove","Unni","Violet","Liza","Elizabeth","Ellen","Wenche","Vicky"];

 $arraylen = count($a);
 $num = -1;
 if (isset($_GET['num']))
    $num = (int)($_GET['num']);

 if ($num>=0 && $num<$arraylen) {
    echo $a[$num];
 } 
 else {
    $num = rand(0, $arraylen-1);
    echo $a[$num];
 }
?> 
