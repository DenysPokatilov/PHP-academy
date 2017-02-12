<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 12.02.2017
 * Time: 0:08
 */
$count=0;
$arr=[1, 2, 3, 4, 5, 6, 7, 8, 9];
foreach ($arr as $i) {
    $count++;
        echo $i.",";
        if($count%3==0){
            echo '<br>';
        }
}

