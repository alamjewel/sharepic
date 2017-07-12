<?php
session_start();
include_once($_SERVER["DOCUMENT_ROOT"].DIRECTORY_SEPARATOR."form".DIRECTORY_SEPARATOR."vendor/autoload.php");


use SMS\Message\Message;
use SMS\Utility\Utility;
use SMS\Utility\Uploader;
use SMS\Phonebook\Phonebook;

//$login_user=$_SESSION['username'];
$contact = new Phonebook();

$contact->delete($_GET['image']);
Uploader::contact_delete($_GET['image']);

    

?> 

