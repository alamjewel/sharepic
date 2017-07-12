<?php require_once '../layout/header.php';?>
<?php
use SMS\User\user;
use SMS\Photo\Photo;

//$login_user=$_SESSION['username'];
$Photo = new Photo();

$var = $Photo->show($login_user);
?>

<div class="col-md-11">
    
    <button data-toggle="modal" data-target="#single" class="btn btn-primary btn-block">Share a Image</button>
</div>
<br>


                            <hr>
                            <center>
                                <h2>Your Uploaded Photos</h2>
                            </center>
                            <ul class="hoverbox">
                            <?php foreach($var as $photos): ?>
                            <li>
                            <a href="../upload/userImage/<?php echo $photos['image'];?>"><img src="../upload/userImage/<?php echo $photos['image'];?>" alt="description" ><img src="../upload/userImage/<?php echo $photos['image'];?>" alt="description" class="preview" ></a>
                            <br><span class="label label-success"><a href="../upload/userImage/<?php echo $photos['image'];?>" download>Download</a></span><small> uploaded by </small><span class="label label-danger"><a href="delete.php?image=<?php echo $photos['image'];?>"  class="">Delete</a></span>			
                            </li>
                            <?php endforeach; ?>
                            </ul>
                            
                            
                            <div id="single" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                              <!-- Modal content-->
                              <div class="col-md-10">
                                 <div class="panel panel-primary">
                                <div class="panel-heading">Select an image</div>
                                <div class="panel-body">
                                        
                                        <form id="uploadimage" action="single_upload.php" method="post" enctype="multipart/form-data">
                                        <div class="input-group">
                                            <span class="input-group-addon">Catagory</span>
                                            <select class="form-control" name="catagory">
                                                <option value="Default">Default</option>
                                                <option value="Nature">Nature</option>
                                                <option value="Technology">Technology</option>
                                                <option value="Car">Car</option>
                                                <option value="Flower">Flower</option>
                                            </select>
                                                    </div>
                                        <div class="form-group">
                                            <input type="hidden" name="username" class="form-control" value="<?php echo $login_user;?>">
                                           <input type="file" calss="file" name="image" id="file" required /> 
                                        </div>

                                        <input type="submit" value="Upload" class="submit" />
                                       
                                        </form>
                                        </div>
                                </div> 

                                </div>
                              </div>

                              </div>
        

                            </div>
                            
                            
                            
                            
<?php require_once '../layout/footer.php';?>