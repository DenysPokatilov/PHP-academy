<?php
/**
 * Created by PhpStorm.
 * User: Denys
 * Date: 17.02.2017
 * Time: 3:41
 * <p>10. Написать функцию, которая считает количество уникальных слов в тексте.
 * Слова разделяются пробелами.
 * Текст должен вводиться с формы.</p>

 */
//<p>10. Написать функцию, которая считает количество уникальных слов в тексте.
// Слова разделяются пробелами. Текст должен вводиться с формы.</p>
define('UNIC',['hello','stop','mercury']);
function uniqWord($a){
    foreach ($a as $item){
        if ($item=='UNIC'){
            return $item;
        }
    }
}
function unique($a){
    $b=explode(' ',mb_strtolower($a));
    print "всего слов ". count($b)."   ";
    $b=array_unique($b);
    echo 'уникальных слов'.count($b);
}



$a='input';
$a=$_POST['word'];
unique($a);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div>
    <form name="test" method="post" action="10_task.php">
    <p>Form for words <Br>
        <textarea name="word" cols="40" rows="3" required></textarea></p>
    <p><input type="submit" value="Отправить">
        <input type="reset" value="Очистить"></p>
    </form>

</div>
</body>
</html>
