<?php
/*GROUP UNIT - Group A 
* By :
* Tom Anderson
* Peter Elliot
* Ciara McMahon
* Liam Maloney
*/
$hostname = "localhost";
$username = "banker";
$password = "javascript";

$dbname = "bank";

$con = mysql_connect($hostname, $username, $password);

if (!$con)
{
	die ("Could not connect : ".mysql_error());
}

if (!mysql_select_db($dbname, $con))
{
	die("Error in selecting the database");
} 

?>