<?php

date_default_timezone_set('Europe/Athens');

if(!defined('DOCUMENT_ROOT')){
    define('DOCUMENT_ROOT', $_SERVER['DOCUMENT_ROOT']);
}

if(!defined('SERVER_NAME')){
    define('SERVER_NAME', $_SERVER['SERVER_NAME']);
}

require_once(DOCUMENT_ROOT . '/includes.php');

$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'proiect_daw';

$database = new Database($db_host, $db_username, $db_password, $db_name);

