<?php
session_start();
include_once($_SERVER["DOCUMENT_ROOT"].DIRECTORY_SEPARATOR."form".DIRECTORY_SEPARATOR."vendor/autoload.php");


use SMS\Message\Message;
use SMS\Utility\Utility;
use SMS\Photo\Photo;
use SMS\Utility\Uploader;

$photo= new Photo();
$photo->delete($_GET['image']);
Uploader::delete($_GET['image']);

    

?> 

