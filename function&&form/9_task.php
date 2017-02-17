<?php
/**
 * Created by PhpStorm.
 * User: Denys
 * Date: 17.02.2017
 * Time: 1:49
 * <p>10. Написать функцию, которая считает количество уникальных слов в тексте.
 * Слова разделяются пробелами. Текст должен вводиться с формы.</p>

 */

function flipstring($a){
   $b =strrev($a);
    return $b;
}

function save_comments ($arr){
    return file_put_contents('comments.txt',serialize($arr));
}
$a=$_POST['word'];
save_comments($a);
print_r(flipstring($a));
$send_from_form=false;
if (isset($_POST['submit'])) {
    $send_from_form = true;
    $word = $_POST['word'];
    $arr=[$word];
    save($arr);
    flipstring($arr);
    print_r(flipstr($arr));
    if ($_POST['word']==null) {
        throw new Error("imput is Empty;");
    }

}
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div>
    <form name="test" method="post" action="9_task.php">
    <p>Form for words <Br>
        <textarea name="word" cols="40" rows="3" required></textarea></p>
    <p><input type="submit" value="Отправить">
        <input type="reset" value="Очистить"></p>
    </form>

</div>
</body>
</html>
