<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('servername', 'localhost');
define('username', 'root');
define('password', 'ab3135c2@');
define('dbname', 'kryptenweb');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(servername, username, password, dbname);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>