<?php
session_start();
include_once($_SERVER["DOCUMENT_ROOT"].DIRECTORY_SEPARATOR."form".DIRECTORY_SEPARATOR."vendor/autoload.php");


use SMS\Message\Message;
use SMS\Utility\Utility;
use SMS\Utility\Config;
use SMS\Auth\Auth;
use SMS\Phonebook\Phonebook;
//utility::dd($_REQUEST);
$new_login = new Auth();
$check=$new_login->is_loggedin();
$login_user="";
$login_user=$_SESSION['username'];
if(!$check){
    Message::set('<div class="alert alert-success"><strong>Please Login to View The Content!</strong></div>');
    Utility::redirect("../../index.php");
}

$contact = new Phonebook();

$var = $contact->pdf($login_user);
//utility::dd($var);


?>


<?php

$slno = 0;
foreach ($var as $contacts):
    $slno++;
    $trs .="<tr>";
    $trs .="<td>" . $slno . "</td>";
    $trs .="<td>" . $contacts['id'] . "</td>";
    $trs .="<td>" . $contacts['firstname'] . " " . $contacts['lastname'] .  "</td>";
    $trs .="<td>" . $contacts['email'] . "</td>";
    $trs .="<td>" . $contacts['mobile'] . "</td>";
    $trs .="<td>" . $contacts['groups'] . "</td>";
    //$trs .="<td>". $contacts['image'] . "</td>";
    $trs .="</tr>";
endforeach;
?>

<?php

$html = <<<FLAG
<!DOCTYPE html>
<html>
    <head>
        <title>Contact List</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            .delete{
                border:1px solid red;
            }
        </style>
    </head>
    
    <body>
        <h1>Contact List</h1>
     
        <table border="1">
            <thead>
                <tr>
                    <th>Serial</th>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Email</th>
                     <th>Mobile</th>
                    <th>Contact Group</th>
                    
                </tr>
            </thead>
            <tbody>
                echo $trs;
            </tbody>
        </table>
     </body>
</html>
FLAG;
?>
<?php

require_once $_SERVER["DOCUMENT_ROOT"] . DIRECTORY_SEPARATOR . "form" . DIRECTORY_SEPARATOR . "vendor" . DIRECTORY_SEPARATOR . 'mpdf' . DIRECTORY_SEPARATOR . 'mpdf' . DIRECTORY_SEPARATOR . 'mpdf.php';

$mpdf = new mPDF('c');
$mpdf->WriteHTML($html);
$mpdf->Output();
exit;