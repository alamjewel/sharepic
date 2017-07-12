<?php
session_start();
include_once($_SERVER["DOCUMENT_ROOT"].DIRECTORY_SEPARATOR."form".DIRECTORY_SEPARATOR."vendor/autoload.php");


use SMS\Message\Message;
use SMS\Utility\Utility;
use SMS\Utility\Uploader;
use SMS\Photo\Photo;
//utility::dd($_REQUEST['username']);
$uploadFile             = Uploader::upload($_FILES['image']);


if($uploadFile){
    $photo            = new Photo();
    $_REQUEST['image']  =$uploadFile;
     //Utility::dd($_REQUEST['image']);
    $photo->single_image_prepare($_REQUEST)->single_image_store();;
}

?> 

