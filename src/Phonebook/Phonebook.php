<?php
namespace SMS\Phonebook;
use SMS\Message\Message;
use SMS\Utility\Utility;



class Phonebook{
    
    public $id="";
    public $firstname="";
    public $lastname="";
    public $email="";
    public $mobile="";
    public $contact_of="";
    public $group="";
    public $image="";
    
    
    
   public function __construct(){
       $conn=mysql_connect("localhost","root","");
       mysql_select_db("miniproject");
        
    }
    public function prepare($data=array()){
        //Utility::dd($data);
        if(is_array($data) && array_key_exists('firstname', $data)){
            $this->firstname=$data['firstname'];
            $this->lastname=$data['lastname'];
            $this->group=$data['group'];
            $this->image=$data['contact_picture'];
            $this->email=$data['email'];
            $this->mobile=$data['mobile'];
            
            if(array_key_exists("contact_of",$data) && !empty($data)){
               $this->contact_of = $data['contact_of'];
            }
           if(array_key_exists("id",$data) && !empty($data)){
               $this->id = $data['id'];
            }
                        
            
        }
        return $this;
    }
    
      public function edit($id){
        if(is_null($id)){
            return;
        }else{
        //utility::dd($login_user);
        $sql="SELECT * FROM phonebook where id='$id'";
        $result=mysql_query($sql);
        $contact = mysql_fetch_object($result);
       
        return $contact;
    }
    }
    public function store(){
        //Utility::dd($this->std_id);
       // $sql="INSERT INTO phonebook(firstname) VALUES('".$this->firstname.")";
             $sql="INSERT INTO phonebook(firstname, lastname, email, mobile, image, groups, contact_of) 
                   VALUES('".$this->firstname."','".$this->lastname."','".$this->email."','".$this->mobile."','".$this->image."','".$this->group."','".$this->contact_of."')";   
       //Utility::dd($sql);
        $result=mysql_query($sql);
       // Utility::dd($result);
        if($result) {
            Message::set('<div class="alert alert-success"><strong>Contact Added Sucessfully! </strong></div>');
        }else{
            //echo "failed";
            Message::set('<div class="alert alert-warning"><strong>Contact Not Added Sucessfully!</strong></div>');
        }
        Utility::redirect('../dashboard/index.php');
    }
   
    public function view($loginuser=null){
         
            $contact=array();
            $sql="SELECT * FROM phonebook WHERE contact_of='$loginuser'";
           //utility::dd($sql);
            $result=mysql_query($sql);
             while ($row = mysql_fetch_assoc($result)) {
            $contact[]=$row;
        }
        return $contact;
        
    }
    
  
    public function pdf($loginuser=null){
            $contact=array();
            $sql="SELECT * FROM phonebook WHERE contact_of='$loginuser'";
             $result=mysql_query($sql);
             while ($row = mysql_fetch_assoc($result)) {
            $contact[]=$row;
        }
        return $contact;
        
    }

    public function update(){
            $sql="UPDATE phonebook set firstname='".$this->firstname."', lastname='".$this->lastname."', email='".$this->email."', mobile='".$this->mobile."', groups='".$this->group."', image='".$this->image."' WHERE id='$this->id'";
            //utility::dd($sql);
            $result=mysql_query($sql);
            if($result){
              Message::set('<div class="alert alert-success"><strong>Data updated Sucessfully!</strong> </div>');
            }else{
                Message::set('<div class="alert alert-warning"><strong>Data Not updated Sucessfully!</strong> </div>');
            }
            Utility::redirect('view.php');
        
        
    }
    public function delete($image=null){
         if(is_null($image)){
            return;
        }else{
            $sql="DELETE FROM phonebook WHERE id='$image'";
            $result=mysql_query($sql);
            if($result){
              Message::set('<div class="alert alert-success"><strong>Data Deleted Sucessfully!</strong> </div>');
            }else{
              Message::set('<div class="alert alert-warning"><strong>Data Not Deleted  Sucessfully!</strong> </div>');
            }
            Utility::redirect('view.php');
        }
    
}
}

?>
