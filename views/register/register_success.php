<?php
session_start();
include_once($_SERVER["DOCUMENT_ROOT"].DIRECTORY_SEPARATOR."form".DIRECTORY_SEPARATOR."vendor/autoload.php");


use SMS\Message\Message;
use SMS\Utility\Utility;
use SMS\User\user;
//utility::dd($_REQUEST);
$new_user = new User();
$new_user->Prepare($_REQUEST)->store();
//utility::dd($_REQUEST);
?>

