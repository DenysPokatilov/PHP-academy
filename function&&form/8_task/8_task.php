<?php
/**
 * Created by PhpStorm.
 * User: Denys
 * Date: 16.02.2017
 * Time: 5:28
 * <p>8. Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле и добавить его.
 * Все добавленные комментарии выводятся над текстовым полем.
Реализовать проверку на наличие в тексте запрещенных слов, матов.
 * При наличии таких слов - выводить сообщение "Некорректный комментарий".
 * Реализовать удаление из комментария всех тегов, кроме тега &lt;b&gt;.</p>

 */
define('MAT',['bad','worse','ugly']);

function save_comments($comment){
    return file_put_contents('comments.txt',serialize($comment));
}
function get_comments(){
    return unserialize(file_get_contents('comments.txt'));
}
if (file_exists('comments.txt')){
    $comments=get_comments();
}
function mat($comment){
    foreach ($comment as $key=>$value){
        $comment[$key]=strip_tags(str_replace(MAT, '***', $value,$count),'<b>');
        if($count>0){
            echo 'Некорректный комментарий. - '.$value ."<br>";
        }
    }
    return $comment;
}


$form_send=false;
if (isset($_POST['submit'])){
    $form_send=true;
    $comment= [
        'user'=>$_POST['name'],
        'comment'=>$_POST['comment']
    ];
    if ($_POST['name']==null && $_POST['comment']==null){
        throw new Error("imput is Empty;");
    }
    $comment= mat($comment);

    $comments[] = $comment;
    save_comments($comments);
}


?>

<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form name="test" method="post" action="7_task.php">
    <h1>Гостевая Книга</h1>

    <p><b>Ваше имя:</b><br>
        <input name="name" id="name" placeholder="user" type="text" style="border: 4px double black" size="40" required ">
    </p>

    <p>Комментарий<Br>
        <textarea name="comment" id="comment" placeholder="comments" style="border: 4px double black" cols="40" rows="3" required></textarea></p>
    <p><input type="submit" name="submit" value="Отправить"></p>
    <p><input type="reset" value="Очистить"></p>
</form>
<!--<div align="center">--><?//=$form_was_send ? 'yes' : 'no';  ?><!--</div>-->
<?php if (file_exists('comments.txt')): ?>
    <table class="table table-bordered">
        <thead>
        <tr>
            <td>Qualityb&gt;:</td>
            <td>User:</td>
            <td>Comment:</td>
        </tr>
        </thead>
        <?php for ($i=0;$i<count($comments);$i++):?>
            <tbody>
            <tr>
                <td width="5%"><?=$i+1?></td>
                <td><?=$comments[$i]['user']   ?></td>
                <td><?=$comments[$i]['comment']   ?></td>
            </tr>
            </tbody>
        <?php endfor; ?>
    </table>
<?php endif; ?>
</body>
</html>