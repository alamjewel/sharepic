<?php require_once '../layout/header.php';?>
<?php
use SMS\Phonebook\Phonebook;

//$login_user=$_SESSION['username'];
$contact = new Phonebook();

$var = $contact->view($login_user);


?>
<div class="panel panel-primary"> 
                        <div class="panel-heading"><center><h2>Contacts Information</h2></center>
                        </div>
                        <div class="panel-body">
                            <table class="table table-bordered">
                                <tr><th><h3>Full Name</h3></th><th><h3>Email</h3></th><th><h3>Mobile</h3></th><th><h3>Contact Group</h3></th><th><h3>Contact Picture</h3></th><th><h3>Action</h3></th></tr>
                                <?php foreach($var as $contacts): ?>
                                <tr><td class="danger"><?php echo $contacts['firstname'] . " " . $contacts['lastname'];?></td>
                                <td class="success"><?php echo $contacts['email'];?></td>
                                <td class="success"><?php echo $contacts['mobile'];?></td>
                                <td class="success"><?php echo $contacts['groups'];?></td>
                                <td class="success" width="100">
                                       <img class='img-rounded' alt='Cinque Terre' width='80' height='50' src="contactimage/<?php echo $contacts['image']; ?>"></td>
                                 <td width="140">
                                            <div class="btn-group">
                                            <a class="btn btn-success" href="edit.php?id=<?php echo $contacts['id'];?>">Edit</a>
                                            <a class="btn btn-danger" id="delete" href="delete.php?image=<?php echo $contacts['id'];?>">Delete</a>
                                       </td>
                                 </tr>
                                </tr>
                                <?php endforeach; ?>
                         </table>
                        </div>
                    </div>

<?php require_once '../layout/footer.php';?>