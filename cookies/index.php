<?php
define('USER_LOGIN', 'Kara');

if (
    empty($_SERVER['PHP_AUTH_USER'] || $_SERVER['PHP_AUTH_USER'] != USER_LOGIN)) {
    header('WWW-Authenticate: Basic realm="myRealm"');
    die;
}
echo 'Hello, ' . USER_LOGIN;
