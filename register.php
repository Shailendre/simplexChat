<?php

require_once('connect.php');

$username = $_POST['uname'];
$email = $_POST['email'];
$password = $_POST['password'];

$response = array();

$sql0 = "select * from users where username='$username' or email='$email'";


$rows = mysqli_num_rows(mysqli_query($conn,$sql0));

if($rows <= 0){
	$sql1 = "insert into users (username,email,password) values ('$username','$email','$password')";
	if(mysqli_query($conn,$sql1) === TRUE){
		$response['error'] = false;
		$response['url'] = 'http://localhost/simplexchat/chatindex.php';
		session_start();
		$_SESSION['user'] = $username;
	}else{
		$response['error'] = true;
		$response['flag'] = 'insertion failed';
	}
}else{
	$response['error'] = true;
	$response['flag'] = 'multiple users';
}

echo json_encode($response);

?>