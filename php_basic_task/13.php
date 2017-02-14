<?php
$distance= 73;
$_time = 2;
$speedKM = $distance/$_time;
echo  '<pre>' . "скорость км/час $speedKM";
$speedMS =$speedKM*0.2777777777778;
echo '<pre>' . "скорость в м/с $speedMS";
?>