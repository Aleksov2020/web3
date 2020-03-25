<?php

    header('Content-Type: text/html; charset=UTF-8');
    $link = mysql_connect('localhost', 'u16671', '3137204');
    if (!$link) {
        die('Ошибка соединения: ' . mysql_error());
    }
    echo 'Успешно соединились';
    mysql_close($link);

?>
