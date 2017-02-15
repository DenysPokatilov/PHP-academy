<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 15.02.2017
 * Time: 17:11
 */

//<p>7. Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле
// и добавить его. Все добавленные комментарии выводятся над текстовым полем.</p>
$com=$_POST['comment'];
$name=$_POST['name'];
if (!$com==true){
    function addComent ($com,$name){
        global $com;
        global $name;
        echo  '<pre>'. $com . $name;
 }

}
 addComent();
?>

<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form name="test" method="post" action="7_task.php">
    <h1>Гостевая Книга</h1>
    <p><b>Ваше имя:</b><br>
        <input name="name" type="text" size="40">
    </p>

    <p>Комментарий<Br>
        <textarea name="comment" cols="40" rows="3"></textarea></p>
    <p><input type="submit" value="Отправить">
        <input type="reset" value="Очистить"></p>
</form>

</body>
</html>