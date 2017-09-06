<?php

$username = 'root';
$password = 'admin';
$host = 'localhost';
$db = 'webpage';

$conn = mysqli_connect($host, $username, $password, $db);

if (!$conn) {
	echo "Oops"; 
}

?>