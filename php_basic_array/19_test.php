<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 12.02.2017
 * Time: 2:13
 */
$arr=['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'];
 echo $day=date('l');
foreach ($arr as $item){

    if($item==$day){
        echo "<b>$item</b><br>";
    }
    else
    {
        echo $item.'<br>';
    }

}