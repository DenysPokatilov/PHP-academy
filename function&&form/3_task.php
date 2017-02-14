<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 14.02.2017
 * Time: 1:10
 * <p>3. Есть текстовый файл. Необходимо удалить из него все слова,
 * длина которых превыщает N символов. Значение N задавать через форму.
 * Проверить работу на кириллических строках - найти ошибку, найти решение.</p>

 */
$arr=$_POST['a'];
$arrnum=$_POST['b'];
$num=$arrnum;
$str=$arr;
$words=explode(" ",$str);
print_r($words);
function searchWords($words){
    global $num;
    foreach ($words as $item){
        $lenght=strlen($item);
        if ($lenght>$num)
        {
            unset($words[$item]);

        }

    }
}
 print_r($words);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="3_task.php" method="post">
    <div>Input Text
       <textarea name="a" ></textarea>
    </div>
    <div>Input N letters
        <textarea name="b"></textarea>
    </div>

    <div>
        <input type="submit" value="ok">
    </div>
</form>
</body>
</html>

