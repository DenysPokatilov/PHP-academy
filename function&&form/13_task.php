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

$string = 'яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня черешня груша яблоко черешня вишня';




$string=array_unique($string);
    echo 'уникальных слов'.count($string);
