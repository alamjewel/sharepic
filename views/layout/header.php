<?php

session_start();
include_once($_SERVER["DOCUMENT_ROOT"].DIRECTORY_SEPARATOR."form".DIRECTORY_SEPARATOR."vendor/autoload.php");


use SMS\Message\Message;
use SMS\Utility\Utility;
use SMS\Utility\Config;
use SMS\Auth\Auth;
//utility::dd($_REQUEST);
$new_login = new Auth();
$check=$new_login->is_loggedin();
$login_user="";
$login_user=$_SESSION['username'];
if(!$check){
    Message::set('<div class="alert alert-success"><strong>Please Login to View The Content!</strong></div>');
    Utility::redirect("../../index.php");
}
//utility::dd($_REQUEST);

?>
<html>
	<head>
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" media="all" />
                <link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css" media="all" />
		<link rel="stylesheet" href="../css/image.hover.css" type="text/css" />
                <script src="../js/fileinput.js" type="text/javascript"></script>
        
                <style>
                    .col-md-12{
                background-color:#E9573F;
                color:#fff;
                height:115px;
				position:relative;
               
            }
			.navbar-brand{
				color:red;
			}
                    
                </style>
	</head>
	<body>
           
        <nav class="navbar navbar-inverse navbar-fixed">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo config::WEBROOT;?>views/dashboard/index.php"><span class="glyphicon glyphicon-camera"></span>&nbsp;<span>SharePic</span></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?php echo config::WEBROOT;?>views/dashboard/index.php"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Browse<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo config::WEBROOT;?>views/dashboard/cat.php?cat=Nature">Nature</a></li>
          <li><a href="<?php echo config::WEBROOT;?>views/dashboard/cat.php?cat=Car">Car</a></li>
          <li><a href="<?php echo config::WEBROOT;?>views/dashboard/cat.php?cat=Technology">Technology</a></li>
          <li><a href="<?php echo config::WEBROOT;?>views/dashboard/cat.php?cat=Default">Default</a></li>
        </ul>
      </li>
     <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Phonebook<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#" data-toggle="modal" data-target="#addcontact">ADD Contact</a></li>
          <li><a href="<?php echo config::WEBROOT;?>views/phonebook/view.php">View Contact</a></li>
          <li><a href="<?php echo config::WEBROOT;?>views/phonebook/manage.php">Manage Contact</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $_SESSION['username'];?><span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo config::WEBROOT;?>views/dashboard/profile.php">View Profile</a></li>
          <li><a href="<?php echo config::WEBROOT;?>views/dashboard/edit.php">Update Profile</a></li>
          <li><a href="<?php echo config::WEBROOT;?>views/login/logout.php"><span class="glyphicon glyphicon-log-in"></span>&nbsp;LogOut</a></li>
        </ul>
      </li>
    </ul>
  
    <ul class="nav navbar-nav navbar-right">
       <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span>&nbsp;Submit</button>
      </form>
    </ul>
  </div>
</nav>
            
             <div class="container">
                 
                 <div>
                     <center>
                         <?php
                         if((array_key_exists('Message',$_SESSION))&&!empty($_SESSION['Message'])){
                             echo Message::flush();
                             }
                             ?>
                     </center>
                </div>
                 
                 <div id="addcontact" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                              <!-- Modal content-->
                              <div class="col-md-10">
                                 <div class="panel panel-primary">
                                <div class="panel-heading">Personal Phonebook</div>
                                <div class="panel-body">
                                        
                                    <form role="form" action="../phonebook/store.php" method="POST" autocomplete="on"enctype="multipart/form-data">
                    <h3>Enter Contact Details</h3>
                    <input type="hidden" name="contact_of" value="<?= $_SESSION['username']; ?>"/>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="first-name">First Name: </label><span style="color: red;"> &starf;</span>
                                <input type="text" name="firstname" class="form-control" id="first-name" autofocus="autofocus" required="required" placeholder="Enter your first name">
                            </div>
                            <div class="col-md-6">
                                <label for="last-name">Last Name:</label><span style="color: red;"> &starf;</span>
                                <input type="text" name="lastname" class="form-control" id="last-name" required="required" placeholder="Enter your last name">
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="profile_picture">Choose Profile Picture:</label>
                        <input type="file" name="contact_picture" class="file" id="profile_picture">
                        <small><i>(file size mustn't exceed 200kb. jpg/png allowed)</i></small>
                    </div>
                   
                    <h3>Contact</h3>
                    <div class="form-group">
                                <label for="mobile">Email: </label><span style="color: red;"> &starf;</span>
                                <input type="email" name="email" class="form-control" id="email" required="required">
                            </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="mobile">Mobile: </label><span style="color: red;"> &starf;</span>
                                <input type="tel" name="mobile" class="form-control" id="mobile" required="required">
                            </div>
                            <div class="col-md-6">
                                <label for="group">Contact Group:</label>
                                <select class="form-control" name="group" id="group">
                                    <option value="Friends">Friends</option>
                                    <option value="Family">Family</option>
                                    <option value="Work">Work</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group pull-right">
                        <a href="javascript:history.go(1)" class="btn btn-primary"><span class="glyphicon glyphicon-menu-left"></span> Back</a>
                        <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-user"></span> Create</button>
                    </div>
                </form>
                                        </div>
                                </div> 

                                </div>
                              </div>

                              </div>