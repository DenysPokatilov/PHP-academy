<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 14.02.2017
 * Time: 2:01
 * <p>4. Написать функцию, которая выводит список файлов в заданной директории. Директория задается как параметр функции.</p>

 */
$filelist = glob("*.php");
function searchDir()
{
    $filelist = glob("*.php");
    foreach ($filelist as $item) {
        if(!empty($filelist))
        {
            echo '<pre>'.$item;
        }
        else{
            echo "direction is empty!";
        }
    }
}
print_r(searchDir($filelist));