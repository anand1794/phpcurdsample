<?php
/*
// mysql_connect("database-host", "username", "password")
$conn = mysql_connect("localhost","root","root") 
			or die("cannot connected");

// mysql_select_db("database-name", "connection-link-identifier")
@mysql_select_db("test",$conn);
*/

/**
 * mysql_connect is deprecated
 * using mysqli_connect instead
 */

$databaseHost = 'm1035838testwebapp-mysqldbserver.mysql.database.azure.com';
$databaseName = 'testdb';
$databaseUsername = 'mysqldbuser@m1035838testwebapp-mysqldbserver';
$databasePassword = 'Mindtree@123';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
?>
