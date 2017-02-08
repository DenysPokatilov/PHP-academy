<?php
$myarray= array();
$i=0;

$myarray=[1,1,2,3,4,5,];
foreach ($myarray as $value){
    echo $value;
}
$myarray[20]='hello world';

foreach ($myarray as $value){
    echo '<pre>'. $value;}
//for ($i=0;$i<50;){
//    $myarray[$i];
//    $i++;
//    foreach ($myarray as $value){
//        echo $value;
//    }
//}

echo '<pre>'. $myarray[20];
$myarray=[22 =>"associative"];
echo'<pre>'. $myarray[22];

for ($i=0;$i<100;$i++){
    foreach ($myarray as $item){
        $item=$i;
        echo '<pre>'.$i;
    }
}