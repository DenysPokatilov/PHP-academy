<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 12.02.2017
 * Time: 18:29
 */
//Вам нужно разработать программу, которая считала бы сумму цифр числа введенного
//пользователем. Например: есть число 123, то программа должна вычислить сумму цифр 1,
//2, 3, т. е. 6.
$num=0;
$str="";
$str=$num;
$count=0;
//echo $str;
$arr= str_split($str);
foreach ($arr as $item){
    if ($num==0){
        echo '<pre>'."пустое значение перменной";
    }else{
    $count+=$item;}

}echo '<pre>'.$count;