<?php

if(!$_SESSION['user']){
	header('location: signin.php');
	exit();
}