<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 12.02.2017
 * Time: 18:29
 */

$num=12345;
$str="";
$str=$num;
$count=0;
//echo $str;
$arr= str_split($str);
foreach ($arr as $item){
    $count+=$item;

}echo $count;