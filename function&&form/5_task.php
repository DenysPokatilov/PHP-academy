<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 15.02.2017
 * Time: 1:16
 */



function searchDir($my_dir,$filelist,$str)
{
    $file_arr = array();
    foreach (glob(rtrim($my_dir, '/')."/*.".$filelist) as $filename)
    {
        if(strstr(file_get_contents($filename), $str) != false)
            $file_arr[] = $filename;
    }
    return $file_arr;
}    var_dump($file_arr);

print_r(searchDir('function&&form','txt','Hello'));