<?php
$a=0;
$my_array= array(1, 20, 15, 17, 24, 35);
for ($i=0; $i<count($my_array); $i++)
{
    $a+= pow($my_array[$i],2);
     // $a += $my_array[$i]*$my_array[$i];

}
echo $a;




//$result=array_sum($my_array);
//echo '<pre>'. $result;












