<?php 
require_once('connect.php');

$username = $_POST['uname'];
$password = $_POST['password'];


$response = array();

$sql = "select * from users where username='$username' and password='$password'";

$rows = mysqli_num_rows(mysqli_query($conn,$sql));

if($rows <= 0){
	$response['error'] = true;
	session_start();
	$_SESSION['user'] = $username;
}else{
	$response['error'] = false;
}

echo json_encode($response);

?>