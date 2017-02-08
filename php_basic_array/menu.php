<?php

    $i=0;
$array_menu=array();

$array_menu[$i]['url']='/';
$array_menu[$i++]['name']="Главная";

$array_menu[$i]['url']='/raxdel_1/';
$array_menu[$i++]['name']='Название Раздела 1';

$array_menu[$i]['url']="/raxdel_2";
$array_menu[$i++]['name']='Название раздела номер 2';

$array_menu[$i]['url']='/razdel_N';
$array_menu[$i++]['name']='Название раздела N';

echo "<ul>\n";

for ($i=0; $i<count($array_menu); $i++)
{
    echo($_SERVER["REQUEST_URI"] == $array_menu[$i]['url']) ? '<li class="active">':'<li>';
    echo "<a href=\"".$array_menu[$i]['url']."\">".$array_menu[$i]['name']. "</a></li>\n";
}

$i = 0;
$array_menu = array();

$array_menu[$i]['url']='/';
$array_menu[$i++]['name']='Главная';

$array_menu[$i]['url']='/razdel_1/';
$array_menu[$i++]['name']='Название раздела 1';

$array_menu[$i]['url']='/razdel_2/';
$array_menu[$i++]['name']='Название раздела 2';

$array_menu[$i]['url']='/razdel_N/';
$array_menu[$i++]['name']='Название раздела N';

echo "<ul>\n";
for ($i=0;$i<count($array_menu);$i++)
{
    echo ($_SERVER["REQUEST_URI"] == $array_menu[$i]['url']) ? '<li class="active">':'<li>';
    echo "<a href=\"".$array_menu[$i]['url']."\">".$array_menu[$i]['name']."</a></li>\n";
}
echo "</ul>";
?>
