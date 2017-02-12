<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 11.02.2017
 * Time: 12:44
 */
$num=0;
$n = 1000;
do { $num++;
    $n = $n / 2;
    echo $n." ". $num. '</br>';
} while ($n>50);


$num=0;

for($n=1000;$n>50;$n=$n/2){
    $num++;
    echo $n."-".$num.'<br>';

}




