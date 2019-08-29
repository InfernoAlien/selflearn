<?php
setcookie("cookieAdv", 'Значение',time()+60);

$count = 0;
if (isset($_COOKIE['count'])) $count = $_COOKIE['count'];
$count++;
setcookie("count", $count, time()+60, "/");
echo $count;
?>