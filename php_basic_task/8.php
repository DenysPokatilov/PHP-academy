<?php
$age="rgdrr";
$name="Denys";
echo "My name is: $name";

//if (18 < $age && $age< 59 ){
//    echo '<pre>'."Вам еще работать и работать";
//}elseif ($age> 59){
//    echo '<pre>'. "Вам пора на пенсию";
//}elseif ($age<=17){
//    echo '<pre>' . "Вам еще рано работать";
if($age<0){
    echo '<pre>'. "значение переменной age является отрицательным числом ";
}elseif ($age!=is_integer($age)){
    echo '<pre>'. $age . "не являеться числом";
}else{
    echo "wrong input";
}
//elseif($age!=is_integer($age))
//    {
//echo '<pre>' . "переменная не являеться числом";
//}
?>