<?php require_once '../layout/header.php';?>

<?php
use SMS\Phonebook\Phonebook;

//$login_user=$_SESSION['username'];
$contact = new Phonebook();

$var = $contact->edit($_GET['id']);
?>
<div class="panel panel-primary">
                                <div class="panel-heading">Personal Phonebook</div>
                                <div class="panel-body">
                                        
                                    <form role="form" action="../phonebook/update.php" method="POST" autocomplete="on"enctype="multipart/form-data">
                    <h3>Update Contact Details</h3>
                    <input type="hidden" name="id" value="<?php echo $var->id;?>"/>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="first-name">First Name: </label><span style="color: red;"> &starf;</span>
                                <input type="text" name="firstname" class="form-control" id="first-name" autofocus="autofocus" required="required" value="<?php echo $var->firstname;?>" placeholder="Enter your first name">
                            </div>
                            <div class="col-md-6">
                                <label for="last-name">Last Name:</label><span style="color: red;"> &starf;</span>
                                <input type="text" name="lastname" class="form-control" id="last-name" required="required" value="<?php echo $var->lastname;?>" placeholder="Enter your last name">
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="profile_picture">Choose Profile Picture:</label>
                        <input type="file" name="contact_picture" class="file" id="profile_picture">
                        <small><i>(file size mustn't exceed 200kb. jpg/png allowed)</i></small>
                        <input type="hidden" name="oldFileName" class="form-control" id="name" value="<?php echo $var->image;?>" >
                    </div>
                   
                    <h3>Contact</h3>
                    <div class="form-group">
                                <label for="mobile">Email: </label><span style="color: red;"> &starf;</span>
                                <input type="email" name="email" value="<?php echo $var->email;?>" class="form-control" id="email" required="required">
                            </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="mobile">Mobile: </label><span style="color: red;"> &starf;</span>
                                <input type="tel" name="mobile" class="form-control" id="mobile" required  value="<?php echo $var->mobile;?>">
                            </div>
                            <div class="col-md-6">
                                <label for="group">Contact Group:</label>
                                <select class="form-control" name="group" id="group">
                                    <option <?php if ($var->groups=="Friends"){echo "selected";}?> value="Friends">Friends</option>
                                    <option <?php if ($var->groups=="Family"){echo "selected";}?> value="Family">Family</option>
                                    <option <?php if ($var->groups=="Work"){echo "selected";}?> value="Work">Work</option>
                                    <option <?php if ($var->groups=="Other"){echo "selected";}?> value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group pull-right">
                        <button type="reset" class="btn btn-danger"><span class="glyphicon glyphicon-user"></span>Reset</button>
                        <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-user"></span>Update</button>
                    </div>
                </form>
                                        </div>
                                </div> 
<?php require_once '../layout/footer.php';?>
