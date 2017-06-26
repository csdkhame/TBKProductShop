<?
//file config.php
	$host = "localhost";
	$user = "testsystem_web";
	$pass = "testsystembooking!@#$";
	// $user = "root";
	// $pass = "root";
	$dbname = "db_imron";

	$conndb = mysql_connect($host,$user,$pass) or die ("Error");
	mysql_select_db($dbname,$conndb);

	mysql_query("SET NAME UTF8");


	

?>