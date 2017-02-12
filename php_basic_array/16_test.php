<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 12.02.2017
 * Time: 0:08
 */
$arr=[1, 2, 3, 4, 5, 6, 7, 8, 9];
foreach ($arr as $i) {
        echo $i;
        for ($j = $i; $j<4; $j++) {
        if ($j > 3) {

            echo '</br>';}
        }

        }


