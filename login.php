<?php
session_start();
include ('db_connect.php');

if (empty($_POST['user']) or empty($_POST['password'])){
	header('location: signin.php');
	exit();
}

$user = mysqli_real_escape_string($connect, $_POST['user']);
$password = mysqli_real_escape_string($connect, $_POST['password']);

$query = "SELECT * FROM users WHERE nickname = '$user' AND password = md5('$password')";

$result = mysqli_query($connect, $query);

$rows = mysqli_num_rows($result);

if($rows == 1){
	$_SESSION['user'] = $user;
	header('location: home.php');
	exit();
}else{
	header('location: signin.php');
	$_SESSION['not-authenticated'] = true;
	exit();
}
