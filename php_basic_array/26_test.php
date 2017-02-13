<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 13.02.2017
 * Time: 1:12
 */
for ($i=0;$i<=100;$i++){
    $arr[$i]=rand(1,100);
}
echo '<pre>'.var_export($arr);
$count=1;
foreach ($arr as $item){
    if ($item>0 && $item%2==0){
        $count*=$item;
    }
}
echo'<pre>'. $count;

$count=1;
foreach ($arr as $item){
    if ($item>0 && $item%2==1)
        $count*=$item;
}
echo '<pre>'. $count;