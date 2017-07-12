<?php require_once '../layout/header.php';?>

<?php
use SMS\User\user;

//$login_user=$_SESSION['username'];
$user = new User();

$var = $user->profile($login_user);
?>
<div class="col-sm-2"></div>
                    <div class="panel panel-primary"> 
                        <div class="panel-heading"><center><h2>Profile Information</h2></center>
                        </div>
                        <div class="panel-body">
                            <table class="table table-bordered">
                                <tr><td class="success">Full Name</td><td class="danger"><?php echo $var->firstname." ".$var->lastname;?></td></tr>
                                <tr><td class="success">Email</td><td class="danger"><?php echo $var->email;?></td></tr>
                                <tr><td class="success">Mobile Number</td><td class="danger"><?php echo $var->mobile;?></td></tr>
                                <tr><td class="success">Date of Birth</td><td class="danger"><?php echo $var->dob;?></td></tr>
                                <tr><td class="success">Gender</td><td class="danger"><?php echo $var->gender;?></td></tr>
                                <tr><td class="success">User Name</td><td class="danger"><?php echo $var->username;?></td></tr>
                                <tr><td class="success">Password</td><td class="danger"><?php echo $var->password;?></td></tr>
                                
                         </table>
                        </div>
                    </div>
                

<?php require_once '../layout/footer.php';?>
