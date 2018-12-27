<?php

$HOST = 'us-iron-auto-sfo-01-bh.cleardb.net';
$USERNAME = 'b1eb0e2a944144';
$PASSWORD = '4ae33bea';
$DB = 'heroku_3d86efab23fdce0';
$link = mysqli_connect($HOST, $USERNAME, $PASSWORD, $DB);

if (!$link) {
    die(mysqli_error($link));
}
?>