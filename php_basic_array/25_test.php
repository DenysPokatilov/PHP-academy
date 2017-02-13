<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 12.02.2017
 * Time: 23:37
 */

for ($i=0;$i<=100;$i++)
{
    $arr[$i]=rand(0,100);
}
echo '<pre>'.var_export($arr);
echo '<pre>'.min($arr);
$min=min($arr);
echo '<pre>'.max($arr);
$max=max($arr);

//foreach ($arr as $item){
//    echo '<pre>'.$item;
//}
$arr[$min]=$max;
echo'<pre>'. $min;
$arr[$max]=$min;
echo'<pre>'. $max;
echo var_export($arr);