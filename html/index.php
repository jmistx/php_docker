<?php

//phpinfo();

$link = mysql_connect('mysql', 'root', 'root');
if (!$link) {
    die('Connection error: ' . mysql_error());
}
echo 'Connection success';
mysql_close($link);