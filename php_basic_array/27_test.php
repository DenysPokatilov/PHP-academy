<?php
///**
// * Created by PhpStorm.
// * User: User
// * Date: 13.02.2017
// * Time: 1:35
// */
//27. Создать генератор случайных таблиц.
//Есть переменные:$row - кол-во строк в таблице, $cols - кол-во столбцов в таблице.
//Есть список цветов, в массиве: $colors = array('red','yellow','blue','gray','maroon','brown','green').
//    Необходимо создать скрипт, который по заданным условиям выведет таблицу размера $rows на $cols,
//в которой все ячейки будут иметь цвета, выбранные случайным образом из массива $colors.
//В каждой ячейке должно находиться случайное число. <br><br>
$row=random_int(1,100);
$cols=random_int(1,100);
$colors = array('red','yellow','blue','gray','maroon','brown','green');

echo "<table>";
    for ($i=0;$i<=$row;$i++)
    {  echo "    <tr>";
        for ($j=0;$j<$cols;$j++){
            $color=rand(0,sizeof($colors)-1);
            $num=rand();
            echo "<td style='background-color:{$colors[$color]}'>$num</td>";
        }
    }




