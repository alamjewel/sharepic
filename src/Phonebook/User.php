<?php
namespace SMS\Phonebook;
use SMS\Message\Message;
use SMS\Utility\Utility;



class Phonebook{
    
    public $id="";
    public $firstname="";
    public $lastname="";
    public $dob="";
    public $gender="";
    public $email="";
    public $mobile="";
    public $username="";
    public $password="";
    
    
    
   public function __construct(){
       $conn=mysql_connect("localhost","root","");
       mysql_select_db("miniproject");
        
    }
    public function prepare($data=array()){
        //Utility::dd($data);
        if(is_array($data) && array_key_exists('firstname', $data)){
            $this->firstname=$data['firstname'];
            $this->lastname=$data['lastname'];
            $this->dob=$data['dob'];
            $this->gender=$data['gender'];
            $this->email=$data['email'];
            $this->mobile=$data['mobile'];
            //$this->username=$data['username'];
            $this->password=$data['password'];
            
            if(array_key_exists("username",$data) && !empty($data)){
               $this->username = $data['username'];
            }
           if(array_key_exists("id",$data) && !empty($data)){
               $this->id = $data['id'];
            }
                        
            
        }
        return $this;
    }
    
    public function index(){
      $_hobby=array();
        $sql="SELECT * FROM hobby";
        $result=mysql_query($sql);
        while ($row = mysql_fetch_assoc($result)) {
            $_hobby[]=$row;
        }
        return $_hobby;
    }
    public function profile($login_user){
        if(is_null($login_user)){
            return;
        }else{
        //utility::dd($login_user);
        $sql="SELECT * FROM profile where username='$login_user'";
        $result=mysql_query($sql);
        $profile = mysql_fetch_object($result);
       
        return $profile;
    }
    }
    public function store(){
        //Utility::dd($this->std_id);
        $sql1="INSERT INTO profile(firstname, lastname, dob, gender, email, mobile, username, password) 
                   VALUES('".$this->firstname."','".$this->lastname."','".$this->dob."','".$this->gender."','".$this->email."','".$this->mobile."','".$this->username."','".$this->password."')";
                
        $sql2="INSERT INTO user(username, password, email) VALUES('".$this->username."','".$this->password."','".$this->email."')";
        //utility::dd($sql5);
        $result1=mysql_query($sql1);
        $result2=mysql_query($sql2);
        
        if(($result1) && ($result2)){
            Message::set('<div class="alert alert-success"><strong>Registration Sucessfull! Please login!!!!!!</strong></div>');
        }else{
            //echo "failed";
            Message::set('<div class="alert alert-warning"><strong>Hobby Data Not Added Sucessfully!</strong></div>');
        }
        Utility::redirect('../../index.php');
    }
    
    public function view($id=null){
         if(is_null($id)){
            return;
        }else{
            $sql="SELECT * FROM hobby WHERE id=".$id;
            $result=mysql_query($sql);
            $hobby=mysql_fetch_object($result);
            return $hobby;
        }
        
    }
    
    
    
    public function edit($id=null){
        if(is_null($id)){
            return;
        }else{
            $sql="SELECT * FROM hobby WHERE id=".$id;
            $result=mysql_query($sql);
            $hobby=mysql_fetch_object($result);
            return $hobby;
        }
    }
    
    public function update(){
            $sql="UPDATE profile set firstname='".$this->firstname."', lastname='".$this->lastname."', email='".$this->email."', mobile='".$this->mobile."', dob='".$this->dob."', password='".$this->password."' WHERE id=".$this->id;
            //utility::dd($sql);
            $result=mysql_query($sql);
            if($result){
              Message::set('<div class="alert alert-success"><strong>Data updated Sucessfully!</strong> </div>');
            }else{
                Message::set('<div class="alert alert-warning"><strong>Data Not updated Sucessfully!</strong> </div>');
            }
            Utility::redirect('index.php');
        
        
    }
    public function delete($id=null){
         if(is_null($id)){
            return;
        }else{
            $sql="DELETE FROM hobby WHERE id=".$id;
            $result=mysql_query($sql);
            if($result){
              Message::set('<div class="alert alert-success"><strong>Hobby Data Deleted Sucessfully!</strong> </div>');
            }else{
              Message::set('<div class="alert alert-warning"><strong>Hobby Data Not Deleted  Sucessfully!</strong> </div>');
            }
            Utility::redirect('index.php');
        }
    
}
}

?>
