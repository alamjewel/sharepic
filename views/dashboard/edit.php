<?php require_once '../layout/header.php';?>

<?php
use SMS\User\user;

//$login_user=$_SESSION['username'];
$user = new User();

$var = $user->profile($login_user);
?>
<div class="panel panel-primary">
                                <div class="panel-heading">Registration</div>
                                <div class="panel-body">
                                    <div class="col-md-11">
                                    <form role="form" action="update.php" method="post" autocomplete="on">
                                        <input type="hidden" name="id" class="form-control" id="fname" value="<?php echo $var->id;?>">
                                            <div class="row">
                                                <div class="form-group col-xs-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">Full Name</span>
                                                        <input type="text" name="firstname" class="form-control" id="fname" placeholder="First Name" value="<?php echo $var->firstname;?>" required >
                                                    </div>
                                                </div>
                                                <div class="form-group col-xs-6">
                                                    <input type="text" name="lastname" class="form-control" id="lname" value="<?php echo $var->lastname;?>" placeholder="Last Name" >
                                                </div>
                                            </div>
                                        <div class="row">
                                                <div class="form-group col-xs-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="addon1"><span class="glyphicon glyphicon-envelope"></span></span>
                                                        <input type="email" name="email" class="form-control" value="<?php echo $var->email;?>" placeholder="example@example.com" required>
                                                    </div>
                                                </div>
                                                <div class="form-group col-xs-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="addon1"><span class="glyphicon glyphicon-phone-alt"></span></span>
                                                        <input type="text" name="mobile" class="form-control" value="<?php echo $var->mobile;?>" placeholder="+88017XXXXXXXX" required >
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="row">
                                                <div class="form-group col-xs-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                                        <input type="date" name="dob" class="form-control" id="dob" value="<?php echo $var->dob;?>" required >
                                                    </div>
                                                </div>
                                            
                                            </div>
                                        <div class="form-group"">
                                                    Gender : <label class="radio-inline"><input type="radio" name="gender"value="Male" <?php if($var->gender=="Male"){echo "checked";}?>>Male</label>
                                                    <label class="radio-inline"><input type="radio" name="gender" value="Female" <?php if($var->gender=="Female"){echo "checked";}?>>Female</label>
                                                </div><br>
                                                 <div class="input-group">
                                                        <span class="input-group-addon" id="addon1"><span class="glyphicon glyphicon-envelope"></span></span>
                                                        <input type="text" name="username" class="form-control" value="<?php echo $var->username;?>" placeholder="example@example.com" disabled>
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
                                    <button type="submit" class="btn btn-success">Update</button>
                                  </form>		
                                </div>

                                </div>
                              </div>
<?php require_once '../layout/footer.php';?>
