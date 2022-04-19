<?php 
session_start();

include('db_connect.php');

if (empty($_POST['user']) or empty($_POST['password'])){
	header('location: index.php');
	exit();
}
	$user = mysqli_real_escape_string($connect, $_POST['user']);
 	$password = mysqli_real_escape_string($connect, $_POST['password']);
 	$email = mysqli_real_escape_string($connect, $_POST['email']);

	$query = "SELECT * FROM users WHERE nickname = '$user' AND email = '$email' AND password = md5('$password')";

	$result = mysqli_query($connect, $query);

	$rows = mysqli_num_rows($result);

if($rows == 1){
	header('location: index.php');
	$_SESSION['existed'] = true;
	exit();
}

$user = mysqli_real_escape_string($connect, $_POST['user']);
$password = mysqli_real_escape_string($connect, $_POST['password']);
$email = mysqli_real_escape_string($connect, $_POST['email']);

$insert = "INSERT INTO `users`(`id`, `nickname`, `email`, `password`) VALUES (NULL ,'$user','$email',md5('$password'))";

mysqli_query($connect, $insert);

$_SESSION['user'] = $user;
header('location: home.php');