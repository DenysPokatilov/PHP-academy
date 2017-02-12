<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 12.02.2017
 * Time: 1:56
 */
$arr=['mn','tue','wed','thu','fri','sat','sun'];
$hol=['sat','sun'];
foreach ($arr as $item) {
    if (in_array($item,$hol))
    {
        echo'<pre>'. "<b>$item</b><br>";
    }
    else{
        echo'<pre>'. $item;
    }
}

