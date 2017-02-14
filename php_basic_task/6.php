<?php
$age=72;
$name="Denys";
echo "My name is: $name";

if (18 < $age && $age< 59 ){
    echo '<pre>'."Вам еще работать и работать";
}elseif ($age> 59){
    echo '<pre>'. "Вам пора на пенсию";
}else {
    echo "wrong input";
}


?>