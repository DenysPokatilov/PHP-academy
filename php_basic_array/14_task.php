<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 11.02.2017
 * Time: 23:29
 */
$arr=[4, 2, 5, 19, 13, 0, 10];
foreach ($arr as $e) {
    if (in_array('2',$arr)) {
        echo "yes , IT IS";
        break;
    }
     elseif(in_array('3',$arr)) {
        echo "yes , IT IS";
        break;
    }elseif (in_array('4',$arr)) {
        echo "yes , IT IS";
        break;
    }
    else{
    echo "No, it is not";
    break;
    }
}

echo '</br>';
$e=[2,3,4];
foreach ($arr as $value){
    if (in_array($value,$e)){
        echo "yes";
        break;
    }
    else{
        echo "no";
        break;
    }
}
