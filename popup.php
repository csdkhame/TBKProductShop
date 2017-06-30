<!DOCTYPE html>
<html lang="en">
<?php

//error_reporting(0);
require_once("mainfile.php");
$PHP_SELF = "index.php";
GETMODULE($_GET['name'],$_GET['file']);


?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

</head>

<!-- jQuery library -->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->

<!-- Latest compiled JavaScript -->
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->

<body> 
 <?php include ("".$MODPATHFILE."");?>

</body>

</html>
