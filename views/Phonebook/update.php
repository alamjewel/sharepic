<?php
session_start();
include_once($_SERVER["DOCUMENT_ROOT"].DIRECTORY_SEPARATOR."form".DIRECTORY_SEPARATOR."vendor/autoload.php");

use SMS\Message\Message;
use SMS\Utility\Utility;
use SMS\Phonebook\Phonebook;
use SMS\Utility\Uploader;
//echo $_REQUEST['oldFileName'];die();
$uploadFile             = Uploader::contact_upload($_FILES['contact_picture']);


//Utility::dd($uploadFile);
//$uploadFile             = Uploader::upload($_FILES['image']);


if($uploadFile){
    $contact            = new Phonebook();
    $_REQUEST['contact_picture']  =$uploadFile;
     //Utility::dd($_REQUEST['contact_picture']);
    $contact->prepare($_REQUEST)->update();
    Uploader::contact_delete($_REQUEST['oldFileName']);
}
?>
