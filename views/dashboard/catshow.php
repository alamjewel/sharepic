<?php require_once '../layout/catshow.php';?>
<?php
use SMS\Photo\Photo;

$photo= new Photo();
$var=$photo->cat_show($_GET['cat']);
    

?>

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
                            
                            
                            <!-- Modal for login-->
                 
			<div id="login" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                              <!-- Modal content-->
                              <div class="col-md-8">
                                 <div class="panel panel-primary">
                                <div class="panel-heading">Login Panel</div>
                                <div class="panel-body">
                                    <div class="col-md-10">
                                    <form role="form" action="../login/login_success.php" method="post" autocomplete="off">
                                        <div class="form-group">
                                  <div class="input-group">
                                      <span class="input-group-addon" id="addon1"><span class="glyphicon glyphicon-user"></span></span>
                                      <input type="text" name="username" class="form-control" id="fname" placeholder="username or email" required >
                                  </div>
                                            </div>
                                        <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="addon1"><span class="glyphicon glyphicon-lock"></span></span>
                                        <input type="password" name="password" class="form-control" placeholder="XXXXXXXX">
                                    </div>
                                        </div>
                                    <button type="submit" class="btn btn-success">Login</button>
                                  </form>		
                                </div>

                                </div>
                              </div>

                              </div>
        

                            </div>
                          </div>
                 
                 <!-- Modal for signup-->
                 <div id="signup" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                              <!-- Modal content-->
                              <div class="col-md-11">
                                 <div class="panel panel-primary">
                                <div class="panel-heading">Registration</div>
                                <div class="panel-body">
                                    <div class="col-md-11">
                                    <form role="form" action="../register/store.php" method="post" autocomplete="on">
                                            <div class="row">
                                                <div class="form-group col-xs-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="addon1"><span class="glyphicon glyphicon-user"></span></span>
                                                        <input type="text" name="firstname" class="form-control" id="fname" placeholder="First Name" required >
                                                    </div>
                                                </div>
                                                <div class="form-group col-xs-6">
                                                    <input type="text" name="lastname" class="form-control" id="lname" placeholder="Last Name" >
                                                </div>
                                            </div>
                                        <div class="row">
                                                <div class="form-group col-xs-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="addon1"><span class="glyphicon glyphicon-envelope"></span></span>
                                                        <input type="email" name="email" class="form-control" placeholder="example@example.com"  >
                                                    </div>
                                                </div>
                                                <div class="form-group col-xs-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="addon1"><span class="glyphicon glyphicon-phone-alt"></span></span>
                                                        <input type="text" name="mobile" class="form-control" placeholder="+88017XXXXXXXX"  >
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="row">
                                                <div class="form-group col-xs-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="addon1""><span class="glyphicon glyphicon-calendar"></span></span>
                                                        <input type="date" name="dob" class="form-control" id="dob" >
                                                    </div>
                                                </div>
                                            
                                            </div>
                                        <div class="form-group"">
                                                    Gender : <label class="radio-inline"><input type="radio" name="gender"value="Male">Male</label>
                                                    <label class="radio-inline"><input type="radio" name="gender" value="Female">Female</label>
                                                </div>
                                                 <div class="input-group">
                                                        <span class="input-group-addon" id="addon1"><span class="glyphicon glyphicon-envelope"></span></span>
                                                        <input type="text" name="username" class="form-control" placeholder="choose a username"  >
                                                    </div>
                                                <br>
                                                 <div class="row">
                                                <div class="form-group col-xs-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="addon1"><span class="glyphicon glyphicon-lock"></span></span>
                                                        <input type="password" name="password" class="form-control" placeholder="XXXXXXXX"  >
                                                    </div>
                                                </div>
                                                <div class="form-group col-xs-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="addon1"><span class="glyphicon glyphicon-lock"></span></span>
                                                        <input type="password" name="password" class="form-control" placeholder="XXXXXXXX"  >
                                                    </div>
                                                </div>
                                            </div>
                                                <button type="reset" class="btn btn-danger">Reset</button>
                                    <button type="submit" class="btn btn-success">Submit</button>
                                  </form>		
                                </div>

                                </div>
                              </div>

                              </div>
        

                            </div>
                          </div>
        

                            </div>
                            
                            
                            
                            
<?php require_once '../layout/footer.php';?>

