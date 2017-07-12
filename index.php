<?php
session_start();
include_once($_SERVER["DOCUMENT_ROOT"].DIRECTORY_SEPARATOR."form".DIRECTORY_SEPARATOR."vendor/autoload.php");

use SMS\Message\Message;
use SMS\Utility\Utility;
use SMS\User\user;
use SMS\Photo\Photo;


use SMS\Utility\Config;

//$login_user=$_SESSION['username'];
$Photo = new Photo();

$var = $Photo->index();
?>


<html>
	<head>
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" type="text/css" href="views/css/bootstrap.min.css" media="all" />
                <link rel="stylesheet" type="text/css" href="views/css/bootstrap-theme.min.css" media="all" />
		<link rel="stylesheet" href="views/css/image.hover.css" type="text/css" />
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
      <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-camera"></span>&nbsp;<span>SharePic</span></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?php echo config::WEBROOT;?>views/dashboard/index.php"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Browse<span class="caret"></span></a>
         <ul class="dropdown-menu">
          <li><a href="<?php echo config::WEBROOT;?>views/dashboard/catshow.php?cat=Nature">Nature</a></li>
          <li><a href="<?php echo config::WEBROOT;?>views/dashboard/catshow.php?cat=Car">Car</a></li>
          <li><a href="<?php echo config::WEBROOT;?>views/dashboard/catshow.php?cat=Technology">Technology</a></li>
          <li><a href="<?php echo config::WEBROOT;?>views/dashboard/catshow.php?cat=Default">Default</a></li>
        </ul>
      </li>
    </ul>
   <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span>&nbsp;Submit</button>
      </form>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#" data-toggle="modal" data-target="#signup"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#" data-toggle="modal" data-target="#login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
            <?php 
                if((array_key_exists('Message',$_SESSION))&&!empty($_SESSION['Message'])){
              echo Message::flush();
          }
          ?>
            
             <div class="container">
                            <h1>SharePic Gallery</h1>
                            <ul class="hoverbox">
                            <?php foreach($var as $photos): ?>
                            <li>
                            <a href="views/upload/userImage/<?php echo $photos['image'];?>"><img src="views/upload/userImage/<?php echo $photos['image'];?>" alt="description" ><img src="views/upload/userImage/<?php echo $photos['image'];?>" alt="description" class="preview" ></a>
                            <br><span class="label label-success"><a href="views/upload/userImage/<?php echo $photos['image'];?>" download>Download</a></span><small> uploaded by </small><span class="label label-info"><a href=""  class=""><?php echo $photos['username'];?></a></span>			
                            </li>
                            <?php endforeach; ?>
                            </ul>
                            <p id="footer"><a href="http://validator.w3.org/check/referer">XHTML</a> <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> <a href="http://www.contentquality.com/mynewtester/cynthia.exe?Url1=http://host.sonspring.com/hoverbox/">508</a> | Hoverbox by <a href="http://sonspring.com/">Nathan Smith</a>. | Read the <a href="http://sonspring.com/journal/hoverbox-image-gallery">Tutorial</a>.</p>
	
            
                 
                 <!-- Modal for login-->
                 
			<div id="login" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                              <!-- Modal content-->
                              <div class="col-md-8">
                                 <div class="panel panel-primary">
                                <div class="panel-heading">Login Panel</div>
                                <div class="panel-body">
                                    <div class="col-md-10">
                                    <form role="form" action="views/login/login_success.php" method="post" autocomplete="off">
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
                                    <form role="form" action="views/register/store.php" method="post" autocomplete="on">
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
            <script src="views/js/bootstrap.js"></script>
            <script>
            $(document).ready(function(){
            $('.alert').fadeOut(5000);
            }
            </script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
            <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
            </body>
</html>
      