<?php 

$server = "localhost";
$username = "root" ;
$password = "" ;
$db = "result" ;

$con = mysqli_connect($server, $username, $password, $db);

if(!$con){

	die ("Connection Error") . mysql_error() ;
}

 else {

 	echo "" ;
 }
?>