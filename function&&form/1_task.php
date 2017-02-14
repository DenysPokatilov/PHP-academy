<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 13.02.2017
 * Time: 2:46
 */
echo var_export($_POST);
$a=$_POST['a'];
$b=$_POST['b'];
$result="";


function getCommonWords($a, $b){
    global $result;
    $result="$a.$b";

}
print_r(getCommonWords($a,$b));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="1_task.php" method="post">
    <div>
        <textarea name="a"></textarea>
    </div>
    <div>
        <textarea name="b"></textarea>
    </div>
    <div>
        <input type="submit" value="ok">
    </div>
</form>
</body>
</html>
