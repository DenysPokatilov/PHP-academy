<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 09.02.2017
 * Time: 18:07
 */
$arr = array('green'=>'зеленый','red'=>'красный','blue'=>'голубой');
//$en = array('green', 'red','blue');
//$ru = array('зеленый', 'красный', 'голубой');

$en=[];
$ru=[];
foreach ($arr as $key=> $item){
    array_push($en,$key);
    array_push($ru,$item);
}
echo '<pre>'."english name" .print_r($en);
echo '<pre>'."russian name". print_r($ru);