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
                            
                                            
                                    <a class="btn btn-success" href="download-pdf.php">PDF</a>
                                    <a class="btn btn-danger" id="delete" href="download-xls.php">Excel</a>
                                      
                            <table class="table table-bordered">
                                <tr><th><h3>Full Name</h3></th><th><h3>Email</h3></th><th><h3>Mobile</h3></th><th><h3>Contact Group</h3></th><th><h3>Contact Picture</h3></th></tr>
                                <?php foreach($var as $contacts): ?>
                                <tr><td class="danger"><?php echo $contacts['firstname'] . " " . $contacts['lastname'];?></td>
                                <td class="success"><?php echo $contacts['email'];?></td>
                                <td class="success"><?php echo $contacts['mobile'];?></td>
                                <td class="success"><?php echo $contacts['groups'];?></td>
                                <td class="success" width="100">
                                       <img class='img-rounded' alt='Cinque Terre' width='80' height='50' src="contactimage/<?php echo $contacts['image']; ?>"></td>
                                
                                </tr>
                                <?php endforeach; ?>
                         </table>
                        </div>
                    </div>

<?php require_once '../layout/footer.php';?>