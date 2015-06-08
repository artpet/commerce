<?php

$mysqli = new mysqli("127.0.0.1", "root", "qweasd1!", "shop_db", 8889);
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

echo $mysqli->host_info . "\n";
