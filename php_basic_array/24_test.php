<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 12.02.2017
 * Time: 23:23
 */
$var=545455455;
$str=$var;
echo '<pre>'. $str. '<br>';
$count=0;
$arr= str_split($str);
foreach ($arr as $item){
    if($item==5){
        $count++;
        var_dump($count);
    }
}
echo '<pre>'. $count;