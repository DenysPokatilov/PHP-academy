<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 12.02.2017
 * Time: 23:23
 * >24. Вам нужно разработать программу, которая считала бы количество вхождений
какой­нибуть выбранной вами цифры в выбранном вами числе. Например: цифра 5 в числе
442158755745 встречается 4 раза.
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