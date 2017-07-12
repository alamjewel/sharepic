<?php
namespace SMS\Photo;
use SMS\Message\Message;
use SMS\Utility\Utility;



class Photo{
    
    public $id="";
    public $catagory="";
    public $username="";
    public $image="";
    public $album="";
    
    
    
   public function __construct(){
       $conn=mysql_connect("localhost","root","");
       mysql_select_db("miniproject");
        
    }
    public function single_image_prepare($data=array()){
        //Utility::dd($data);
        if(is_array($data) && array_key_exists('username', $data)){
            $this->catagory=$data['catagory'];
            $this->username=$data['username'];
            $this->image=$data['image'];
            //$this->catagory=$data['catagory'];
            
           if(array_key_exists("id",$data) && !empty($data)){
               $this->id = $data['id'];
            }
                        
            
        }
        return $this;
    }
    
    public function show($login_user){
      $_Photo=array();
        $sql="SELECT * FROM Photos WHERE username='$login_user'";
        $result=mysql_query($sql);
        while ($row = mysql_fetch_assoc($result)) {
            $_Photo[]=$row;
        }
        return $_Photo;
    }
    public function index(){
      $_Photo=array();
        $sql="SELECT * FROM Photos";
        $result=mysql_query($sql);
        while ($row = mysql_fetch_assoc($result)) {
            $_Photo[]=$row;
        }
        return $_Photo;
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
    public function single_image_store(){
        //Utility::dd($this->std_id);
            
        $sql="INSERT INTO Photos(username, catagory, image, album) VALUES('".$this->username."','$this->catagory','".$this->image."','default')";
        //utility::dd($sql5);
        $result=mysql_query($sql);
        
        
        if($result){
            Message::set('<div class="alert alert-success"><strong>Image Upload Sucessfull!</strong></div>');
        }else{
            //echo "failed";
            Message::set('<div class="alert alert-warning"><strong>Image Upload Not Added Sucessfully!</strong></div>');
        }
        Utility::redirect('index.php');
    }
    
    public function catagory_show($cat,$login_user){
        $_Photo=array();
        $sql="SELECT * FROM Photos WHERE catagory='$cat' and username='$login_user'";
        $result=mysql_query($sql);
        while ($row = mysql_fetch_assoc($result)) {
            $_Photo[]=$row;
        }
        return $_Photo;
  
    }
     public function cat_show($cat){
        $_Photo=array();
        $sql="SELECT * FROM Photos WHERE catagory='$cat'";
        $result=mysql_query($sql);
        while ($row = mysql_fetch_assoc($result)) {
            $_Photo[]=$row;
        }
        return $_Photo;
  
    }
    
    
    
    public function update(){
            $sql="UPDATE hobby set name='".$this->name."', hobby='".$this->hobby."' WHERE id=".$this->id;
            $result=mysql_query($sql);
            if($result){
              Message::set('<div class="alert alert-success"><strong>Hobby Data updated Sucessfully!</strong> </div>');
            }else{
                Message::set('<div class="alert alert-warning"><strong>Hobby Data Not updated Sucessfully!</strong> </div>');
            }
            Utility::redirect('index.php');
        
        
    }
    public function delete($image=null){
         if(is_null($image)){
            return;
        }else{
            $sql="DELETE FROM photos WHERE image='$image'";
            //utility::dd($sql);
            $result=mysql_query($sql);
            if($result){
              Message::set('<div class="alert alert-success"><strong>Photo Deleted Sucessfully!</strong> </div>');
            }else{
              Message::set('<div class="alert alert-warning"><strong>Photo Not Deleted  Sucessfully!</strong> </div>');
            }
            Utility::redirect('index.php');
        }
    
}
}

?>
