<?php
namespace SMS\Utility;

use SMS\Message\Message;
use SMS\Utility\Utility;


class Uploader {
   static function upload($files){
       $source              = $files['tmp_name'];
       $destination         = $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR."form".DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.'upload'.DIRECTORY_SEPARATOR.'userImage'.DIRECTORY_SEPARATOR;
       $destinationFileName = self::uniqueName($files['name']);
       $isUpload            = move_uploaded_file($source, $destination.$destinationFileName);
       
       
       if($isUpload){
           return $destinationFileName;
       }else{
           Message::set('<div class="alert alert-success"><strong>ERROR:Birthday Data Added Sucessfully.!</strong></div>');
           //Utilredirect
       }
   }
   static function contact_upload($files){
       if(empty($files['tmp_name'])){
           $files['contact_picture']="default.png";
           return $files['contact_picture'];
       }else{
       $source              = $files['tmp_name'];
       $destination         = $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR."form".DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.'phonebook'.DIRECTORY_SEPARATOR.'contactImage'.DIRECTORY_SEPARATOR;
       $destinationFileName = self::uniqueName($files['name']);
       $isUpload            = move_uploaded_file($source, $destination.$destinationFileName);
       
       
       if($isUpload){
           return $destinationFileName;
       }else{
           Message::set('<div class="alert alert-success"><strong>ERROR:Birthday Data Added Sucessfully.!</strong></div>');
           //Utilredirect
       }
   }
   }
   
   static function uniqueName($fileName){
       $fileName_parts= explode(".", $fileName);
       $ext=array_pop($fileName_parts);
       $name=implode(".",$fileName_parts);
       return $name."_".time().".".$ext;
   }
   
   static public function delete($fileName){
       $file= $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR."form".DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.'upload'.DIRECTORY_SEPARATOR.'userImage'.DIRECTORY_SEPARATOR.$fileName;
       unlink($file);
       Utility::redirect('index.php');
   }
   static public function contact_delete($fileName){
       $file= $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR."form".DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.'phonebook'.DIRECTORY_SEPARATOR.'conatctImage'.DIRECTORY_SEPARATOR.$fileName;
       unlink($file);
       Utility::redirect('view.php');
   }
   
}

?>
