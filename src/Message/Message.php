<?php
namespace  SMS\Message;
Class Message{
    static public function set($message=""){
        $_SESSION['Message']= $message;
    }
    
    static public function get($data=""){
        return $_SESSION=['Message'];
    }
    
    static public function flush($data=""){
        $_message= $_SESSION['Message'];
        $_SESSION['Message']="";
        return $_message;
    }
    
    
}


?>
