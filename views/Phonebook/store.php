<?php
session_start();
include_once($_SERVER["DOCUMENT_ROOT"].DIRECTORY_SEPARATOR."form".DIRECTORY_SEPARATOR."vendor/autoload.php");

use SMS\Message\Message;
use SMS\Utility\Utility;
use SMS\Phonebook\Phonebook;
use SMS\Utility\Uploader;

$uploadFile             = Uploader::contact_upload($_FILES['contact_picture']);



//$uploadFile             = Uploader::upload($_FILES['image']);
//utility::dd($uploadFile);

if($uploadFile){
    $contact            = new Phonebook();
    $_REQUEST['contact_picture']  =$uploadFile;
     //Utility::dd($_REQUEST['contact_picture']);
    $contact->prepare($_REQUEST)->store();
}
?>
