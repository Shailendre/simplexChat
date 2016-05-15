<?php
require_once('config.php');
$conn = mysqli_connect($host, $user, $paswd, $db);
if(!$conn)
	die('Connection failed: '.mysqli_connect_error);
?>