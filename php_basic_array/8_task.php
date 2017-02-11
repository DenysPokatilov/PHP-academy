<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10.02.2017
 * Time: 20:05
 */
$myStr="-";
$arr= [ 1, 2, 3, 4, 5, 6, 7, 8, 9];
foreach ($arr as $i)
{$myStr.="{$i}";
}
echo $myStr;