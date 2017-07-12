<?php
session_start();
include_once($_SERVER["DOCUMENT_ROOT"].DIRECTORY_SEPARATOR."form".DIRECTORY_SEPARATOR."vendor/autoload.php");


use SMS\Message\Message;
use SMS\Utility\Utility;
use SMS\Auth\Auth;
//utility::dd($_REQUEST);
$new_login = new Auth();
$new_login->loginPrepare($_REQUEST)->loginCheck();
//utility::dd($_REQUEST);
?>

