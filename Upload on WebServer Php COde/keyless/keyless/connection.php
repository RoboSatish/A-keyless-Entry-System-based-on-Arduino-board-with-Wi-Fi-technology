<?php
/*
// mysql_connect("database-host", "username", "password")
$conn = mysql_connect("localhost","root","root") 
			or die("cannot connected");

// mysql_select_db("database-name", "connection-link-identifier")
@mysql_select_db("test2",$conn);
*/

/**
 * mysql_connect is deprecated
 * using mysqli_connect instead
 */
 
 
$dbcon=mysqli_connect("localhost","iautolab_raj","jaibalaji12##","iautolab_iita");


$databaseHost = 'localhost';
$databaseName = 'iautolab_iita';
$databaseUsername = 'iautolab_raj';
$databasePassword = 'jaibalaji12##';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
	
?>
