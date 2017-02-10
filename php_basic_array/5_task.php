<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 09.02.2017
 * Time: 17:59
 */
$arr=array('Коля'=>200, 'Вася'=>300, 'Петя'=>400);
foreach ($arr as $key => $value){
        echo '<pre>'. $key ." -". " зарплата ". $value. " долларров ";
}