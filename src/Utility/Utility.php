<?php
namespace  SMS\Utility;
Class Utility{
    
    static public function d($data=""){
        echo "<pre>";
        var_dump($data);
        echo "</pre>";
        
    }
    static public function dd($data=""){
        self::d($data);
        die();
    }
    
    static public function redirect($url=""){
        header("location:" .$url);
    }
    
}

?>
