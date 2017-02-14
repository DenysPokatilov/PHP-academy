<?php
$day=23;
switch ($day) {
    case '1':
    case '2':
    case '3':
    case '4':
    case '5': {
        echo "Это рабочий день";
    }
    break;
    default: {
        echo "  вы не ввели число !";
    }


}
?>