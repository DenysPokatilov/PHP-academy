<?php
///**
// * Created by PhpStorm.
// * User: Denys
// * Date: 17.02.2017
// * Time: 5:26
// */
//Есть строка $string = 'яблоко черешня вишня вишня черешня груша яблоко черешня
// вишня яблоко вишня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня
// черешня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня
// черешня груша яблоко черешня вишня';<br>
//<br>
//Подсчитайте, сколько раз каждый фрукт встречается в этой строке. Выведите  в виде списка в порядке уменьшения количества:<br><br>

$str ='яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня черешня груша яблоко черешня вишня';
 unique($str);

function unique($str){
    $b=explode(' ',mb_strtolower($str));
    print "всего слов ". count($b)."   ";
    $b=array_unique($b);
    echo '<pre>'. "уникальных слов".count($b);
}

$str ='яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня черешня груша яблоко черешня вишня';

$str=explode(' ',($str));
$str=array_count_values($str);
arsort($str);
foreach($str as $key=>$value){
    echo $key.' - '.$value."\n";
}