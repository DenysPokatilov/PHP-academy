<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 13.02.2017
 * Time: 1:12
 *  Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф­я rand).
Далее, вычислить произведение тех элементов, которые больше ноля и у которых парные
индексы. После вывести на экран элементы, которые больше ноля и у которых не парный
индекс.
 */
for ($i=0;$i<=100;$i++){
    $arr[$i]=rand(1,100);
}
echo '<pre>'.var_export($arr);
$count=1;
foreach ($arr as $item){
    if ($item>0 && $item%2==0){
        $count*=$item;
    }
}
echo'<pre>'. $count;

$count=1;
foreach ($arr as $item){
    if ($item>0 && $item%2==1)
        $count*=$item;
}
echo '<pre>'. $count;