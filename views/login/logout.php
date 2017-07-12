<?php
session_start();
session_destroy();
$_SESSION['username']=array();
header("location:../../index.php");
?>
