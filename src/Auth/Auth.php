<?php
namespace SMS\Auth;
use SMS\Message\Message;
use SMS\Utility\Utility;



class Auth{
    public $id="";
    public $username="";
    public $password="";
    
    public function __construct(){
          $conn=mysql_connect("localhost","root","");
          mysql_select_db("miniproject");
    }
    
    public function loginPrepare($data=array()){
        //Utility::dd($data);
        if(is_array($data) && array_key_exists('username', $data)){
            $this->username=$data['username'];
            $this->password=$data['password'];
        }
        return $this;
    }
    
    public function loginCheck(){
        $sql="SELECT * FROM user WHERE username='".$this->username."' AND password='".$this->password."'";
        //Utility::dd($sql);
        $result=mysql_query($sql);
        $row=mysql_fetch_assoc($result);
       if(!empty($row)){
           $_SESSION['username']=$this->username;
        //Utility::dd($sql);
           Utility::redirect("../dashboard/index.php");
        } else{
            Message::set('<div class="alert alert-warning"><strong>Wrong Username or Password !</strong></div>');
            Utility::redirect("../../index.php");
        }
       // 
    }
    
    public function is_loggedin(){
        if(isset($_SESSION['username'])){
            if(!is_null($_SESSION['username']) && !empty($_SESSION['username'])){
                return TRUE; 
            }
        } else{
            return FALSE;
        }
    }
    
}

