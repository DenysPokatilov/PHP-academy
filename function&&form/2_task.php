<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 13.02.2017
 * Time: 20:04
 */
//Создать форму с элементом textarea.
// При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте. Реализовать с помощью функции.
//var_dump($_POST);
$arr=$_POST['a'];
$str=$arr;
$words=explode(" ",$str);
print_r($words);

usort($words, function ($a, $b) {
    // return mb_strlen($a) <=> mb_strlen($b); // PHP7
    return mb_strlen($b) - mb_strlen($a);
});
echo '<pre>';
print_r(array_slice($words, 0, 5));
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="2_task.php" method="post" required>
    <div>
        <textarea name="a"></textarea>
    </div>

    <div>
        <input type="submit" value="ok">
    </div>
</form>
</body>
</html>
