<?php
$first=20;
$second=0;
$plus='+';
$minus='-';
$mult='*';
$devid='/';
$ampersant='%';

$znak='/'; //ввод от пользователя

//if ($second!=0)

    if($znak ==$plus ){
        echo $first + $second;
    }
   elseif ($znak == $minus){
        echo $first - $second;
    }
    elseif ($znak == $mult){
       echo $first * $second;
   }
       elseif($znak == $devid && $second!=0){
        echo $first / $second;
        }
        elseif ($second== 0)  {
           echo" на нуль делить нельзя";
        }
        elseif ($znak == $ampersant) {
            echo $first % $second;
        }
        else {
            echo "wrong input ";
        }
?>