<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 12.02.2017
 * Time: 1:13
 */
$arr=['January','February','March','April','May','June','July','August','September','October','November','December'];
$month=date('F');
foreach ($arr as $item){

    if($item==$month){
        echo "<b>$item</b><br>";
    }
    else
    {
        echo $item.'<br>';
    }

}

